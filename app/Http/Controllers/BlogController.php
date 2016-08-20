<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\BlogComment;
use App\Http\Requests;
use App\Http\Requests\BlogCommentRequest;
use App\Http\Requests\BlogRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;


class BlogController extends ChandraController {


    private $tags ;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Blog::allTags();
    }
    /**
     * @return \Illuminate\View\View
     */
    public function getIndexFrontend()
    {
        //featured blog
        $featured = Blog::where('featured',1)->orderBy('created_at','DESC')->first();
        // Grab all the blogs
        $blogs = Blog::latest()->where('id', '!=', is_object($featured) ? $featured->id : '')->simplePaginate(5);
        $blogs->setPath('blog');
        $tags = $this->tags;
        //return $tags;
        $latest = Blog::latest()->take(5)->get();
        // Show the page
        return View('blog.index', compact('featured','blogs','tags','latest'));
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getBlogFrontend($slug='')
    {
        if($slug=='')
        {
            $blog = Blog::first();
        }
        try {
            $blog = Blog::findBySlugOrFail($slug);
            $blog->increment('views');
        }
        catch(ModelNotFoundException $e)
        {
            return Response::view('404', array(), 404);
        }
        $popular = Blog::orderBy('views','DESC')->first();
        // Show the page
        return View('blog.show', compact('blog','popular'));

    }

    /**
     * @param $tag
     * @return \Illuminate\View\View
     */
    public function getBlogTagFrontend($tag)
    {
        $blogs = Blog::withAnyTags($tag)->simplePaginate(5);
        $blogs->setPath('blog/'.$tag.'/tag');
        $tags = $this->tags;
        return View('blog.index', compact('blogs','tags'));
    }

    /**
     * @param BlogCommentRequest $request
     * @param Blog $blog
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeCommentFrontend(BlogCommentRequest $request,Blog $blog)
    {
        $blogcooment = new BlogComment($request->all());
        $blogcooment->blog_id = $blog->id;
        $blogcooment->save();

        return redirect('blog/'.$blog->slug);
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        // Grab all the blogs
        $blogs = Blog::all();
        // Show the page
        return View('admin.blog.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        $blogcategory = BlogCategory::lists('title','id');
        return view('admin.blog.create',compact('blogcategory'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate(BlogRequest $request)
	{
        $blog = new Blog($request->except('image','tags','featured'));
        $picture = "";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension()?: 'png';
            $folderName      = '/uploads/blog/';
            $picture = str_random(10).'.'.$extension;
        }
        $blog->user_id = Sentinel::getUser()->id;
        $blog->featured = $request['featured']?1:0;
        $blog->image = $picture;
        $blog->save();

        if ($request->hasFile('image')) {
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
        }
        $blog->tag($request['tags']);
        return redirect('admin/blog');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Blog $blog
	 * @return view
	 */
	public function show(Blog $blog)
	{
        $comments = BlogComment::all();
        return view('admin.blog.show', compact('blog','comments','tags','popular'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Blog $blog
	 * @return view
	 */
	public function getEdit(Blog $blog)
	{
        $blogcategory = BlogCategory::lists('title','id');
        return view('admin.blog.edit', compact('blog','blogcategory'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  BlogRequest $request
     * @param Blog $blog
	 * @return Response
	 */
	public function postEdit(BlogRequest $request, Blog $blog)
	{
        $picture = "";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension()?: 'png';
            $folderName      = '/uploads/blog/';
            $picture = str_random(10).'.'.$extension;
            $blog->image = $picture;
        }
        $request->merge(['featured' => $request->has('featured')]);
        $blog->update($request->except('image','_method','tags'));

        if ($request->hasFile('image')) {
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
        }
        $blog->retag($request['tags']);

        return redirect('admin/blog');
	}

    /**
     * Remove blog.
     *
     * @param $website
     * @return Response
     */
    public function getModalDelete(Blog $blog)
    {
        $model = 'blog';
        $confirm_route = $error = null;
        try {
            $confirm_route =  route('delete/blog',['id'=>$blog->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = trans('blog/message.error.delete', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete(Blog $blog)
	{
        $blog->delete();
        return redirect('admin/blog');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function storecomment(BlogCommentRequest $request,Blog $blog)
    {
        $blogcooment = new BlogComment($request->all());
        $blogcooment->blog_id = $blog->id;
        $blogcooment->save();

        return redirect('admin/blog/'.$blog->id.'/show');
    }
}
