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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Station</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Station Profile</li>
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
                            <div class="card-header bg-info"></div>
                            <form action="{{url('/stationsprofile', $station->unique_id)}}" method="post" class="form-horizontal">
                            @csrf
                            <form  class="form-horizontal">
                                <div class="form-body">
                                    <div class="card-body">
                                        <h6 class="card-subtitle"></h6>
                                    </div>
                                    <hr class="mt-0 mb-5">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Station Name</label>
                                                    <div class="col-md-9">
                                                    
                                                        <input type="text" class="form-control"   value="{{ $station->stationName}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                            <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Station Description</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  value="{{$station->description}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">URL</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" value="{{$station->url}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  value="{{$station->email}}"  >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Paypal_id</label>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="{{$station->paypal_id}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Phone Numbers</label>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Thumbnails</label>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="{{$station->thumbnail}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Donate Url</label>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="{{$station->donateurl}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Web Url</label>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="{{$station->weburl}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Schedule Url</label>
                                                    <div class="col-md-11">
                                                        <input type="text" class="form-control" value="{{$station->scheduleurl}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Kingspay Code</label>
                                                    <div class="col-md-11">
                                                    <input type="text"class="form-control" name="kingspay"  value="{{$station->kingspaycode}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Unique_id</label>
                                                    <div class="col-md-11">
                                                    <input type="text"class="form-control" name="unique_id"  value="{{$station->unique_id}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Chat Room</label>
                                                    <div class="col-md-11">
                                                    <input type="text"class="form-control" name="chatroom"  value="{{$station->chatRoom}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Numbers of Comments</label>
                                                    <div class="col-md-11">
                                                    <input type="text"class="form-control" name="chatroom"  value="{{$station->numOfComments}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-row">
                                                    <label class=" text-right col-md-1">Time</label>
                                                    <div class="col-md-11">
                                                    <input type="text"class="form-control" name="banner"  value="{{ $station->created_at}}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="card-body">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Update</button>
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
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    @include('includes/footer')