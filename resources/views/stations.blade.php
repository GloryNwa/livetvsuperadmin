@include ('includes/nav')


<!-- sidenav bottom -->
<div class="no-shrink">
<div class="p-3 d-flex align-items-center">
</div>
</div>
</div>
</div>
<div class="flex"><!-- ############ Content START-->
<div id="content" class=""><!-- ############ Main START-->
<div>
<div class="bg-black">
<div class="list-item list-overlay">
<div class="media"><a href="" class="ajax media-content"
style="background-image:url(assets/img/minister.jpg)"></a>
<div class="media-action"></div>
</div>
<div class="list-content">
<div class="list-body p-5 col-md-6">
<a href="video.detail.php#"
class="list-title title ajax text-lg font-weight-bold mb-4 l-h-1x">Watch Pastor Chris Teachings Live and be Blessed </a><a href="page.profile.html#"
                                                                                                                class="list-subtitle d-block text-muted subtitle ajax">
                                                                                                                <!-- The Lord giveth wisdom and out of his mouth commeth knowledge and understanding -->
                                                                                                                
                                                                                                                </a>
<!-- <div class="mt-4"><a href="video.detail.php"
        class="ajax btn btn-outline-primary b-2x btn-md mx-3">More Episodes</a>
</div> -->
</div>
</div>
</div>
</div>
<div class="padding">

<div class="slick slick-visible slick-arrow-center row" data-plugin="slick" data-option="{
slidesToShow: 4,
slidesToScroll: 1,
dots: false,
infinite: false,
rtl: false,
responsive: [
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
</div>

<div class="heading py-2 d-flex">
<div>
<div class="text-muted text-sm sr-item"></div>
<h5 class="text-highlight sr-item">Watch</h5></div>
<span class="flex"></span></div>
<div class="row">
@foreach($stations->data as $station)
<div class="col-4 col-sm-4 col-md-3" data-id="53754394" data-category="all" data-tag="USA"
data-source="https://audio-ssl.itunes.apple.com/apple-assets-us-std-000001/Music/04/e1/7b/mzi.gpwvrrex.aac.p.m4a">

<div class="list-item">
<div class="media media-16x9"><a class="ajax media-content"style="background-image:url('{{$station->thumbnail}}')"></a>
<div class="media-overlay overlay-bottom"><a href="#"><span
class="badge badge-md text-uppercase bg-dark-overlay"></span></a></div>
<div class="media-action"></div>
</div>
<div class="list-content">
<div class="list-body">
<a class="list-title title ajax h-1x">{{$station->stationName}}</a>
</div>
<div class="list-footer">
<a href="/station/profile/{{$station->id}}"><button class="btn btn-primary btn-xs">edit</button></a>
<!-- <div class="text-sm">{{$station->created_at}}</div> -->
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div><!-- ############ Main END--></div>
<div id="footer" class="page-footer">
<div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. Internet Multimedia</span>
<div class="text-sm ">Version 1.1.2</div>
</div>
</div><!-- ############ Footer END--></div>
<script src="assets/js/site.min.js"></script>
</body>
</html>