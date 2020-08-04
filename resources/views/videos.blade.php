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
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                                @endif
                                    <table id="demo-foo-pagination" class="table table-bordered toggle-arrow-tiny no-wrap"
                                        data-sorting="true" data-paging="true" data-paging-size="5">
                                        <thead>
                                            <tr>
                                                <th data-toggle="true">#</th>
                                                <th>Video</th>
                                                <th data-hide="phone"> Title </th>
                                                <th data-hide="phone"> Category </th>
                                                <th data-hide="all"> Station </th>
                                                <th data-hide="all"> Date </th>
                                                <th data-hide="all"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $x = 1;?>
                                       <!-- <?php var_dump($total_videos );exit;?> -->
                                         @foreach($total_videos as $vid)
                                           
                                            <tr>
                                                <td>{{$x++}}</td>
                                                <td>
                                                    <img src="{{$vid->banner}} " alt="" width="150px">
                                                </td>
                                                <td>{{$vid->title }}</td>
                                                <td>{{$vid->category_name}}</td>
                                                <td>{{$vid->owner_name}}</td>
                                                <td>{{$vid->created_at}}</td>
                                                <td>
                                                 <div class="btn-group">
                                                <a  href="/edit/video/{{$vid->video_id}}"> <button class="btn btn-success"
                                                  data-toggle="" data-target="" data-original-title="Edit">Edit</button></a>
                                                  
                                                  <button class="btn btn-danger"
                                                    data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')"href="/trash/video/{{$vid->video_id}}" style="color:#fff">
                                                        Delete</a></button>
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
  <div class="modal fade" id="examplemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="editData">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="modal-body">
                <input type="hidden" name="id" id="id"/>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="title" class="form-control" value="{{$vid->title}}" id="title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea  name="category" class="form-control no-resize" rows="4" value="{{$vid->category_name}}" id="category"></textarea>
                    </div>
                </div>       
            </div>
            <div class="form-group">
            <div class="form-group">
            <label for="time">Station</label>
            <input type="text" name="station" class="form-control"id="station"value="" required>
        </div>
        <div class="form-group">
        <label for="time">Video</label>
            <input type="file" name="file" id="file"  class="form-control" required value="{{$vid->file}}">
        </div>

        

      <div class="modal-footer">
            
        <button type="submit" name="submit" class="btn btn-primary">Edit Video</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
      </div>  
        </form> 
    </div>
  </div>
</div>
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script>
  $(document).ready(function(){
    $('.editbtn').on('click', function(){
      $('#exampleModal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        // console.log(data);

        $('#id').val(data[0]);
        $('#title').val(data[1]);
        $('#category').val(data[2]);
        $('#station').val(data[3]);
        $('#file').val(data[4]);

   });
   
   $('#editData').on('submit', function(e){
     e.preventDefault();

     var id = $('#id').val();
      
      $.ajax({
         type: "PUT",
         url: "/updateData/"+id,
         data: $('#editData').serialize(),
         success: function(response){
          console.log(response);
          $('#exampleModal').modal('hide');
         
          location.reload();
          alert("Data Updated");
       },
         error: function(error){
           console.log(error);
         }
      });
   });

  });
</script>
@include('includes/footer')
