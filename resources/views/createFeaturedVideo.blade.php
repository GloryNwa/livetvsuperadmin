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
<div class="page-title"><h2 class="text-md text-highlight">Create Featured Video</h2>
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
<form data-plugin="parsley" method="post" action="{{route('postCategory')}}">
@csrf
<div class="card">
<div class="card-header"></div>
<div class="card-body">
<div class="form-row">

<div class="form-group col-sm-6">
<label>Title</label><input type="text" name="title" class="form-control" required>
</div>
<div class="form-group col-sm-6">
<label>video Category</label><input type="text" name="cat" class="form-control" required>
</div>
<div class="form-group col-sm-6">
<label>Upload Banner</label><input type="file" name="banner" class="form-control" required>
</div>
<div class="form-group col-sm-6">
<label>Upload Video</label><input type="file" name="video" class="form-control" required>
</div>
</div>
<div class="text-left">
<button type="submit" name="submit" class="btn btn-primary">Create</button>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div><!-- ############ Main END-->

<!-- ############ Content END--><!-- ############ Footer START-->
<div id="footer" class="page-footer hide">
<div class="d-flex p-3"><span class="text-sm flex">&copy; Copyright. Internet Multimedia</span>
<div class="text-sm ">Version 1.1.2</div>
</div>
</div><!-- ############ Footer END--></div>
<script src="/assets/js/site.min.js"></script>
</body>
</html>