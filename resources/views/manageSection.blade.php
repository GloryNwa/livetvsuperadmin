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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Section</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="/" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Section</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
            </div>

            <br/><br/>


 
            <div class="container-fluid">
            
           
                 <div class="col-lg-12">
              
                 @foreach($sections->data as $section)
                    <div class="card">
                   
                        <div class="card-body">
                        <div class="text-right">
                               <button type="button" class="btn btn-danger">Delete Section</button>
                                        
                             </div>
                         <div class="row">
                         
                           <div class="col-lg-4 col-md-4 col-sm-6">
                                   <h3>Title: {{$section->title}}  </h3>
                                  
                           </div><br><br>
                         </div>    
                           <div class="row">
                              @foreach($section->videos as $video)
                             <div class="col-lg-4 col-md-4 col-sm-4">
                             
                                    <img src="{{$video->banner}}" style='width:100%'>
                                    <br />
                                    <br />
                                    <h5>{{substr($video->title,0,40)}}</h5>
                                  
                             </div>
                             
                             @endforeach  
                         </div><br>    
                         <div class="">
                               <button type="button" class="btn btn-warning">Edit Section</button>                 
                             </div>  
                        </div>         
                    </div>
                    
                    @endforeach 
               
                    <!-- Column -->
                </div><br/><br/>

    
               
      
            </div><br/><br/><br/><br/>
            
        
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
        </div><br/><br/>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    @include('includes/footer')