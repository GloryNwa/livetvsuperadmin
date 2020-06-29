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
<div class="page-container">
<div class="padding sr">
<div class="row no-gutters list-grouped">
<div class="col-sm-6">
<div class="list-item list-overlay r mb-3">
<div class="media media-4x3"><a href="playlist_detail.php#" class="ajax media-content"
  style="background-image:url(assets/img/z7.jpg)"></a>
<div class="media-action"></div>
</div>
<div class="list-content p-5">
<div class="list-body"><a href="playlist_detail.php#"
class="list-title title ajax h4 font-weight-bold">Amazing
songs </a></div>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="list-item list-overlay r mb-3">
<div class="media media-4x3"><a href="playlist_detail.php#" class="ajax media-content"
                        style="background-image:url(assets/img/z8.jpg)"></a>
<div class="media-action"></div>
</div>
<div class="list-content p-5">
<div class="list-body"><a href="playlist_detail.php#"
                        class="list-title title ajax h4 font-weight-bold">Weekly top
albums </a></div>
</div>
</div>
</div>
</div>
<div class="heading py-2 d-flex">
<div>
<div class="text-muted text-sm sr-item">Weekly</div>
<h5 class="text-highlight sr-item">Most Watched Videos</h5></div>
<span class="flex"></span></div>
<div class="slick slick-visible slick-arrow-top row sr-item" data-plugin="slick" data-option="{
slidesToShow: 6,
slidesToScroll: 1,
dots: false,
rtl: false,
responsive: [
{
breakpoint: 1200,
settings: {
slidesToShow: 6
}
},
{
breakpoint: 920,
settings: {
slidesToShow: 4
}
},
{
breakpoint: 768,
settings: {
slidesToShow: 3
}
},
{
breakpoint: 576,
settings: {
slidesToShow: 2
}
}
]
}">
@foreach($videos->data->videos as $vid)
<div class="col-2" data-id="92570808" data-category="Pop" data-tag="Canada"
data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music4/v4/64/3d/c1/643dc113-29d1-08de-78e2-a4ab4c3f1730/mzaf_5420937162202173294.plus.aac.p.m4a">
<div class="list-item slick-item r mb-3">
<div class="media"><a class="ajax media-content"style="background-image:url({{$vid->banner}})"></a>
<div class="media-action media-action-overlay">
<button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
        data-feather="heart" class="active-danger"></i></button>
<button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
<button class="btn btn-icon no-bg no-shadow hide-row btn-more"
        data-toggle="dropdown"><i data-feather="more-horizontal"></i></button>
<div class="dropdown-menu dropdown-menu-right"></div>
</div>
</div>
<div class="list-content text-center">
<div class="list-body"><a href="#">



<div class="list-title title ajax h-1x">{{$vid->title}}</a><a

    class="list-subtitle d-block text-muted subtitle ajax h-1x"></a></div>                         
</div>
</div>
</div>

</div>
@endforeach

<div class="row">
<div class="col-md-6">
<div class="heading py-2 d-flex">
<div>

<div class="text-muted text-sm sr-item">Playlists</div>
<h5 class="text-highlight sr-item">Recently Added Videos</h5></div>
<span class="flex"></span></div>
<?php $x= 1;?>
@foreach($videos->data->recent_videos as $video) 
<div class="row list-row"><br>


<div class="col-12" data-id="82924078" data-category="France" data-tag="Electronic"
data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/v4/fa/37/1c/fa371cea-559d-f418-506a-5fdf64bed3fe/mzaf_1505180730434746810.plus.aac.p.m4a">
<div class="list-item r">

<a style="color:#448bff;">{{$x++}}</a>&nbsp;&nbsp;
<div class="media"><a href="#" class="ajax media-content"
style="background-image:url({{$video->banner}})"></a>
<div class="media-action media-action-overlay">
<button class="btn btn-icon no-bg no-shadow hide-row" data-toggle-class><i
data-feather="heart" class="active-danger"></i></button>
<button class="btn btn-raised btn-icon btn-rounded bg--white btn-play"></button>
<button class="btn btn-icon no-bg no-shadow hide-row btn-more"
data-toggle="dropdown"><i data-feather="more-horizontal"></i>
</button>
<div class="dropdown-menu dropdown-menu-right"></div>
</div>
</div>


