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

Route::post('/login', 'UserController@login')->name("login");
Route::get('/login', 'UserController@loginPage')->name("loginPage");

// Route::group(['middleware'=>['auth']], function (){
Route::group(['middleware' => ['CheckUser']], function(){
Route::get('/dashboard','SuperAdminController@dashboard')->name("dashboard");


Route::get('/all/users', 'UserController@users')->name("users");
Route::get('/logout', 'UserController@logout')->name("logout");

Route::get('/videos', 'VideoController@videos')->name("videos");
Route::get('/create/video', 'VideoController@create_video')->name("create_video");
Route::get('/edit/video', 'VideoController@edit_video')->name("edit_video");
Route::get('/video/details', 'VideoController@video_detail')->name("video_details");
Route::get('/upload/video', 'VideoController@upload_video')->name("upload_video");
Route::post('/uploadvideos', 'VideoController@uploadvideos')->name("uploadvideos");

Route::get('/stations','StationController@stations')->name("stations");
Route::get('/station/details', 'StationController@station_details')->name("station_details");
Route::get('/station/profile/{id}','StationController@stationProfile')->name("stationProfile");
Route::post('/stationsprofile/{id}', 'StationController@stationsprofile')->name("stationsprofile");


Route::get('/create/featured/video', 'AnnouncementController@featuredVideo')->name("featuredVideo");
Route::get('/manage/banners', 'AnnouncementController@manageBanners')->name("manageBanners");
Route::get('/create/anouncement','AnnouncementController@anouncement')->name("anouncement");
Route::post('/postAnnouncement','AnnouncementController@postAnnouncement')->name("postAnnouncement");
});



// Route::get('/', function () {
//     Route::post('/login', 'UserController@login')->name("login");
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/users/input', 'HomeController@users');
// Route::post('adduser', 'HomeController@adduser');

// Route::get('/user/data', 'HomeController@data');
// Route::put('/updateData/{id}', 'HomeController@update');