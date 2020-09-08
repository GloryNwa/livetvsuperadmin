
//controller
public function changeStatus(Request $request){
        $banner = Banner::find($request->id);
        $banner->isLive = $request->isLive;
        $banner->save();
        return response()->json(['success'=>'Status change successfully.']);

    }
    
    //view
    
    
    
@include('layouts.header')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Manage Banners</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title"></h4>
                            <p class="card-title-desc">

                            @if(count($errors) > 0)
                                <div class="alert alert-danger">

                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach

                                    </ul>
                                </div>
                            @endif
                            @if(\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{\Session::get('success')}}</p>
                                </div>
                                @endif

                                        <!-- Button trigger modal -->


                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Add Banner
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('addbanners')}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field() }}
                                                <div class="modal-body">


                                                    <div class="form-group">
                                                        <label for="exampleInputtitle1">Banner title</label>
                                                        <input type="text" name="title" class="form-control form-control-lg" id="title" aria-describedby="emailHelp">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Banner Location">Banner's Location</label>


                                                        <select name="location" id="location" class="form-control">
                                                            @if(isset($data))

                                                                <option value="{{$data->location}}">{{$data->location}}</option>
                                                            @endif

                                                            <option>Select Banner's Location</option>
                                                            <option value="1">Homepage</option>
                                                            <option value="2">Channel</option>
                                                            <option value="3">video</option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputtitle1">Url</label>
                                                        <input type="text" name="url" class="form-control form-control-lg" id="url" aria-describedby="emailHelp">

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Advert Image </label>
                                                        <input type="file" name="filename" class="form-control-file" id="uploadFile">
                                                        <br />
                                                        <div id="image_preview"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Upload Time">Upload Time </label>
                                                        <input type="text" name="uploadtime"  class="form-control form-control-lg" id="uploadtime" value="{{ time() }}" aria-describedby="uploadtime" >

                                                    </div>
                                                    <label for="Duration"><strong>Duration</strong></label>
                                                    <div class="form-group"> <!-- Date input -->
                                                        <label class="control-label" for="date"> Select Start Date</label>
                                                        <input  class="form-control" id="start_date" name="start_date" placeholder="YYY/MM/DD" type="date"/>
                                                    </div>
                                                    <div class="form-group"> <!-- Date input -->
                                                        <label class="control-label" for="date"> Select End Date</label>
                                                        <input  class="form-control" id="end_date" name="end_date" placeholder="YYY/MM/DD" type="date"/>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile3">IsLive</label>

                                                        <select name="isLive" id="isLive" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>

                                                    </div>
                                                    <input type="hidden" name="position" class="form-control form-control-lg" id="position" value="{{ rand(0,100) }}" aria-describedby="emailHelp">






                                                    <button type="submit" class="btn btn-primary">Submit</button>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>




                                <code></code>
                                </p>
                                <div class="col-md-12 col-md-offset-3 ">
                                    <div class="pull-right">
                                        <form action="/search_banner" method="get">
                                            <div class="input-group">
                                                <input type="search" name="searches" class="form-control">
                                      <span class="input-group-prepend">
                                          <button type="submit" class="btn btn-primary">Search</button>
                                      </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <br />
                                <div class="table-responsive">
                                    <table id="" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Banner Title</th>
                                            <th>Banner Image</th>
                                            <th>isLive</th>
                                            <th>Actions</th>

                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($banner as $banners)

                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{$banners->title}}</td>
                                                <td><img src="{{ asset('uploads/banners/' .      $banners->filename)}}" width="100px" height="100px"></td>
                                                <td>{{$banners->isLive ? 'Active': 'Inactive'}}</td>

                                                <td>
                                                    <a href="{{route('edit_banner',[$banners->id])}}" class="btn btn-success">Edit</a>
                                                    <a href="{{route('delete',[ $banners->id])}}" Onclick="return confirm('Are you sure you want to delete this item?')"  class="btn btn-danger" >
                                                        Delete
                                                    </a>
                                                    <input data-id="{{$banners->id}}" Onclick="return confirm('Are you sure you want to deactivate this item?')" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $banners->isLive ? 'checked' : '' }}>


                                                </td>


                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                    {!! $banner->links() !!}

                                </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


            @include('layouts.footer')
            <script>
                $(function() {
                    $('.toggle-class').change(function() {
                        var isLive = $(this).prop('checked') == true ? 1 : 0;
                        var user_id = $(this).data('id');

                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url: '/changeStatus',
                            data: {'isLive': isLive, 'id': user_id},
                            success: function(data){
                                console.log(data.success)
                            }
                        });
                    })
                })

                $('.summernote').summernote ({

                    height: 300,

                });

                $("#uploadFile").change(function () {
                    //alert('show me image');

                    $('#image_preview').html("");

                    var total_file = document.getElementById("uploadFile").files.length;

                    for (var i = 0; i < total_file; i++) {

                        $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");

                    }

                });


                $('form').ajaxForm(function () {

                    alert("Uploaded SuccessFully");

                });




            </script>


                <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-lg-4 col-md-8">
                        <div class="card bg-light-info border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)"
                                        class="btn btn-info rounded-circle btn-circle-lg text-white mb-2">
                                        <i data-feather="user-plus"></i>
                                    </a>
                                    <div class="ml-auto">
                                        <span class="text-dark"><i class="text-info ti-arrow-up mr-1"></i>Users</span>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0 font-weight-medium">{{count($resp->data->users)}}</h2>
                                    <h6 class="text-muted font-weight-normal mb-0"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="card bg-light-danger border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)"
                                        class="btn btn-danger rounded-circle btn-circle-lg text-white mb-2">
                                        <i data-feather="video"></i>
                                    </a>
                                    <div class="ml-auto">
                                        <span class="text-dark"><i
                                                class="text-danger ti-arrow-up mr-1"></i>Videos</span>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0 font-weight-medium"><sup class="set-doller"></sup>{{count($resp->data->videos)}}</h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">
                                </h6>
                                </div>
                            </div>
                        </div>
                    </div>


