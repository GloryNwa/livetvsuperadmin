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
<div class="page-title"><h2 class="text-md text-highlight">Create Your Video</h2>
</div>
<div class="flex"></div>
</div>
</div>
<div class="page-content page-container" id="page-content">
<div class="padding">
<div class="row">
<div class="col-sm-12">
<form data-plugin="parsley" data-option="{}">
<div class="card">
<div class="card-header"><p>Please fill the information correctly</p></div>
<div class="card-body">
<div class="form-row">
<div class="form-group col-sm-6"><label>Title</label>
<input type="text" name="title" class="form-control" required></div>
<div class="form-group col-sm-6">
<label>Video Category</label>
<!-- 
<input field="select"class="form-control"required> -->
 <select name="category" class="form-control" required="">
   <option value="">Select Category</option>
   @foreach($res->data as $video) 
   <option value="{{$video->unique_id}}">{{$video->name}}</option>
   @endforeach
 </select>
</div>
</div>
<div class="form-group row"><label class="col-sm-4 col-form-label">Select Video</label>
<div class="col-sm-12">
<div class="custom-file">
<input type="file" name="file" class="custom-file-input" id="customFile"><label
class="custom-file-label" for="customFile">Choose file</label></div>
</div>
</div>

<div class="text-right">
<button type="submit" class="btn btn-primary">Submit</button>
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