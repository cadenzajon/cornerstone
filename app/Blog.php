<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentTaggable\Taggable;

class Blog extends Model{

    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;
    use Taggable;

    protected $dates = ['deleted_at'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $table = 'blogs';

    protected $guarded  = array('id');

    protected $casts = [ 'featured' => 'boolean'];

    public function comments()
    {
        return $this->hasMany('App\BlogComment');
    }
    public function category()
    {
        return $this->belongsTo('App\BlogCategory');
    }
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function getBlogcategoryAttribute()
    {
        return $this->category->lists('id');
    }
}
