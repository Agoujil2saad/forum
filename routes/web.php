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

// les  pages statics 

Route::get('/', 'StaticPagesController@index');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/photo', 'StaticPagesController@photos');
Route::get('/restos', 'StaticPagesController@restos');
Route::get('/qui_sommes_nous', 'StaticPagesController@qui_sommes_nous');
Route::post('/contact_us', 'StaticPagesController@contact_us');
Route::get('/espace_presse', 'StaticPagesController@espace_presse');
Route::get('/tv_videos', 'StaticPagesController@tv_videos');
Route::get('/presse_ecrite', 'StaticPagesController@presse_ecrite');

// change language route
Route::get('language/{lang}', 'StaticPagesController@language')->where('lang', '[A-Za-z_-]+');


