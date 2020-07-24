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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Featured Videos</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Featured Videos</li>
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
                                                <th>Video banner</th>
                                                <th data-hide="phone"> Title</th>
                                                <th data-hide="phone"> Category </th>
                                                <th data-hide="all"> Date </th>
                                                <th data-hide="all"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($featured->data) > 0)
                                            <?php $x = 1;?>

                                            @foreach($featured->data as $vid)

                                            <tr>
                                                <td>{{$x++}}</td>   
                                                <td>
                                                    <img src="{{$vid->banner}} " alt="" width="150px">
                                                </td>
                                                <td>{{$vid->title}}</td>
                                                <td>{{$vid->category_name}}</td>
                                                <td>{{$vid->created_at}}</td>
                                                <td>
                                                 <div class="btn-group">
                                                 <button class="btn btn-success editbtn"
                                                  data-toggle="modal" data-target="#examplemodal" data-original-title="Edit">Edit</button>
                                                  <button class="btn btn-danger"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#' style="color:#fff">
                                                Delete</a></button>
                                                    </div>
                                                </td> 
                                            </tr>
                                           @endforeach
                                           @endif
                                        </tbody>
                                    </table>
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
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @include('includes/footer')