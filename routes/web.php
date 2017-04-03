<?php


Route::get('/', function () {
    return view('index');
});

// Begin: new route
Route::get('/news/{id}', 'TidingsController@show');
// End: new route

// Begin: categories route
Route::get('/categories/{id}', 'CategoriesController@show');
// End: categories route

// Begin: find by tags route
Route::get('/news-by-tag/{tag}', 'TidingsController@findByTag');
// End: find by tags route

// Begin: register route
Auth::routes();

Route::get('/home', 'HomeController@index');
// End: register route

// Begin: admin routes
Route::get('/admin', 'AdminController@index');

Route::post('/admin/welcome', 'AdminController@auth');

Route::get('/admin/categories', 'AdminController@indexCategory');

Route::post('/admin/{category}', 'AdminController@createCategory');

Route::get('/admin/news/create', 'AdminController@indexNews');

Route::post('/admin/news/{news}', 'AdminController@createNews');

Route::get('/admin/welcome/comments', 'AdminController@Comments');

Route::get('/admin/approved-comments/check', 'AdminController@indexApprovedComments');

Route::post('/admin/approved-comments/{check}', 'AdminController@approvedComments');

Route::get('/admin/advertising/create', 'AdminController@indexAdveresting');

Route::post('/admin/advertising/{create}', 'AdminController@createAdveresting');

Route::get('/admin/welcome/styles', 'AdminController@style');
// End: admin routes

// Begin: search route
Route::get('/{search}', 'SearchController@search');
// End: search route

// Begin: comments route
Route::post('/news/{id}/comments', 'PostController@store');
// End: comments route

// Begin: comments of user route
Route::get('/comments/{id}', 'CommentsController@show');
// End: comments of user route



