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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Upload Videos</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Upload Videos</li>
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
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                            <div class="card-header bg-info"></div>
                            <form class="form-horizontal"method="post" action="{{route('uploadvideos')}}">
                             @csrf
                                <div class="form-body">
                                    <div class="card-body">
                                        <h6 class="card-subtitle">Please fill in information correctly.</h6>
                                    </div>
                                    <hr class="mt-0 mb-5">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Title</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="title" class="form-control" placeholder="Life is Spiritual"  required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Select Video Category</label>
                                                    <div class="col-md-9">
                                                    <select name="category" class="form-control" required="">
                                                        <option value=""></option>
                                                        @foreach($res->data as $video) 
                                                        <option value="{{$video->unique_id}}">{{$video->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Video Link</label>
                                                    <div class="col-md-9">
                                                        <input type="text"  name="videolink" class="form-control" placeholder="Paste Video Link Here" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Select Station</label>
                                                    <div class="col-md-9">
                                                    <select name="station" class="form-control" required="">
                                                        <option value=""></option>
                                                        @foreach($stations->data as $station) 
                                                        <option value="{{$station->id}}">{{$station->stationName}}</option>
                                                        @endforeach
                                                     </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Banner Link</label>
                                                    <div class="col-md-11">
                                                        <input type="text" name="bannerlink" class="form-control" placeholder="Paste Banner Link Here" required>
                                                    </div>
                                                </div>
                                            </div>
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
    @include('includes/footer')