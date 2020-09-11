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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Slider</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Slider</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
            </div>





            <div class="container-fluid">
                <div class="row el-element-overlay">
                    
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Video Details</h4>
                        
                    </div>
                </div>
            </div>



            <div class="container-fluid">
                <div class="row">
                @foreach($sliders->data as $bann)
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <br />
                                        <br />
                                        <div class="white-box text-center">
                                        @if($bann->contentType =='image')    
                                        <img
                                                src="{{$bann->file}}" class="img-fluid" alt="we are here">
                                        @endif

                                        @if($bann->contentType =='video')    
                                        <video controls width='400'>
                                            <source src="{{$bann->file}}" />
                                        </video>
                                        @endif
                                            </div>
                                        <!-- <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title=""
                                                data-original-title="Add to cart"><i class="ti-shopping-cart"></i> </button>
                                        <button class="btn btn-primary btn-rounded"> Delete  </button> -->
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6">
                            
                                        <h4 class="box-title mt-5">Content Type </h4>
                                        <p>{{$bann->contentType}}</p>
                                        <h2 class="mt-5"></h2>

                                        <h3 class="box-title mt-5">Content ID </h3>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-check text-success"></i>  
                                            {{$bann->contentID}}</li>
                                        
                                        </ul>


                                        <h3 class="box-title mt-5">Banner Type </h3>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-check text-success"></i>  
                                            {{$bann->bannerType}}</li>
                                        
                                        </ul>

                                        <h3 class="box-title mt-5">Banner File </h3>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-check text-success"></i>  
                                            {{$bann->file}}</li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Column -->
                </div>

    
               
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