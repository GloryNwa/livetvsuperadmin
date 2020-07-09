<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckUser;
use Auth;
use Session;


class VideoController extends Controller
{
   
    public function videos(){
        $video_token = Session::get('user');
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/video/all?per_page=40&page=2",
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
              $videos = json_decode($response);
            //  dd( $videos );
              return view("videos", compact('videos'));
     
      }
  
      ///////////////////////////////////////////////////////////////
  
      
      public function create_video(){
     
          return view('create_video');
      }
  
  
  
      public function upload_video(){
  
        $videos_token = Session::get('user');
        $curl = curl_init();
  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/view/categories?per_page=2&page=2",
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
          'category' => 'required',
          'station'  => 'required',
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
                CURLOPT_POSTFIELDS => array('station_id' => 'testanyid','title' => 'testanytitle','category_id' => 'testanycategoryid','banner' => 'http//test.com/banner.jpg','file' => 'http//test.com/file.mp4'),
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
      public function edit_video(){
          return view('edit_video');
      }
  
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
        CURLOPT_POSTFIELDS => "video_id=$id",
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
      public function createCategory(){
       return view ('createCategory');
      }


      public function category(){
        $cat_token = Session::get('user');
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/view/categories?per_page=10",
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
    // dd($data );
            return view('category',$data);
        }

    
    
        public function postCategory(Request $request){
            $this->validate($request, [
              'name'  => 'required',
              'unique_id' => 'required'
               
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
          CURLOPT_POSTFIELDS => array('name' => 'Amen'),
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


        
}
