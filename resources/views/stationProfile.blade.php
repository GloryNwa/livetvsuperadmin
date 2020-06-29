@include ('includes/header')


<!-- sidenav bottom -->
<div class="no-shrink">
<div class="p-3 d-flex align-items-center">
</div>
</div>
</div>
</div>
<div class="flex"><!-- ############ Content START-->
<div id="content" class="flex"><!-- ############ Main START-->
<div>
<div class="page-hero page-container" id="page-hero">
<div class="padding d-flex">
<div class="page-title"><h2 class="text-md text-highlight">Edit Station Here</h2>
<small>Welcome, <strong>{{Session::get('name')}}</strong></small>
</div>
<div class="flex"></div>
</div>
</div>

<div class="page-content page-container" id="page-content">
<div class="padding">
<div id="accordion"><p class="text-muted"><strong>Account</strong></p>
<div class="card">
<!-- <div class="d-flex align-items-center px-4 py-3 pointer" data-toggle="collapse"
data-parent="#accordion" data-target="#c_1"> -->
<!-- <div><span class="w-48 avatar circle bg-info-lt" data-toggle-class="loading"><img
src="/assets/img/a9.jpg" alt="."></span></div>
<div class="mx-3 d-none d-md-block"><strong>{{Session::get('name')}}</strong>
<div class="text-sm text-muted">{{Session::get('email')}}</div>
</div> -->
<!-- <div class="flex"></div>
<div class="mx-3"><i data-feather="chevron-right"></i></div>
<div><a href="signin.1.html" class="text-prmary text-sm">Sign Out</a></div>
</div> -->
<div class="collapse p-4" id="c_1">
<form role="form">
<div class="form-group"><label>Profile picture</label>
<div class="custom-file"><input type="file" class="custom-file-input"
id="customFile"><label class="custom-file-label"
for="customFile">Choose
file</label></div>
</div>
<div class="form-group"><label>First Name</label><input type="text"
class="form-control"></div>
<div class="form-group"><label>Last Name</label><input type="text"
class="form-control"></div>
<button type="submit" class="btn btn-primary mt-2">Update</button>
</form>
</div>

<div class="d-flex align-items-center">
<!-- <div class="px-3"> -->
<!-- <div>Sync</div>
<div class="text-sm text-muted">On - Sync everything</div> -->
<!-- </div> -->
<!-- <div class="flex"></div> -->
<!-- <span><label class="ui-switch ui-switch-md"><input type="checkbox"
checked="checked">
 <i></i></label></span> -->
</div>
<div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse"
data-parent="#accordion" data-target="#c_2"><i data-feather="film"></i>
<div class="px-3">
<div>Station</div>
</div>
<div class="flex"></div>
<div><i data-feather="chevron-right"></i></div>
</div>
<div class="collapse p-4" id="c_2">
<form role="form" method="POST" action="/stationsprofile">
<div class="form-group"><label>Station Name</label>
<input type="text" name="name" class="form-control"  value="{{ $station->stationName}}" >
</div>
<div class="form-group"><label>Station Description</label>
<input type="text" name="desc" class="form-control"  value="{{$station->description}}" >
</div>
<div class="form-group"><label>Url</label>
<input type="text"class="form-control" name="url"  value="{{$station->url}}" >
</div>
<div class="form-group"><label>Email</label>
<input type="email"class="form-control" name="email"  value="{{$station->email}}" >
</div>
<div class="form-group"><label>Paypal_id</label>
<input type="text"class="form-control" name="paypal"  value="{{$station->paypal_id}}" >
</div>
<div class="form-group"><label>Phone Numbers</label>
                                     
                                            
<input type="text"class="form-control" name="phone"  value="" >
                                         
</div>
<div class="form-group"><label>Thumbnails</label>
<input type="text"class="form-control" name="thumbnail"  value="{{$station->thumbnail}}" >
</div>

<div class="form-group"><label>Donate Url</label>
<input type="text"class="form-control" name="donateurl"  value="{{$station->donateurl}}" >
</div>
<div class="form-group"><label>Web Url</label>
<input type="text"class="form-control" name="weburl"  value="{{$station->weburl}}" >
</div>
<div class="form-group"><label>Schedule Url</label>
<input type="text"class="form-control" name="scheduleurl"  value="{{$station->scheduleurl}}" >
</div>
<div class="form-group"><label>Kingspay Code</label>
<input type="text"class="form-control" name="kingspay"  value="{{$station->kingspaycode}}" >
</div>
<div class="form-group"><label>Unique_id</label>
<input type="text"class="form-control" name="unique_id"  value="{{$station->unique_id}}" >
</div>
<div class="form-group"><label>Chat Room</label>
<input type="text"class="form-control" name="chatroom"  value="{{$station->chatRoom}}" >
</div>
<div class="form-group"><label>Numbers of Comments</label>
<input type="text"class="form-control" name="chatroom"  value="{{$station->numOfComments}}" >
</div>
<div class="form-group"><label>Time</label>
<input type="text"class="form-control" name="banner"  value="{{ $station->created_at}}" >
</div>

