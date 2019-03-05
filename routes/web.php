<?php


Route::get('/', function () {
    return view('index');
});
Route::get('admin', 'Admin\\AdminController@index');
Route::get('admin/about', 'Admin\\AboutController@index');
Route::get('admin/contact_queries','Admin\\ContactQueryController@index');
Route::get('admin/contact_us_footer', 'Admin\\ContactUsFooterController@index');
Route::get('admin/services','Admin\\ServicesController@index');
Route::get('admin/services/edit/{id}','Admin\\ServicesController@edit');
Route::get('admin/services/db','Admin\\ServicesController@storetodatabase');
Route::get('admin/services/create','Admin\\ServicesController@create');
Route::get('admin/give-role-permissions', 'Admin\\AdminController@getGiveRolePermissions');
Route::post('admin/give-role-permissions', 'Admin\\AdminController@postGiveRolePermissions');
Route::resource('admin/roles', 'Admin\\RolesController');
Route::resource('admin/permissions', 'Admin\\PermissionsController');
Route::resource('admin/users', 'Admin\\UsersController');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

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

