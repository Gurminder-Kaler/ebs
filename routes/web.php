<?php


Route::get('/', function () {
    return view('index');
});
Route::group(['middleware' => 'IsAdmin'], function () {
Route::get('admin/about', 'Admin\\AboutController@index');
Route::get('admin/contact_queries','Admin\\ContactQueryController@index');
Route::get('admin/contact_us_footer', 'Admin\\ContactUsFooterController@index');

//services
Route::get('admin/services','Admin\\ServicesController@index');
Route::get('admin/services/edit/{id}','Admin\\ServicesController@edit');
Route::post('admin/services/store','Admin\\ServicesController@store');
Route::get('admin/services/update/{id}','Admin\\ServicesController@update');
Route::get('admin/services/create','Admin\\ServicesController@create');
Route::delete('admin/services/delete/{id}','Admin\\ServicesController@destroy');
//portfolio
Route::get('admin/portfolio/','Admin\\PortfolioController@index');
Route::get('admin/portfolio/edit/{id}','Admin\\PortfolioController@edit');
Route::post('admin/portfolio/store','Admin\\PortfolioController@store');
Route::get('admin/portfolio/update/{id}','Admin\\PortfolioController@update');
Route::get('admin/portfolio/create','Admin\\PortfolioController@create');
Route::delete('admin/portfolio/delete/{id}','Admin\\PortfolioController@destroy');
//testimonials
Route::get('admin/testimonials/','Admin\\testimonialsController@index');
Route::get('admin/testimonials/edit/{id}','Admin\\testimonialsController@edit');
Route::post('admin/testimonials/store','Admin\\testimonialsController@store');
Route::get('admin/testimonials/update/{id}','Admin\\testimonialsController@update');
Route::get('admin/testimonials/create','Admin\\testimonialsController@create');
Route::delete('admin/testimonials/delete/{id}','Admin\\testimonialsController@destroy');


Route::get('admin', 'Admin\\AdminController@index');
Route::get('admin/give-role-permissions', 'Admin\\AdminController@getGiveRolePermissions');
Route::post('admin/give-role-permissions', 'Admin\\AdminController@postGiveRolePermissions');
Route::resource('admin/roles', 'Admin\\RolesController');
Route::resource('admin/permissions', 'Admin\\PermissionsController');
Route::resource('admin/users', 'Admin\\UsersController');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
//Front End Controller
Route::prefix('services')->group(function () {
	Route::get('/web_development','FrontEndController@view_service_web_development');
	Route::get('/web_designing','FrontEndController@view_service_web_designing');
	Route::get('/mobile_app_development','FrontEndController@view_service_mobile_app_development');
	Route::get('/digital_marketing','FrontEndController@view_service_digital_marketing');
	Route::get('/web_hosting','FrontEndController@view_service_web_hosting');
	Route::get('/content_writing','FrontEndController@view_service_content_writing');
});
Route::get('/about','FrontEndController@about');
Route::get('/portfolio','FrontEndController@portfolio');
Route::get('/blog','FrontEndController@blog');
Route::get('/contact','FrontEndController@contact');

