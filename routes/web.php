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


Route::get('/', function () {
    return view('loginPage');
Route::get('/login', 'UserController@loginPage')->name('loginPage');


});
Route::post('/login', 'UserController@login')->name("login");


// Route::group(['middleware'=>['auth']], function (){
Route::group(['middleware' => ['CheckUser']], function(){
Route::get('/dashboard','SuperAdminController@dashboard')->name("dashboard");


Route::get('/all/users', 'UserController@users')->name("users");
Route::get('/logout', 'UserController@logout')->name("logout");

Route::get('/videos', 'VideoController@videos')->name("videos");
Route::get('/trash/video/{video_id}', 'VideoController@trashVideo')->name("trashVideo");
Route::get('/create/video', 'VideoController@create_video')->name("create_video");
Route::get('/edit/video/{video_id}', 'VideoController@edit_video')->name("edit_video");
Route::post('/update/{video_id}', 'VideoController@update')->name("update");
Route::get('/video/details', 'VideoController@video_detail')->name("video_details");
Route::get('/upload/video', 'VideoController@upload_video')->name("upload_video");
Route::post('/uploadvideos', 'VideoController@uploadvideos')->name("uploadvideos");
Route::get('/featured/videos', 'VideoController@featuredVideo')->name("featuredVideo");
Route::get('/create/featured/videos', 'VideoController@createFeaturedVideo')->name("createFeaturedVideo");
Route::post('/postVideo', 'VideoController@postVideo')->name("postVideo");
Route::get('delete/video/{id}', 'VideoController@deleteVideo')->name("deleteVideo");
Route::get('all/category', 'VideoController@category')->name("category");
Route::get('/create/category','VideoController@createCategory')->name("createCategory");
Route::post('/postCategory','VideoController@postCategory')->name("postCategory");
Route::get('/edit/category/{id}','VideoController@editCat')->name("editCat");


Route::get('/stations','StationController@stations')->name("stations");
Route::get('/station/details', 'StationController@station_details')->name("station_details");
Route::get('/station/profile/{id}','StationController@stationProfile')->name("stationProfile");
Route::post('/stationsprofile/{id}', 'StationController@stationsprofile')->name("stationsprofile");


// Route::get('/create/featured/video', 'AnnouncementController@featuredVideo')->name("featuredVideo");
Route::get('/manage/banners', 'AnnouncementController@manageBanners')->name("manageBanners");
Route::get('/create/banners', 'AnnouncementController@createBanners')->name("createBanners");
Route::post('/postBanners', 'AnnouncementController@postBanners')->name("postBanners");

Route::get('/create/anouncement','AnnouncementController@createAnnouncement')->name("createAnnouncement");
Route::post('/postAnnouncement','AnnouncementController@postAnnouncement')->name("postAnnouncement");
Route::get('announcement','AnnouncementController@announcement')->name("announcement");
Route::get('/edit/announcement','AnnouncementController@editAnnouncement')->name("editAnnouncement");
Route::get('/edit/announcement','AnnouncementController@edit')->name("edit");
Route::get('delete/announcement/{id}', 'VideoController@delete')->name("delete");
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