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


/*
	front page of the website 
*/
Route::get('/', 'HomeController@index');


/*
	about page of the web site 		
*/

Route::get('/about', 'HomeController@about');

/*
	contact us  page of the web site 		
*/

Route::get('/contact_us', 'HomeController@contact_us');


/*
	product  page of the web site 		
*/

Route::get('/product', 'ProductController@index');


/*
	contact us  		
*/

Route::POST('/storeContactUs', 'HomeController@storeContactUs');



/*---------------Admin side Route-------------------*/


/**/
Route::get('/admin-home', 'admin\HomeController@index');


/**/
Route::get('/admin-contact', 'admin\HomeController@contact');

/**/
Route::get('/admin-view-single-contact-details/{id}', 'admin\HomeController@view_single_contact_details')
->name('view_single_contact_details');
