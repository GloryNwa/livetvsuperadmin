@include ('includes/nav')



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
<div class="page-title"><h2 class="text-md text-highlight">Dashboard</h2>
<small>Welcome, <strong>{{Session::get('name')}}</strong></small>
</div>
<div class="flex"></div>
</div>
</div>
<div class="page-content page-container" id="page-content">
<div class="padding">
<div class="row row-sm sr">

<div class="col-md-4 d-flex">
<div class="card flex">
<div class="card-body">
<div class="d-flex align-items-center text-hover-success">
<div class="avatar w-56 m-2 no-shadow gd-primary"><i data-feather="film"></i></div>
<div class="px-4 flex">
<div>All Stations</div>
<div class="text-primary mt-2">{{count($state->data)}}</div>
</div>
<a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="card flex">
<div class="card-body">
<div class="d-flex align-items-center text-hover-success">
<div class="avatar w-56 m-2 no-shadow gd-primary"><i
data-feather="video"></i></div>
<div class="px-4 flex">
<div>Total Videos</div>
<div class="text-primary mt-2">{{count($resp->data->videos)}}</div> 
</div>
<a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
</div>
</div>
</div>
<div class="col-md-4 d-flex">
<div class="card flex">
<div class="card-body">
<div class="d-flex align-items-center text-hover-success">
<div class="avatar w-56 m-2 no-shadow gd-primary"><i
data-feather="users"></i></div>
<div class="px-4 flex">
<div>Total Users</div>
<div class="text-primary mt-2">{{count($resp->data->users)}}</div>
</div>
<a href="#" class="text-muted"><i data-feather="arrow-right"></i></a></div>
</div>
</div>
</div>


<div class="col-md-12 d-flex">
<div class="card flex">
<div class="p-3-4 bg-dark bg-img" data-stellar-background-ratio="0.1"
style="background-image: url(img/z4.jpg); border-radius: 5px 5px 0px 0px;" data-plugin="stellar">
<div class="d-flex">
<div>
<div style="font-size: medium" style="color:#244ac4 !important;">Recent Added Videos</div>
<!-- <small class="text-muted">Total: 30</small> -->
</div>
<span class="flex"></span>
<!-- <div><a href="#" style="background-color: white; color: black" class="btn btn-sm btn-white">More</a></div> -->
</div>
</div>


<div class="list list-row">
@foreach($resp->data->recent_videos as $vid) 
<div class="list-item" data-id="8">
<div><a href="#">
    <div class="media" style="width: 108px; height: 60px;"><a href="#" class="ajax media-content" style="background-image:url({{$vid->banner}})" data-pjax-state=""></a><div class="media-action media-action-overlay">
    <button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class="">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
    class="feather feather-heart active-danger">
    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5
    0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></button>
    <button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
    <button class="btn btn-icon no-bg no-shadow hide-row btn-more" data-toggle="dropdown">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
    <circle cx="12" cy="12" r="1"></circle>
    <circle cx="19" cy="12" r="1"></circle>
  <circle cx="5" cy="12" r="1"></circle></svg></button>
  <div class="dropdown-menu dropdown-menu-right"></div></div></div>
</a></div>

<div class="flex" ><a href="#" class="item-author text-color">{{$vid->title}}...</a></div>

<div class=""><a href="https://play.google.com/store/apps/details?id=org.lwnm.digitallib&hl=en"  class="item-author text-color" style="text-align:center">{{$vid->owner_id}}  </a></div>
<!-- category name -->
<div><a href="#" class="item-author text-color">{{$vid->created_at}}</a></div>
</div>
@endforeach
</div>
</div>
</div>


<div class="col-md-7">
<div class="card">
<div class="p-3-4">
<div class="d-flex">
<div>
<div>Recent Added Users</div>
<small class="text-muted">Total: 230</small>
</div>
<span class="flex"></span>
 <!-- <div><a href="#" class="btn btn-sm btn-white">More</a></div> -->
</div>
</div>

<table class="table table-theme v-middle m-0">
<tbody>
<?php $x = 1;?>
@foreach($resp->data->recent_users as $user)
<tr class="" data-id="4">
<td style="min-width:30px;text-align:center">{{$x++}}</td>
<td>
<div class="avatar-group"><a href="#"
class="avatar ajax w-32" data-toggle="tooltip" title="Consequat"></a></div>
</td>

<td class="flex"><a class="item-company ajax h-1x" style="color:#448bff;">{{$user->name}}</a>
<div class="item-mail h-1x d-none d-sm-block">
{{$user->email}}
</div>
</td>
<td><span class="item-amount d-none d-sm-block text-sm">{{$user->created_at}}</span></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
<div class="col-md-5 d-flex">
<div class="card flex">
<div class="p-3-4">
<div class="d-flex">
<div>
<div>Stations</div>
<small class="text-muted">Total: 1230</small>
</div>
<span class="flex"></span>

</div>
</div>

<div class="list list-row">
@foreach($state->data as $station)
<div class="list-item" data-id="6">
<!-- <div>
<a class="media media-16x9 r" href="video.detail.php"><span
class="media-content"
style="background-image:url(assets/img/z1.jpg)"></span></a>
</div> -->
<div class="flex"><a href="/station/profile/{{$station->id}}" class="item-author text-color">
{{$station->stationName}}</a>
</div>
<div>
<div class="item-action dropdown"><a href="#" data-toggle="dropdown"class="text-muted"><i
 data-feather="more-vertical"></i></a>
<div class="dropdown-menu dropdown-menu-right bg-light"
 role="menu"><a class="dropdown-item" href="#">See
    detail </a><a
        class="dropdown-item edit">Edit</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item trash">Delete item</a></div>
</div>
</div>
</div>
@endforeach

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->
<div id="footer" class="page-footer">
<div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. Internet Multimedia</span>
<div class="text-sm">Version 1.1.2</div>
</div>
</div><!-- ############ Footer END--></div>
<script src="/assets/js/site.min.js"></script>
</body>
</html>