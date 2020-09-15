<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>Super Admin - Loveworld Live Tv</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/severny-admin-template/" />
    <!-- Custom CSS -->
    <link href="/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/site.min.css">
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <div class="app-container"></div>

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a>
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                        <a class="d-none d-md-block op-7 sidebartoggler" href="javascript:void(0)">
                            <span class="line line-1"></span>
                            <span class="line line-2"></span>
                            <span class="line line-3"></span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav align-items-center">
                       	<li class="nav-item d-none d-lg-block">
                            <div class="nav-link search-bar">
                                <form class="my-2 my-lg-0">
                                    <div class="customize-input customize-input-v4">
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search" style="color: white">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="user-profile text-center pt-2">
                <div class="d-flex align-items-center justify-content-center pb-3">

                </div>
                <div class="profile-section">
                    <p class="font-weight-light mb-0 font-18">Sis Dammy</p>
                    <span class="op-7 font-14"> Super Admin</span>
                    <div class="row border-top border-bottom mt-3 no-gutters">
                        <div class="col-6 border-right">
                            <a class="p-3 d-block menubar-height dropdown-toggle" id="bottom-sidebar" href="javascript:void(0)" data-display="static" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <span><i data-feather="settings" class="svg-icon op-7"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dd5">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Action Here</a>
                            </div>
                        </div>
                        <div class="col-6 border-right">
                            <a class="p-3 d-block menubar-height dropdown-toggle" id="bottom-sidebar" href="javascript:void(0)" data-display="static" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="settings" class="svg-icon op-7"></i></span>
                            </a>
							<div class="dropdown-menu" aria-labelledby="dd5">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Action Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{route('dashboard')}}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon" style="color:#3f50f6"></i><span
                                    class="hide-menu"style="color:#3f50f6">Dashboards
                                </span></a>
                        </li>


                    



                     <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="loader" class="feather-icon"></i><span class="hide-menu"> Videos</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('videos')}}">Videos</a>
                            <a class="dropdown-item" href="{{route('upload_video')}}">Upload Videos</a>
                           
                       </li> 













                       
                        <li class="sidebar-item"> <a class="sidebar-link" href='{{route("users")}}'
                                aria-expanded="false"><i data-feather="users" class="feather-icon" style="color:#3f50f6"></i><span
                                    class="hide-menu"style="color:#3f50f6">Users </span></a>
                        </li>



                        <li class="sidebar-item"> <a class="sidebar-link" href='{{route("stations")}}'
                                aria-expanded="false"><i data-feather="film" class="feather-icon" style="color:#3f50f6"></i><span
                                class="hide-menu" style="color:#3f50f6">View Stations
                                </span></a>
                        </li>

                        
                        

                               
                      <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="loader" class="feather-icon"></i><span class="hide-menu"> Category</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('category')}}">Category</a>
                            <a class="dropdown-item" href="{{route('createCategory')}}">Create Category</a>
                           
                       </li> 





                        
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="loader" class="feather-icon"></i><span class="hide-menu"> Sliders </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href='{{route("sliders")}}'>Sliders</a>
                            <a class="dropdown-item" href='{{route("manageSliders")}}'>Manage Sliders</a>
                           
                       </li> 








                                    
                      
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="loader" class="feather-icon"></i><span class="hide-menu"> Announcement </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href='{{route ("announcement")}}'>Announcement</a>
                            <a class="dropdown-item" href='{{route("createAnnouncement")}}'>Create Announcement</a>
                           
                       </li> 






                      
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="loader" class="feather-icon"></i><span class="hide-menu"> Featured Video </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href='{{route("createFeaturedVideo")}}'>Create Featured Video</a>
                            <a class="dropdown-item" href='{{route("featuredVideo")}}'>Manage Section</a>
                           
                       </li> 


                        
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="loader" class="feather-icon"></i><span class="hide-menu"> Section </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href='{{route("section")}}'>Create Section</a>
                            <a class="dropdown-item" href='{{route("manageSection")}}'>Manage Section</a>
                           
                       </li>


                        

                      
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('logout')}}"
                         aria-expanded="false"><i data-feather="log-out" class="feather-icon"  style="color:red"></i><span
                         class="hide-menu"  style="color:red">Logout</span></a></li>

                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>