
@include('includes/header')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Welcome, <small>{{Session::get('name')}} !</small> </h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="#" class="text-muted"></a>
                                    </li>
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
                                    <h2 class="mb-0 font-weight-medium"></h2>
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
                                    <h2 class="mb-0 font-weight-medium"><sup class="set-doller"></sup></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">
                                </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="card bg-light-warning border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)"
                                        class="btn btn-warning rounded-circle btn-circle-lg text-white mb-2">
                                        <i data-feather="film"></i>
                                    </a>
                                    <div class="ml-auto">
                                        <span class="text-dark"><i
                                                class="text-warning ti-arrow-up mr-1"></i>Stations</span>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="mb-0 font-weight-medium"></h2>
                                    <h6 class="text-muted font-weight-normal mb-0"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Recent Videos</h4>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-weight-medium text-muted">Video</th>
                                                <th class="border-0 font-weight-medium text-muted px-2">Title</th>
                                                <th class="border-0 font-weight-medium text-muted">Station</th>
                                                <th class="border-0 font-weight-medium text-muted text-center">Category
                                                </th>
                                                <th class="border-0 font-weight-medium text-muted text-center">
                                                </th>
                                                <th class="border-0 font-weight-medium text-muted">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($resp->data->recent_videos as $vid) 
                                            <tr>
                                                <td class="border-top-0 p-2">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img
                                                                src="{{$vid->banner}}"
                                                                alt="user" class="" width="150"
                                                         height="100" /></div>
                                                       
                                                    </div>
                                                </td>

                                                <td class="border-top-0 text-muted p-2">{{$vid->title}}</td>
                                                <td class="border-top-0">
                                                    <div class="popover-icon">
                                                    {{$vid->owner_id}}
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-center">{{$vid->category_id}}</td>
                                                <td class="border-top-0 text-center font-weight-medium text-muted">
                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0">{{$vid->created_at}}</td>
                                            </tr>
                                          
                                           
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Recent Users</h4>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        
                                        <tbody>
                                        <?php $x = 1;?>
                                         @foreach($resp->data->recent_users as $user)
                                        <tr>
                                            <td class="border-top-0 p-2">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="mr-3">{{$x++}}
                                                           </div>
                                                    <div class="">
                                                        <h5 class="mb-0 font-16 font-weight-medium">{{$user->name}}</h5>
                                                        <span class="text-muted"><a href="#">{{$user->email}}</a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-top-0 text-muted p-2">{{$user->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Stations</h4>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                        <tr class="border-0">
                                            <th class="border-0 font-weight-medium text-muted">Station Name</th>
                                            <th class="border-0 font-weight-medium text-muted px-2">Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($state->data as $station)
                                        <tr>
                                            <td class="border-top-0 p-2">
                                                <div class="d-flex no-block align-items-center"><a href="/station/profile/{{$station->id}}">
                                                {{$station->stationName}}
                                                </div></a>
                                           
                                            </td>
                                        
                                            <td class="border-top-0 text-muted p-2"> {{$station->description}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center text-muted">
            &copy; Copyright 2020. Internet Multimedia
            </footer>
        </div>
    </div>

    @include('includes/footer')