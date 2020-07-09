<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Super Admin | Loveworld Live Tv</title>
<meta name="description" content="Responsive, Bootstrap, BS4">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- style -->
<link rel="stylesheet" href="/assets/css/site.min.css">
<link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
class="avatar w-24" style="margin: -2px"><img src="/img/images.jpg" alt="..."></span></a>
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

<li class="nav-header hidden-folded"><span class="text-muted">Category</span></li>
<li><a href='{{route("createCategory")}}'><span class="nav-icon"><i
data-feather="settings"></i></span> <span class="nav-text">Create Category</span> <span
class="nav-badge"></span></a></li>
<li><a href='{{route("category")}}'><span class="nav-icon"><i
data-feather="settings"></i></span> <span class="nav-text">All Category</span> <span
class="nav-badge"></span></a></li>



<li class="nav-header hidden-folded"><span class="text-muted">View Stations</span></li>

<li><a href='{{route("stations")}}'><span class="nav-icon"><i
data-feather="film"></i></span> <span class="nav-text">Stations</span> <span
class="nav-badge"></span></a></li>


<li class="nav-header hidden-folded"><span class="text-muted">Manage Banners</span></li>
<li><a href='{{route("manageBanners")}}'><span class="nav-icon"><i
data-feather="settings"></i></span> <span class="nav-text">Banners</span> <span
class="nav-badge"></span></a></li>

<li><a href='{{route("createBanners")}}'><span class="nav-icon"><i
data-feather="settings"></i></span> <span class="nav-text">Create Banners</span> <span
class="nav-badge"></span></a></li>

<li class="nav-header hidden-folded"><span class="text-muted">Announcement</span></li>
<li><a href='{{route("announcement")}}'><span class="nav-icon"><i
data-feather="settings"></i></span> <span class="nav-text">Announcement</span> <span
class="nav-badge"></span></a></li>

<li><a href='{{route("createAnnouncement")}}'><span class="nav-icon"><i
data-feather="settings"></i></span> <span class="nav-text">Create Announcement</span> <span
class="nav-badge"></span></a></li>
<!--  -->


<li class="nav-header hidden-folded"><span class="text-muted">Featured Videos</span></li>
<li><a href='{{route("featuredVideo")}}'><span class="nav-icon"><i
data-feather="film"></i></span> <span class="nav-text">Featured Videos</span> <span
class="nav-badge"></span></a></li>

<li><a href='{{route("createFeaturedVideo")}}'><span class="nav-icon"><i
data-feather="settings"></i></span> <span class="nav-text">Create Featured Video</span> <span
class="nav-badge"></span></a></li>

<!-- <li><a href='{{route("createFeaturedVideo")}}'><span class="nav-icon"><i
data-feather="pencil"></i></span> <span class="nav-text">Create Featured Video</span> <span
class="nav-badge"></span></a></li> -->
<!--  -->
</ul>
</li>
</ul>
</div>
</div>