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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Create Slider</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Create Slider</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                         @include("alert")
                            <div class="card-header bg-info"></div>
                            <form class="form-horizontal" method="post" action="{{route('postSlider')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-body">
                                    <div class="card-body">
                                        <h6 class="card-subtitle"></h6>
                                    </div>
                                    <hr class="mt-0 mb-5">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">contentType</label>
                                                    <div class="col-md-9">
                                            <select name="uri_type" class="form-control" required="">
                                                <option value="url">URL</option>
                                                <option value="catchup">Catch Up</option>
                                                <option value="station">Station</option>
                                              
                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <!-- <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Banner Type</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="banner" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Content ID</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="uri" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">File</label>
                                                    <div class="col-md-9">
                                                        <input type="file" name="file" class="form-control" placeholder="John doe">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-right">
                                            <button type="submit" name="submit" class="btn btn-info">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                         @include("alert") 
                            <div class="card-header bg-info"></div>
                            <form class="form-horizontal" method="post" action="{{route('postSliderFile')}}">
                            @csrf
                                <div class="form-body">
                                    <div class="card-body">
                                        <h6 class="card-subtitle"></h6>
                                    </div>
                                    <hr class="mt-0 mb-5">
                                    <div class="card-body">
                                        <div class="row">
                                           
                                            <!--/span-->
                                            <div class="col-md-8">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">File</label>
                                                    <div class="col-md-9">
                                                        <input type="file" name="file" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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