<div class="list-content text-center">
<div class="list-body"><a href="#"
class="list-title title ajax h-1x">{{substr($video->title,0,19)}}...</a><a

class="list-subtitle d-block text-muted subtitle ajax h-1x"></a></div>
</div>

<div class="list-action show-row">
<div class="d-flex align-items-center">
<div class="px-3 text-sm d-none d-md-block">{{$video->created_at}}</div>
<button class="btn btn-icon no-bg no-shadow" data-toggle-class><i
data-feather="heart" class="active-danger"></i></button>
<button class="btn btn-icon no-bg no-shadow btn-more"
data-toggle="dropdown"><i data-feather="more-horizontal"></i>
</button>
<div class="dropdown-menu dropdown-menu-right"></div>
</div>
</div>
</div>
</div>
</div>
@endforeach
</div>


<div class="col-md-6">
<div class="heading py-2 d-flex">
<div>
<div class="text-muted text-sm sr-item">Upcoming</div>
<h5 class="text-highlight sr-item">Events</h5></div>
<span class="flex"></span></div>
<div class="row row-sm">
<div class="col-6">
<div class="list-item list-overlay r mb-3 gd-primary">
<div class="media media-4x3"><a href="playlist_detail.php#" class="ajax media-content"
style="background-image:url('')"></a>
<div class="media-action"></div>
</div>
<div class="list-content p-4">
<div class="list-body"><a href="playlist_detail.php#"
class="list-title title ajax h5 font-weight-bold">LIMA Award and Festival</a></div>
<div class="list-footer">
<div class="text-muted text-sm">Feb 29, 6:30 am</div>
</div>
</div>
</div>
</div>
<div class="col-6">
<div class="list-item list-overlay r mb-3 gd-danger">
<div class="media media-4x3"><a href="playlist_detail.php#" class="ajax media-content"
style="background-image:url()"></a>
<div class="media-action"></div>
</div>
<div class="list-content p-4">
<div class="list-body"><a href="playlist_detail.php#"
class="list-title title ajax h5 font-weight-bold">Music
Hub 2020</a></div>
<div class="list-footer">
<div class="text-muted text-sm">Feb 9, 8:16 am</div>
</div>
</div>
</div>
</div>
</div>
<div class="heading py-2 d-flex">
<div>
<div class="text-muted text-sm sr-item">Blog</div>
<h5 class="text-highlight sr-item">News</h5></div>
<span class="flex"></span></div>
<div class="row row-sm">
<div class="col-4">
<div class="list-item r">
<div class="media media-16x9"><a href="playlist_detail.php#"
class="ajax media-content"
style="background-image:url(assets/img/pastor.jpg)"></a>
<div class="media-action"></div>
</div>
<div class="list-content">
<div class="list-body"><a href="playlist_detail.php#"
class="list-title title ajax">Et purus vulputate
adipiscing</a></div>
<div class="list-footer">
<div class="text-muted text-sm">Feb 1, 1:36 am</div>
</div>
</div>
</div>
</div>
<div class="col-4">
<div class="list-item r">
<div class="media media-16x9"><a href="playlist_detail.php#"
class="ajax media-content"
style="background-image:url(assets/img/minister.jpg)"></a>
<div class="media-action"></div>
</div>
<div class="list-content">
<div class="list-body"><a href="playlist_detail.php#"
class="list-title title ajax">Nibh massa sit morbi
tortor</a></div>
<div class="list-footer">
<div class="text-muted text-sm">Feb 23, 5:19 am</div>
</div>
</div>
</div>
</div>
<div class="col-4">
<div class="list-item r">
<div class="media media-16x9"><a href="playlist_detail.php#"
class="ajax media-content"
style="background-image:url(assets/img/z8.jpg)"></a>
<div class="media-action"></div>
</div>
<div class="list-content">
<div class="list-body"><a href="playlist_detail.php#"
class="list-title title ajax">Id sit vitae</a></div>
<div class="list-footer">
<div class="text-muted text-sm">Feb 26, 4:44 am</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div><!-- ############ Main END--></div><!-- ############ Content END--><!-- ############ Footer START-->
<div id="footer" class="page-footer">
<div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. Internet Multimedia</span>
<div class="text-sm ">Version 1.1.2</div>
</div>
</div><!-- ############ Footer END--></div>
</div>
</div>
<script src="assets/js/site.min.js"></script>
</body>
</html>