<button type="submit" name="submit" class="btn btn-primary mt-2">Update</button>
</form>
</div>
<div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse"
data-parent="#accordion" data-target="#c_3"><i data-feather="credit-card"></i>
<div class="px-3">
<div>Payment methods</div>
</div>
<div class="flex"></div>
<div><i data-feather="chevron-right"></i></div>
</div>
<div class="collapse p-4" id="c_3">
<form role="form">
<div class="form-group"><label>Paypal account</label><input type="input"
class="form-control">
</div>
<button type="submit" class="btn btn-primary mt-2">Update</button>
</form>
</div>
<!-- <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse"
data-parent="#accordion" data-target="#c_4"><i data-feather="map-pin"></i>
<div class="px-3">
<div>Addresses and more</div>
</div>
<div class="flex"></div>
<div><i data-feather="chevron-right"></i></div>
</div>
<div class="collapse p-4" id="c_4">
<form role="form">
<div class="form-group"><label>URL</label><input type="text" class="form-control">
</div>
<div class="form-group"><label>Company</label><input type="text"
class="form-control"></div>
<div class="form-group"><label>Location</label><input type="text"
class="form-control"></div>
<button type="submit" class="btn btn-primary mt-2">Update</button>
</form>
</div>
</div>
<p class="text-muted"><strong>Notifications</strong></p>
<div class="card">
<div class="d-flex align-items-center px-4 py-3">
<div>Anyone seeing my profile page</div>
<div class="flex"></div>
<span><label class="ui-switch ui-switch-md"><input
type="checkbox"> <i></i></label></span></div>
<div class="d-flex align-items-center px-4 py-3 b-t">
<div>Anyone follow me</div>
<div class="flex"></div>
<span><label class="ui-switch ui-switch-md"><input type="checkbox"
checked="checked"> <i></i></label></span>
</div>
<div class="d-flex align-items-center px-4 py-3 b-t">
<div>Anyone send me a message</div>
<div class="flex"></div>
<span><label class="ui-switch ui-switch-md"><input type="checkbox"
checked="checked"> <i></i></label></span>
</div>
<div class="d-flex align-items-center px-4 py-3 b-t">
<div>Anyone invite me to group</div>
<div class="flex"></div>
<span><label class="ui-switch ui-switch-md"><input
type="checkbox"> <i></i></label></span></div>
<div class="d-flex align-items-center px-4 py-3 b-t">
<div>Update</div>
<div class="flex"></div>
<span><label class="ui-switch ui-switch-md"><input type="checkbox"
checked="checked"> <i></i></label></span>
</div>
</div>
<p class="text-muted"><strong>Emails</strong></p>
<div class="card">
<div class="d-flex align-items-center px-4 py-3">
<div>Anyone posts a comment on my post</div>
<div class="flex"></div>
<span><label class="ui-switch ui-switch-md"><input
type="checkbox"> <i></i></label></span></div>
<div class="d-flex align-items-center px-4 py-3 b-t">
<div>Anyone follow me</div>
<div class="flex"></div>
<span><label class="ui-switch ui-switch-md"><input type="checkbox"
checked="checked"> <i></i></label></span>
</div>
<div class="d-flex align-items-center px-4 py-3 b-t">
<div>Anyone repost</div>
<div class="flex"></div>
<span><label class="ui-switch ui-switch-md"><input
type="checkbox"> <i></i></label></span></div>
</div> -->
<!-- <p class="text-muted"><strong>Security</strong></p> -->
<div class="card">
<div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse"
data-parent="#accordion" data-target="#c_5">
<div>Delete account?</div>
<div class="flex"></div>
<div><i data-feather="chevron-right"></i></div>     
</div>
<div class="collapse p-4" id="c_5">
<div class="py-3"><p>Are you sure to delete your account?</p>
<button type="button" class="btn btn-white">No</button>
<button type="button" class="btn btn-danger">Yes</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div><!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->
<div id="footer" class="page-footer hide">
<div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. flatfull.com</span>
<div class="text-sm ">Version 1.1.2</div>
</div>
</div><!-- ############ Footer END--></div>
<script src="/assets/js/site.min.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/basik/html/page.setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 May 2020 09:26:18 GMT -->
</html>