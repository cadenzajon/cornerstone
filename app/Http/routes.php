<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/**
 * Model binding into route
 */
Route::model('blogcategory', 'App\BlogCategory');
Route::model('blog', 'App\Blog');
Route::pattern('slug', '[a-z0-9- _]+');

Route::group(array('prefix' => 'admin'), function() {
	//All basic routes defined here
	Route::get('login', array('as' => 'admin-login','uses' => 'AuthController@getLogin'));
	Route::post('login','AuthController@postLogin');
	Route::get('register', array('as' => 'admin-register','uses' => 'AuthController@getRegister'));
	Route::post('register','AuthController@postRegister');
	Route::get('logout', array('as' => 'logout','uses' => 'AuthController@getLogout'));

	Route::get('forgot_password',array('as' => 'forgot_password','uses' => 'AuthController@getForgotPassword'));
	Route::post('forgot_password','AuthController@postForgotPassword');
	# Forgot Password Confirmation
	Route::get('forgot_password/{userId}/{passwordResetCode}', array('as' => 'forgot_password_confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
	Route::post('forgot_password/{userId}/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');
});

Route::group(array('prefix' => 'admin', 'middleware' => 'SentinelAdmin'), function () {

	Route::get('/', array('as' => 'dashboard','uses' => 'ChandraController@showHome'));

	# User Management
    Route::group(array('prefix' => 'users'), function () {
    	Route::get('/', array('as' => 'users', 'uses' => 'UsersController@getIndex'));
		Route::get('create',array('as' => 'users.create', 'uses' => 'UsersController@getCreate'));
		Route::post('create', 'UsersController@postCreate');
		Route::get('{userId}/edit', array('as' => 'users.edit', 'uses' => 'UsersController@getEdit'));
		Route::post('{userId}/edit', 'UsersController@postEdit');
    	Route::get('{userId}/delete', array('as' => 'delete/user', 'uses' => 'UsersController@getDelete'));
		Route::get('{userId}/confirm-delete', array('as' => 'confirm-delete/user', 'uses' => 'UsersController@getModalDelete'));
		Route::get('{userId}/restore', array('as' => 'restore/user', 'uses' => 'UsersController@getRestore'));
		Route::get('{userId}', array('as' => 'users.show', 'uses' => 'UsersController@show'));
	});

	# Group Management
    Route::group(array('prefix' => 'groups'), function () {
        Route::get('/', array('as' => 'groups', 'uses' => 'GroupsController@getIndex'));
        Route::get('create', array('as' => 'create/group', 'uses' => 'GroupsController@getCreate'));
        Route::post('create', 'GroupsController@postCreate');
        Route::get('{groupId}/edit', array('as' => 'update/group', 'uses' => 'GroupsController@getEdit'));
        Route::post('{groupId}/edit', 'GroupsController@postEdit');
        Route::get('{groupId}/delete', array('as' => 'delete/group', 'uses' => 'GroupsController@getDelete'));
        Route::get('{groupId}/confirm-delete', array('as' => 'confirm-delete/group', 'uses' => 'GroupsController@getModalDelete'));
        Route::get('{groupId}/restore', array('as' => 'restore/group', 'uses' => 'GroupsController@getRestore'));
    });

	/*routes for blog*/
	Route::group(array('prefix' => 'blog','before' => 'Sentinel'), function () {
		Route::get('/', array('as' => 'blogs', 'uses' => 'BlogController@getIndex'));
		Route::get('create', array('as' => 'create/blog', 'uses' => 'BlogController@getCreate'));
		Route::post('create', 'BlogController@postCreate');
		Route::get('{blog}/edit', array('as' => 'update/blog', 'uses' => 'BlogController@getEdit'));
		Route::post('{blog}/edit', 'BlogController@postEdit');
		Route::get('{blog}/delete', array('as' => 'delete/blog', 'uses' => 'BlogController@getDelete'));
		Route::get('{blog}/confirm-delete', array('as' => 'confirm-delete/blog', 'uses' => 'BlogController@getModalDelete'));
		Route::get('{blog}/restore', array('as' => 'restore/blog', 'uses' => 'BlogController@getRestore'));
		Route::get('{blog}/show', array('as' => 'blog/show', 'uses' => 'BlogController@show'));
		Route::post('{blog}/storecomment', array('as' => 'restore/blog', 'uses' => 'BlogController@storecomment'));
	});

	/*routes for blog category*/
	Route::group(array('prefix' => 'blogcategory','before' => 'Sentinel'), function () {
		Route::get('/', array('as' => 'blogcategories', 'uses' => 'BlogCategoryController@getIndex'));
		Route::get('create', array('as' => 'create/blogcategory', 'uses' => 'BlogCategoryController@getCreate'));
		Route::post('create', 'BlogCategoryController@postCreate');
		Route::get('{blogcategory}/edit', array('as' => 'update/blogcategory', 'uses' => 'BlogCategoryController@getEdit'));
		Route::post('{blogcategory}/edit', 'BlogCategoryController@postEdit');
		Route::get('{blogcategory}/delete', array('as' => 'delete/blogcategory', 'uses' => 'BlogCategoryController@getDelete'));
		Route::get('{blogcategory}/confirm-delete', array('as' => 'confirm-delete/blogcategory', 'uses' => 'BlogCategoryController@getModalDelete'));
		Route::get('{blogcategory}/restore', array('as' => 'restore/blogcategory', 'uses' => 'BlogCategoryController@getRestore'));
	});

	Route::group(array('prefix' => 'file'), function () {
		Route::post('create', 'FileController@store');
		Route::post('createmulti', 'FileController@postFilesCreate');
		Route::delete('delete', 'FileController@delete');
	});

	# datatables
	Route::get('ajaxDatatables', 'DataTablesController@index');
	Route::get('datatables/data', array('as' => 'admin.datatables.data', 'uses' => 'DataTablesController@data'));

	# editable datatables
	Route::get('editable_datatables', 'DataTablesController@editableDatatableIndex');
	Route::get('editable_datatables/data', array('as' => 'admin.editable_datatables.data', 'uses' => 'DataTablesController@editableDatatableData'));
	Route::post('editable_datatables/create','DataTablesController@editableDatatableStore');
	Route::post('editable_datatables/{id}/update', 'DataTablesController@editableDatatableUpdate');
	Route::get('editable_datatables/{id}/delete', array('as' => 'admin.editable_datatables.delete', 'uses' => 'DataTablesController@editableDatatableDestroy'));
	

	//Remaining pages will be called from below controller method
	//in real world scenario, you may be required to define all routes manually
	Route::get('{name?}', 'ChandraController@showView');
	
	

});

#FrontEndController
Route::get('login', array('as' => 'login','uses' => 'FrontEndController@getLogin'));
Route::post('login','FrontEndController@postLogin');
Route::get('register', array('as' => 'register','uses' => 'FrontEndController@getRegister'));
Route::post('register','FrontEndController@postRegister');
Route::get('forgot-password',array('as' => 'forgot-password','uses' => 'FrontEndController@getForgotPassword'));
Route::post('forgot-password','FrontEndController@postForgotPassword');
# Forgot Password Confirmation
Route::get('forgot-password/{userId}/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'FrontEndController@getForgotPasswordConfirm'));
Route::post('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@postForgotPasswordConfirm');
# My account display and update details
Route::group(array('middleware' => 'SentinelUser'), function () {
    Route::get('my-account', array('as' => 'my-account', 'uses' => 'FrontEndController@myAccount'));
    Route::post('my-account', 'FrontEndController@updateAccount');
});
Route::get('logout', array('as' => 'logout','uses' => 'FrontEndController@getLogout'));
# contact form
Route::post('contact',array('as' => 'contact','uses' => 'FrontEndController@postContact'));

#frontend views
Route::get('/', array('as' => 'home', function () {
    return View::make('index');
}));

Route::get('blog', array('as' => 'blog', 'uses' => 'BlogController@getIndexFrontend'));
Route::get('blog/{slug}/tag', 'BlogController@getBlogTagFrontend');
Route::get('blog/{slug?}', 'BlogController@getBlogFrontend');
Route::post('blog/{blog}/comment', 'BlogController@storeCommentFrontend');

Route::get('{name?}', 'ChandraController@showFrontEndView');
# End of frontend views

