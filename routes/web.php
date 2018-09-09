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

Route::get('/', 'HomeController@index')->name('index');

Route::get('about', 'AboutController@about')->name('about');

Route::get('contribute', 'ContributeController@contribute')->name('contribute');

Route::get('contact', 'ContactController@contact')->name('contact');
Route::post('contact', 'ContactController@contactUs')->name('contact_us');
Route::get('subscribe', 'ContactController@subscribe')->name('subscribe');

Route::get('map', 'MapController@map')->name('map');

Route::get('search', 'SearchController@search')->name('search');

Route::get('stories', 'ArticleController@articles')->name('articles');
Route::get('stories/json', 'ArticleController@json')->name('article_json');

Route::get('guides', 'GuideController@guides')->name('guides');

// Route::get('users', 'UserController@users')->name('users');

// Route::post('users/new', 'UserController@register')->name('new_user');

Route::middleware('auth')->group(function() {
    Route::get('users/edit', 'UserController@showEditUsers')->name('show_edit_users');
    Route::post('users/edit', 'UserController@editUsers')->name('edit_users');
    Route::get('users/{id}', 'UserController@getUser')->name('user');
    Route::get('users/{id}/edit', 'UserController@showEditUser')->name('edit_user');
    Route::post('users/{id}/edit', 'UserController@editUser')->name('edit_user_post');

    Route::get('stories/featured', 'ArticleController@showFeatured')->name('edit_featured');
    Route::post('stories/featured', 'ArticleController@editFeatured')->name('post_edit_featured');
    Route::get('stories/unverified', 'ArticleController@unverified')->name('unverified');
    Route::get('stories/upload', 'ArticleController@showUpload')->name('upload_article');
    Route::post('stories/upload', 'ArticleController@upload')->name('post_upload_article');
    Route::get('stories/{name}/edit', 'ArticleController@showEdit')->name('edit_article');
    Route::post('stories/{name}/edit', 'ArticleController@edit')
        ->name('post_edit_article');
    Route::get('stories/{name}/delete', 'ArticleController@delete')->name('delete_article');

    Route::get('guides/upload', 'GuideController@showUpload')->name('upload_guide');
    Route::post('guides/upload', 'GuideController@upload')->name('post_upload_guide');
    Route::get('guides/{id}/upload', 'GuideController@showUploadItem')->name('upload_guide_item');
    Route::post('guides/{id}/upload', 'GuideController@uploadItem')->name('post_upload_guide_item');
    Route::get('guides/{id}/edit', 'GuideController@showEdit')->name('edit_guide');
    Route::post('guides/{id}/edit', 'GuideController@edit')
        ->name('post_edit_guide');
    Route::get('guides/{id}/{idd}/edit', 'GuideController@showEditItem')->name('edit_guide_item');
    Route::post('guides/{id}/{idd}/edit', 'GuideController@editItem')
        ->name('post_edit_guide_item');
    Route::post('guides/{id}/{idd}/remove', 'GuideController@removeItem')
        ->name('post_remove_guide_item');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('guides/{id}', 'GuideController@guide')->name('guide');
Route::get('stories/{name}', 'ArticleController@article')->name('article');
