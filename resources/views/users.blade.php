@include('includes/header')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">All Users</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">All Users</li>
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
                                <h4 class="card-title">Users</h4>
                                <div class="table-responsive">
                                    <table id="demo-foo-pagination" class="table table-bordered toggle-arrow-tiny no-wrap"
                                        data-sorting="true" data-paging="true" data-paging-size="5">
                                        <thead>
                                        
                                            <tr>
                                                <th data-toggle="true">Id</th>
                                                <th>Name</th>
                                                <th data-hide="phone"> Email </th>
                                                <th data-hide="all"> Date </th>
                                                <th data-hide="all"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $x = 1;?>
                                         @foreach($users->data as $user)
                                            <tr>
                                            <td>{{$x++}}</td>    
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->created_at}}</td> 
                                                <td>
                                                 <div class="btn-group">
                                                 <!-- <button class="btn btn-success"
                                                  data-toggle="modal" data-target="#example" data-original-title="Edit">Edit</a> -->
                                                  <button class="btn btn-danger"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#' style="color:#fff">
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
                            <li class="-item"><a class="page-link" href="/all/users?per_page={{$i}}">{{$i}}</a></li>
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
                Copyright 2019. All Rights Reserved by Severny Admin
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
<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="editData">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" rows="4" placeholder="Event Subject..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="form-group">
            <div class="form-group">
            <label for="time">Event Address</label>
            <input type="text" name="address" class="form-control" placeholder="Event Address..." required>
        </div>
        <div class="form-group">
        <label for="time">Schedule Date</label>
            <input type="date" name="date" class="form-control"placeholder="Event Date..." required>
        </div>

        <div class="form-group">
          <label for="time">Schedule time</label>
            <input type="text" name="date" class="form-control" placeholder="Schedule Time..." required>
        </div>

      <div class="modal-footer">
            
        <button type="submit" name="submit" class="btn btn-primary">Edit Event</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
      </div>  
        </form> 
    </div>
  </div>
</div>
    @include('includes/footer')