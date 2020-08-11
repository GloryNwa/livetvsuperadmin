@include('includes/header')

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
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Banner</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Banner</li>
                                </ol>
                            </nav>
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
                <div class="row el-element-overlay">      
                @foreach($banners->data as $bann)
                    <div class="col-lg-3 col-md-6">                             
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"><img style="max-height: 150px" src="{{$bann->file}}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                  <button class="btn btn-success"
                                      data-original-title="Edit"><a href='/edit/banner'style="color:#fff">Edit</a>
                                  <button class="btn btn-danger"
                                   data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='/delete/banner' style="color:#fff">
                                   Delete</a></button>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div><br><br>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                Copyright 2020. Internet Multimedia
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
    @include('includes/footer')