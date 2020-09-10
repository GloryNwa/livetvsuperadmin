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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Category</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">All Category</li>
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
                                <h4 class="card-title">Category</h4>
                                <div class="table-responsive">
                                    <table id="demo-foo-pagination" class="table table-bordered toggle-arrow-tiny no-wrap"
                                        data-sorting="true" data-paging="true" data-paging-size="5">
                                        <thead>
                                        
                                            <tr>
                                                <th data-toggle="true">#</th>
                                                <th>Category Name</th>
                                                <th data-hide="phone">Unique Id</th>
                                                <th data-hide="all"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $x = 1;?>
                                            @foreach($category->data as $cat)
                                            <tr> 
                                            <td>{{$x++}}</td>  
                                            <td>{{$cat->name}}</td> 
                                            <td>{{$cat->unique_id}} </td> 
                                            <td>
                                                 <div class="btn-group">
                                                 <a href="/edit/category/{{$cat->unique_id}}"> <button class="btn btn-success editbtn"
                                                  data-toggle="modal" data-target="#examplemodal" data-original-title="Edit">Edit</button></a>
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
                                
                                    <!-- <li class="page-item"><a class="page-link" href="/videos?page='.$next.'"></a></li> -->
                                </ul>
                                </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
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
    @include('includes/footer')