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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Create Section</h4>
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
                            <div class="form-horizontal" method="post" action="{{route('postSection')}}" enctype="multipart/form-data">
                         
                                <div class="form-body">
                                    <div class="card-body">
                                        <h6 class="card-subtitle"></h6>
                                    </div>
                                    <hr class="mt-0 mb-5">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                            
                                            <form action="{{route('postSection')}}" method="post">
                                            @csrf
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Title</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="title" class="form-control" placeholder="" required>
                                                      
                                                

                                                  </div>
                                                </div>
                                                <div id="staging_area">

                                             </div>

                                            <div class="card-body">
                                                <div class="text-right">
                                                    <button type="submit" name="submit" class="btn btn-info">Upload</button>
                                                </div>
                                            </div>

                                            </form>







                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Search for Video</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="search" name="search" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                    <div id="search_result">
                                                       

                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                       
                                    </div>
                                   
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
 

 
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="/dist/js/app.min.js"></script>
    <script src="/dist/js/app.init-menusidebar.js"></script>
    <script src="/dist/js/app-style-switcher.js"></script>
    <script src="/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="/assets/extra-libs/c3/d3.min.js"></script>
    <script src="/assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="/assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="/dist/js/pages/dashboards/dashboard1.js"></script>

<script>

    var term = document.getElementById("search").value

    $("#search").keyup(function (){

        if(term != " "){
            $("#search_result").html("<div align='center'><i class='fa fa-spinner fa-spin'></i></div>")
            var formData = {
            'search'              : document.getElementById("search").value
         
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '{{route("returnSearch")}}', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data); 
                var obj = "";
                if(data.status){
                    for(var i = 0; i < data.data.length; i++){
                        obj+= `
                        <div class="card">
                                                        <div class="card-body">
                                                            <div class="row"> 
                                                
                                                                <div class="col-md-6">
                                                                            <img src=" ${data.data[i].banner}" width="200">
                                                               </div>

                                                                <div class="col-md-6">
                                                                    <h5>Title: ${data.data[i].title}</h5><br />
                                                                    <h5>Category: ${data.data[i].category_name}</h5><br />

                                                                    <button title="${data.data[i].title}" id="${data.data[i].video_id}" category=" ${data.data[i].category_name}" banner="${data.data[i].banner}" class="addToStaging" class="btn btn-warning">Add to Preview</button>
                                                                    
                          
                                                             </div>
                                                            </div>
                                                        </div>

                                                    </div>`
                    }


                    $("#search_result").html(obj)
                }else{
                    $("#search_result").html(" ")
                }

                // here we will handle errors and validation messages
            });

        }else{
            alert("I am empty")
        }
    })


//delete from stagging
    $("#staging_area").on("click",".removeFromStaging",function (){
        var sts_ID = $(this).attr("id");
        $("#"+sts_ID).remove();
        $("#"+sts_ID).hide();
    });

//add to staging from search result
    $("#search_result").on("click",".addToStaging",function (){

            var title = $(this).attr("title");
            var category = $(this).attr("category");
            var banner = $(this).attr("banner");
            var video_id = $(this).attr("id");

        $("#staging_area").append(`
        <div class="card" id="${video_id}">
                                                        <div class="card-body">
                                                            <div class="row"> 
                                                
                                                                <div class="col-md-6">
                                                                            <img src=" ${banner}" width="200">
                                                               </div>

                                                                <div class="col-md-6">
                                                                <input type = "hidden" value="${video_id}" name="videos[]"
                                                                    <h5>Title: ${title}</h5><br />
                                                                    <h5>Category: ${category}</h5><br />

                                                                    <button id="${video_id}" class="removeFromStaging btn btn-danger">Remove from Preview</button>
                                                                    
                          
                                                             </div>
                                                            </div>
                                                        </div>

                                                    </div>
        `)
       
    })


   

            </script>
</body>
</html>