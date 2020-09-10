<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckUser;
use App\Libraries\Messenger;
use Auth;
use Session;


class VideoController extends Controller
{
   
    public function videos(){
   
        $video_token = Session::get('user');
      //   if(isset($_GET['page'])){
      //     if(!empty($_GET['page'])){
      //         $page = $_GET['page'];
      //     }else{
      //         $page = 1;
      //     }
      // }else{
      //     $page = 1;
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/video/all?per_page=10&page=10",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: $video_token ",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
          ),
        ));
        
          $response = curl_exec($curl);
           curl_close($curl);
           $data['total_videos']  = json_decode($response);
            // dd($data['total_videos']);exit;
            // $total_videos = 40;
   
            // $per_page = 10;
            // $links = $total_videos / $per_page;

            // $data['links'] = $links;
           
            return view("videos",$data);
              
     
    
    // }

    }
  
      ///////////////////////////////////////////////////////////////

      public function trashVideo($video_id){
    
        $trash_token = Session::get('user');
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/video/delete",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => array('video_id' => $video_id),
          CURLOPT_HTTPHEADER => array(
            "Authorization:$trash_token",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
          ),
        ));
  
        $response = curl_exec($curl);
   
        curl_close($curl);
        $delete = json_decode($response);
           
        
         return redirect()->back()->with('message', 'Video deleted successfully');
        }
  
  
        
  
    ////////////////////////////////////////////////////////////////  
      public function create_video(){
     
          return view('create_video');
      }
  
  
  
      public function upload_video(){
  
        $videos_token = Session::get('user');
        $curl = curl_init();
  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/view/categories",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: $videos_token",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $res = json_decode($response);
       
        //   dd($res);
  
        $userss_token = Session::get('user');
          $curl = curl_init();
  
          curl_setopt_array($curl, array(
            CURLOPT_URL => "http://apis.livetvmobile.org/api/view/stations",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "Authorization: $userss_token",
              "Accept: application/json"
            ),
          ));
          
          $response = curl_exec($curl);
            curl_close($curl);
            $stations = json_decode($response);
  
        return view('upload_video',['res'=>$res, 'stations' =>$stations]);
          
      }

      //////////////////////////Upload Method////////////////////////////////////////
      public function uploadvideos(Request $request){
        $this->validate($request, [
          'title'  => 'required',
          'category_id' => 'required',
          'station_id'  => 'required',
          'videolink' => 'required',
          'bannerlink' => 'required'
           ]);

          $upload_token = Session::get('user');
            $curl = curl_init();

                curl_setopt_array($curl, array(
                CURLOPT_URL => "http://apis.livetvmobile.org/api/super/video/upload",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => array('station_id' =>$request->station_id,'title' =>$request->title,'category_id' =>$request->category_id,'banner' =>$request->$banner),
                 CURLOPT_HTTPHEADER => array(
                    "Authorization: $upload_token",
                    "Accept: application/json",
                    "Content-Type: application/x-www-form-urlencoded"
                ),
             ));

                $response = curl_exec($curl);
                curl_close($curl);
                $uploads= json_decode($response);
                
                return redirect()->back()->with('message', 'Video uploaded successfully');
          
       
      }

      
    
  /////////////////////////////////////////////////////////////////////    
      public function edit_video($video_id){
            //  $id = 'video_id';
            $editing_token = Session::get('user');
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://apis.livetvmobile.org/api/video/details",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => array('video_id' => $video_id),
              CURLOPT_HTTPHEADER => array(
                  "Authorization:$editing_token",
                  "Accept: application/json",
                  
                ),
              ));
              


              $response = curl_exec($curl);
              //  dd($response);
              curl_close($curl);
              $vid= json_decode($response);
           
              // $vid = $vids->data;
              
              //////////////////////////////////////////////////// 
              $edit_token = Session::get('user');
              $curl = curl_init();
  
              curl_setopt_array($curl, array(
                CURLOPT_URL => "http://apis.livetvmobile.org/api/view/categories",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Authorization: $edit_token",
                  "Accept: application/json",
                  "Content-Type: application/x-www-form-urlencoded"
                ),
              ));
           
              $response = curl_exec($curl);
              curl_close($curl);
              $res = json_decode($response);

              /////////////////////////////////////////////////////////

              $stat_token = Session::get('user');
              $curl = curl_init();
      
              curl_setopt_array($curl, array(
                CURLOPT_URL => "http://apis.livetvmobile.org/api/view/stations",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Authorization: $stat_token",
                  "Accept: application/json"
                ),
              ));
              
              $response = curl_exec($curl);
                curl_close($curl);
                $stations = json_decode($response);

            return view('edit_video',['vid'=>$vid, 'res'=>$res, 'stations'=>$stations]);
      }
      



      public function update(Request $request, Messenger $messenger){

       
        $this->validate($request, [
          'title'  => 'required',
          'file'  => 'required',
          'category' => 'required',
          'station'  => 'required',
          'video_id' => 'required',
          'banner' => 'required'
           ]);

                $dataArr = array(
                  'station_id'=>$request->station,
                  'title'=>$request->title,
                  'category_id'=>$request->category,
                  'banner'=>$request->banner,
                  'file'=>$request->file,
                  'video_id'=>$request->video_id);
      
              $response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/super/video/update');
      
      
        if($response->status){
          return redirect('/videos')->with('message', 'Video Updated successfully ')->with("type","success");
      
              }else {
    
                
              return redirect('/edit/video/'.$request->video_id)->with('message', 'There was an error while trying to update your video ')->with("type","danger");
      
              }

             
            }
    
   ////////////////////////////////////////////////////////////////////


  
      public function video_details(){
          return view('video_details');
      }



      /////////////////////////////////////////
      public function createFeaturedVideo(){
     
        return view('createFeaturedVideo');
     }


     public function postVideo(Request $request){
      $this->validate($request, [
        'video_id'  => 'required',
       
        
       
        ]);

        $featVideo = Session::get('user');
              
          return redirect()->back()->with('message', 'Featured Video uploaded successfully');
        
     
    }

    
  


      public function featuredVideo(){
         $featured_token = Session::get('user');
         $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/super/featured-videos/all?per_page=40",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization:$featured_token",
            "Accept: application/json"
  ),
));

  $response = curl_exec($curl);
    curl_close($curl);
    $data['featured'] = json_decode($response);
   
    // if($data === true){
    //   dd($data );
    return view('featuredVideo',$data);
  
    //   if($data->status === false){
    //   return view('featuredVideo')->with('message', 'Video deleted successfully');
    // }else{
    //      return view('featuredVideo',$data);
    // }
 
}
   /////////////////////////////////////////////////////////////   
      
    public function deleteVideo($id){
    
      $delete_token = Session::get('user');
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "http://apis.livetvmobile.org/api/super/featured-videos/remove",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $id,
        CURLOPT_HTTPHEADER => array(
          "Authorization: $delete_token",
          "Accept: application/json",
          "Content-Type: application/x-www-form-urlencoded"
        ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      $delete= json_decode($response);

      
       return redirect()->back()->with('message', 'Video deleted successfully');
      }




      ///////////////////////////////////////////////////////////////
    
      public function category(){
        $cat_token = Session::get('user');
      //   if(isset($_GET['page'])){
      //     if(!empty($_GET['page'])){
      //         $page = $_GET['page'];
      //     }else{
      //         $page = 1;
      //     }
      // }else{
      //     $page = 1;
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/view/categories",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: $cat_token ",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
          ),
        ));
            $response = curl_exec($curl);
            curl_close($curl);
            $data['category'] = json_decode($response);
            // $category = 10;
            // $per_page = 5;
            // $links = $category / $per_page;

            // $data['links'] = $links;
            return view('category',$data);
        }

      // }


        public function createCategory(){
          return view ('createCategory');
         }
   

        public function postCategory(Request $request){
            $this->validate($request, [
              'name'  => 'required'
               
                ]);
      
      $category_token = Session::get('user');
      $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/create/category",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>'name',
          CURLOPT_HTTPHEADER => array(
            "Authorization: $category_token ",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
          ),
        ));
          $response = curl_exec($curl);
          curl_close($curl);
          $create= json_decode($response);

          return redirect()->back()->with('message', 'Category created successfully');


   }


      public function editCat($id){
        return view ('editCat');
    }


   
    public function activatevideo($video_id){
     
      $activate_token = Session::get('user');
      $curl = curl_init();

      if($status == 1){
        $link =  "http://apis.livetvmobile.org/api/super/video/activate";
      }
      else{
        $link =  "http://apis.livetvmobile.org/api/super/video/deactivate";
      }

      curl_setopt_array($curl, array(
        CURLOPT_URL =>$link,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $video_id,
        CURLOPT_HTTPHEADER => array(
          "Authorization: $activate_token ",
          "Accept: application/json",
          "Content-Type: application/x-www-form-urlencoded"
        ),
      ));

      $response = curl_exec($curl);
 
      curl_close($curl);
     
      $vid = json_decode($response);
     
       return redirect()->back()->with('message', 'Video activated successfully');
  }




    public function changeStatus($video_id){  
    $deactivate_token = Session::get('user');
    $status = 'status';
    if($status == true){
      $link =  "http://apis.livetvmobile.org/api/super/video/activate";
    }
    else{
      $link =  "http://apis.livetvmobile.org/api/super/video/deactivate";
  
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => $link,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS  =>  $video_id,
      CURLOPT_HTTPHEADER => array(
        "Authorization: $deactivate_token ",
        "Accept: application/json",
        "Content-Type: application/x-www-form-urlencoded"
    
      ),
    ));

    $response = curl_exec($curl); 
    curl_close($curl);
    $vid= json_decode($response);
     return response()->json(['success'=> 'Status updated successfully']);
    }

   }        
  }