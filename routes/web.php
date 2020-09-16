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
Route::post('/delete/user/{user_id}', 'UserController@deleteUser')->name("deleteUser");

Route::get('/logout', 'UserController@logout')->name("logout");
///////////////////////////VIDEOS/////////////////////////////////////////////////////////
Route::get('/videos', 'VideoController@videos')->name("videos");
Route::get('/trash/video/{video_id}', 'VideoController@trashVideo')->name("trashVideo");
Route::get('/create/video', 'VideoController@create_video')->name("create_video");
Route::get('/edit/video/{video_id}', 'VideoController@edit_video')->name("edit_video");
Route::post('/video/update', 'VideoController@update')->name("update");
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
Route::get('/edit/category/{unique_id}','VideoController@editCat')->name("editCat");
Route::post('/edit/category','VideoController@editCategory')->name("editCategory");

Route::get('/activate/video/{video_id}','VideoController@activatevideo')->name("activatevideo");
Route::get('/change/status/{video_id}','VideoController@changeStatus')->name("changeStatus");

/////////////////////////////////STATIONS///////////////////////////////////////////////////////
Route::get('/stations','StationController@stations')->name("stations");
Route::get('/station/details', 'StationController@station_details')->name("station_details");
Route::get('/station/profile/{id}','StationController@stationProfile')->name("stationProfile");
Route::post('/stationsprofile/{id}', 'StationController@stationsprofile')->name("stationsprofile");


// Route::get('/create/featured/video', 'AnnouncementController@featuredVideo')->name("featuredVideo");
Route::get('/manage/banners', 'AnnouncementController@manageBanners')->name("manageBanners");
Route::get('/create/banners', 'AnnouncementController@createBanners')->name("createBanners");
Route::post('/postBanners', 'AnnouncementController@postBanners')->name("postBanners");

/////////////////////////////SLIDER///////////////////////////////////////////////////////////////
Route::get('/create/sliders', 'SliderController@sliders')->name("sliders");
Route::get('/manage/sliders',    'SliderController@manageSliders')->name("manageSliders");
Route::post('/postSlider',    'SliderController@postSlider')->name("postSlider");
Route::post('/postSliderFile','SliderController@postSliderFile')->name("postSliderFile");


//////////////////////////////SECTION//////////////////////////////////////////////////////////////
Route::get('/create/section','SectionController@section')->name("section");
Route::post('/postSection','SectionController@postSection')->name("postSection");
Route::get('/manage/section','SectionController@manageSection')->name("manageSection");
Route::get('/edit/section/{id}','SectionController@editSection')->name("editSection");
Route::post('/update/section','SectionController@updateSection')->name("updateSection");

Route::get('/delete/section/{id}','SectionController@deleteSection')->name("deleteSection");

//////////////////////////////ANNOUNCEMENT//////////////////////////////////////////////////////////
Route::get('/create/anouncement','AnnouncementController@createAnnouncement')->name("createAnnouncement");
Route::post('/postAnnouncement','AnnouncementController@postAnnouncement')->name("postAnnouncement");
Route::get('announcement','AnnouncementController@announcement')->name("announcement");
Route::get('/edit/announcement','AnnouncementController@editAnnouncement')->name("editAnnouncement");
Route::get('/edit/announcement','AnnouncementController@edit')->name("edit");
Route::get('delete/announcement/{id}', 'VideoController@deleteAnnouncement')->name("deleteAnnouncement");

//Search 
Route::post('/search','SearchController@returnSearch')->name("returnSearch");

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