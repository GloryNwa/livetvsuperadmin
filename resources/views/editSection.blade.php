@include('includes/header')
  
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Video</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Edit Video</li>
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
                        <form action="{{route('updateSection')}}" method="post" class="form-horizontal">
                        @csrf
                <div class="modal-body">
                <!--  -->
                <div class="form-group">

                
                <label for="time">Title</label>
                    <div class="form-line">
                        <input type="text" name="title" class="form-control" value="{{$edit->data->title}}" id="title">
                    </div>
                </div>
                <div class="form-group">
             
                  <!-- <label for="time">Video_id</label> -->
                    <div class="form-line">
                     <input type="text" name="section_id" class="form-control" value="{{$edit->data->section_id}}" id="">
                    </div>
                </div>
                <div class="form-group">
                <label for="time">Banner</label>
                    <div class="form-line">
                        <input type="text" name="videos[]" class="form-control" value="{{$edit->data->videos}}" id="">
                    </div>
                </div>
            <div class="card-body">
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-info">Update</button>
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