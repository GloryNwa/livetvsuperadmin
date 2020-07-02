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


<form data-plugin="parsley" method="post" action="{{route('uploadvideos')}}">
@csrf
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
<div class="form-group col-sm-6"><label>Video Link</label>
<input type="text" name="videolink" class="form-control" required></div>
<div class="form-group col-sm-6">

<label>Select Station</label>
<!-- 
<input field="select"class="form-control"required> -->
<select name="station" class="form-control" required="">
   <option value=""></option>
   @foreach($stations->data as $station) 
   <option value="{{$station->id}}">{{$station->stationName}}</option>
   @endforeach
 </select>
</div>
</div>
<div class="form-row">
<div class="form-group col-sm-12"><label>Banner Link</label>
<input type="text" name="bannerlink" class="form-control" required></div>
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
<script src="/assets/js/site.min.js"></script>
</body>
</html>