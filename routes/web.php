<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('contact', function () {
    return view('contact');
});*/
//domai/blog/fist-post

//routes for login section
//Auth::routes();



//Authendtication routes
Route::get('auth/login' ,['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

//Registration routes
Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('auth/register', 'Auth\RegisterController@register');

//password reset routes
Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/resetpage', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	//Route::get('/logout', 'AdminLoginController@adminLogout')->name('admin.logout');
});

//categories
Route::resource('categories' ,'CategoryController',['except' => ['create']]);

//user account
//Route::resource('account', 'AccountController');

//tags          
Route::resource('tags' ,'TagController',['except' => ['create']]);

//comments 
Route::post('comments/{post_id}', ['as' => 'comments.store', 'uses' => 'CommentsController@store']);
Route::get('comments/{id}/edit', ['as' => 'comments.edit', 'uses' => 'CommentsController@edit']);
Route::put('comments/{id}', ['as' => 'comments.update', 'uses' => 'CommentsController@update']);
Route::delete('comments/{id}', ['as' => 'comments.destroy', 'uses' => 'CommentsController@destroy']);
Route::get('comments/{id}/delete', ['as' => 'comments.delete', 'uses' => 'CommentsController@delete']);

//Route::resource('comments', 'CommentsController'); 

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);
Route::get('contact', "PagesController@getContact");
Route::post('contact', "PagesController@postContact");
Route::get('about', "PagesController@getAbout");
//Route::get('test', "PagesController@getTest");
Route::get('/', "PagesController@getIndex");
Route::resource('posts', 'PostController');  //to route all the action for post "CRUD"
Route::post('/like', ['as' => 'post.like', 'uses' => 'PostController@postLike']);

Route::get('/home', 'HomeController@index')->name('home');


