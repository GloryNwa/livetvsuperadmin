@include('includes/header')
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
<div class="row">
<div class="col-12 align-self-center">
<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome <small>{{Session::get('name')}}</small></h4>
<div class="d-flex align-items-center">
<nav aria-label="breadcrumb">
<ol class="breadcrumb m-0 p-0">
<li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
<li class="breadcrumb-item text-muted active" aria-current="page"></li>
</ol>
</nav>
</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Videos</h4>
<div class="table-responsive">
@include("alert")
<table id="demo-foo-pagination" class="table table-bordered toggle-arrow-tiny no-wrap"
    data-sorting="true" data-paging="true" data-paging-size="5">
    <div id="message"></div>
    <thead>
        <tr>
            <th data-toggle="true">#</th>
            <th>Video</th>
            <th data-hide="phone">Title</th>
            <th data-hide="phone">Category</th>
            <th data-hide="all"> Station </th>
            <th data-hide="all"> Date </th>
            <th data-hide="all"> Status</th>
            <th data-hide="all"> Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $x = 1;?>
    <!--  -->
        @foreach($total_videos->data as $vid)
        
        <tr>
            <td>{{$x++}}</td>
            <td>
                <img src="{{$vid->banner}} " alt="" width="150px">
            </td>
            <td>{{$vid->title }}</td>
            <td>{{$vid->category_name}}</td>
            <td>{{$vid->owner_name}}</td>
            <td>{{$vid->created_at}}</td>
            
            <td id="video_status">{{$vid->status}}</td>

            <td>     
            <input type="checkbox" data-onstyle="success" data-offstyle="danger" class="toggle-class" data-id="{{$vid->video_id}}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" {{$vid->status == true ? 'checked' : ''}} >

            
            <a  href="/edit/video/{{$vid->video_id}}"> <button class="btn btn-success"
                data-toggle="" data-target="" data-original-title="Edit">Edit</button></a>
                
                <!-- <button class="btn btn-danger"
                data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')"href="/trash/video/{{$vid->video_id}}" style="color:#fff">
                    Delete</a></button> -->
                </div>
            </td> 
        </tr>
        @endforeach
    </tbody>
</table>
<nav aria-label="Page navigation example">
<ul class="pagination">
<!-- <li class="page-item"><a class="page-link" href="/videos?page='.$prev.'"></a></li> -->
@for($i = 1; $i <= $links; $i++)
    <li class="-item"><a class="page-link" href="/videos?per_page={{$i}}">{{$i}}</a></li>
@endfor
<!-- <li class="page-item"><a class="page-link" href="/videos?page='.$next.'"></a></li> -->
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->

<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center text-muted">
&copy; Copyright 2020. Internet Multimedia
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- Modal -->

<!-- All Jquery -->
<!-- ============================================================== -->

@include('includes/footer')

<script>
$(function() {
$('#toggle-two').bootstrapToggle({
on: 'Enabled',
off: 'Disabled'
});
});


$('.toggle-class').change(function() {
var status = $(this).prop('checked') == true ? 1 : 0;

var video_id = $(this).data('id');
$.ajax({
type: "GET",
dataType: "json",
url: '/change/status/'+video_id,
// data: {'status': status, 'video_id': video_id},
success: function(data){
$('#message').html('<p class="alert alert-success">'+data.success+'</p>')
}

});
// setTimeout(()=>{
//     $('#message').fadeOut();
// }, 5000);


});
</script>
