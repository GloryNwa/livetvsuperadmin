<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard | Loveworld Live Tv</title>
<meta name="description" content="Responsive, Bootstrap, BS4">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- style -->
<link rel="stylesheet" href="/assets/css/site.min.css">
</head>
<body class="layout-column">
<header id="header" class="page-header bg-white b-b">
<div class="navbar navbar-expand-lg"><!-- brand --> <a href="#" class="navbar-brand w w-auto-sm">
<img src="/assets/img/logo.png" alt="..."><span
class="hidden-folded d-inline l-s-n-1x w w-auto-sm">Loveworld Live Tv</span> </a><!-- / brand -->
<!-- Navbar collapse -->


<ul class="nav navbar-menu order-1 order-lg-2">
<li class="nav-item dropdown"><a class="nav-link px-2" data-toggle="dropdown">
 </a><!-- ############ Setting START-->
<div class="dropdown-menu dropdown-menu-center mt-3 w-md animate fadeIn">
<div class="setting px-3">
<!-- dropdown -->

<li class="nav-item dropdown"><a href="#" data-toggle="dropdown"
class="nav-link d-flex align-items-center px-2 text-color"><span
class="avatar w-24" style="margin: -2px"><img src="/assets/img/a0.jpg" alt="..."></span></a>
<div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn"><a class="dropdown-item"
    href=""><span>{{Session::get('name')}}</span>
</a>
<div class="dropdown-divider"></div>
<!-- <a class="dropdown-item" href="page.profile.html"><span>Profile</span> </a> -->
<div class="dropdown-divider"></div>
<!-- <a class="dropdown-item" href="settings.php"><span>Account Settings</span> </a> -->
<a
class="dropdown-item" href="{{route('logout')}}">Sign out</a></div>
</li><!-- Navarbar toggle btn -->
<li class="nav-item d-lg-none"><a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class
data-target="#navbarToggler"><i data-feather="search"></i></a></li>
<li class="nav-item d-lg-none"><a class="nav-link px-1" data-toggle="modal" data-target="#aside"><i
data-feather="menu"></i></a></li>
</ul>
</div>
</header>


<div id="main" class="layout-row flex"><!-- ############ Aside START-->
<div id="aside" class="page-sidenav no-shrink bg-white b-r nav-dropdown fade">
<div class="sidenav h-100 modal-dialog bg-white b-r"><!-- sidenav top --><!-- Flex nav content -->
<div class="flex scrollable hover">
<div class="nav-border b-primary" data-nav>
<ul class="nav bg">
<li class="nav-header hidden-folded"><span class="text-muted">Main</span></li>
<li><a href='{{route("dashboard")}}'><span class="nav-icon"><i data-feather="home"></i></span>
<span class="nav-text">Dashboard</span></a></li>

<li class="nav-header hidden-folded"><span class="text-muted">Videos </span></li>

<!-- <li><a href='{{route("create_video")}}'><span class="nav-icon"><i
data-feather="video"></i></span> <span class="nav-text">Create Videos</span> <span
class="nav-badge"></span></a></li> -->


<li><a href='{{route("upload_video")}}'><span class="nav-icon"><i
data-feather="upload"></i></span> <span class="nav-text">Upload Videos</span> <span
class="nav-badge"></span></a></li>

<li><a href='{{route("videos")}}'><span class="nav-icon"><i data-feather="youtube"></i></span>
<span class="nav-text">Videos</span></a></li>

<li class="nav-header hidden-folded"><span class="text-muted">All Users</span></li>

<li><a href='{{route("users")}}'><span class="nav-icon"><i
data-feather="users"></i></span> <span class="nav-text">Users</span> <span
class="nav-badge"></span></a></li>

<li class="nav-header hidden-folded"><span class="text-muted">View Stations</span></li>

<li><a href='{{route("stations")}}'><span class="nav-icon"><i
data-feather="film"></i></span> <span class="nav-text">Stations</span> <span
class="nav-badge"></span></a></li>


<li class="nav-header hidden-folded"><span class="text-muted">Manage Banners</span></li>
<li><a href='{{route("manageBanners")}}'><span class="nav-icon"><i
data-feather="settings"></i></span> <span class="nav-text">Banners</span> <span
class="nav-badge"></span></a></li>

<li class="nav-header hidden-folded"><span class="text-muted">Create Announcement</span></li>

<li><a href='{{route("anouncement")}}'><span class="nav-icon"><i
data-feather="pencil"></i></span> <span class="nav-text">Announcement</span> <span
class="nav-badge"></span></a></li>
<li class="nav-header hidden-folded"><span class="text-muted">Featured Videos</span></li>
<li><a href='{{route("featuredVideo")}}'><span class="nav-icon"><i
data-feather="film"></i></span> <span class="nav-text">Featured Videos</span> <span
class="nav-badge"></span></a></li>
<!--  -->
</ul>
</li>
</ul>
</div>
</div>
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
<div class="page-title"><h2 class="text-md text-highlight">Upload Videos Here</h2>

</div>
<div class="flex"></div>
</div>
</div>



<div class="page-content page-container" id="page-content">
<div class="padding">
<div class="row">
<div class="col-sm-12">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
 @endif


<form data-plugin="parsley" data-option="{}" method="POST" action="{{route('uploadvideos')}}" enctype="multipart/form-data">
<div class="card">
<!-- <div class="card-header"><p>Upload Videos</p></div> -->
<div class="card-body">

<div class="form-row">

<div class="form-group col-sm-6"><label>Title</label>
<input type="text" name="title" class="form-control" required></div>
<div class="form-group col-sm-6">

<label>Select Video Category</label>
<!-- 
<input field="select"class="form-control"required> -->
 <select name="category" class="form-control" required="">
   <option value=""></option>
   @foreach($res->data as $video) 
   <option value="{{$video->unique_id}}">{{$video->name}}</option>
   @endforeach
 </select>
</div>
</div>



<div class="form-row">
<div class="form-group col-sm-6"><label>Video ID</label>
<input type="text" name="title" class="form-control" required></div>
<div class="form-group col-sm-6">

<label>Select Station</label>
<!-- 
<input field="select"class="form-control"required> -->
<select name="category" class="form-control" required="">
   <option value=""></option>
   @foreach($stations->data as $station) 
   <option value="{{$station->id}}">{{$station->stationName}}</option>
   @endforeach
 </select>
</div>
</div>



<!-- <div class="form-group row"><label class="col-sm-4 col-form-label">Choose Banner</label>

<div class="form-group col-sm-12">
<div class="custom-file">
<input type="file" name="banner" class="custom-file-input" id="customFile"><label
class="custom-file-label" for="customFile">Select Banner</label></div>
</div>
</div> -->

<div class="form-group row"><label class="col-sm-4 col-form-label">Paste Video Link</label>
<div class="col-sm-12">
<div class="custom-file">
<input type="text" name="file" class="custom-file-input" id="">
<label
class="custom-file-label" for=""></label>

</div>
</div>
</div>

<div class="text-left">
<button type="submit" class="btn btn-primary">Upload</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div><!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->
<div id="footer" class="page-footer hide">
<div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. Internet Multimedia</span>
<div class="text-sm">Version 1.1.2</div>
</div>
</div><!-- ############ Footer END--></div>
<script src="assets/js/site.min.js"></script>
</body>
</html>