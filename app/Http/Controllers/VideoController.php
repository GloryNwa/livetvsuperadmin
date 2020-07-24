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

        if(isset($_GET['page'])){
          if(!empty($_GET['page'])){
              $page = $_GET['page'];
          }else{
              $page = 1;
          }
      }else{
          $page = 1;

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/video/all?per_page=10&page=$page",
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
            dd($data['total_videos']);exit;
            $total_videos = 40;
       
            $per_page = 10;
            $links = $total_videos / $per_page;

            $data['links'] = $links;
           
              return view("videos",$data);
              
     
      }


    }
  
      ///////////////////////////////////////////////////////////////

      public function trashVideo($id){
    
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
          CURLOPT_POSTFIELDS => array('video_id' => $id),
          CURLOPT_HTTPHEADER => array(
            "Authorization:$trash_token",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
          ),
        ));
  
        $response = curl_exec($curl);
   
        curl_close($curl);
        $total_videos = json_decode($response);
           
        // dd($total_videos);
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
      public function edit_video($id){
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
              CURLOPT_POSTFIELDS => array('video_id' => $id),
              CURLOPT_HTTPHEADER => array(
                  "Authorization:$editing_token",
                  "Accept: application/json",
                  
                ),
              ));
              
               
                $response = curl_exec($curl);
                //  dd($response);
                curl_close($curl);
                $vids= json_decode($response);
             
                $vid = $vids->data;
              //  dd($data );
            return view('edit_video',['vid'=>$vid]);
      }




      public function update(Request $request, $video_id){
          $this->validate($request, [
            'title'  =>'required',
            'video_id'=>'',
            'category'=>'required',
            'banner'=>'required',
            'file'=>'required',
            'owner_id' =>'required'
           
            ]);
            $update_token = Session::get('user');
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://apis.livetvmobile.org/api/video/update",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => array('title' => 'required','category' => 'required','banner'=> new CURLFILE('required'),'video_id' => ''),
              CURLOPT_HTTPHEADER => array(
               "Authorization:$update_token ",
                "Accept: application/json",
                "Content-Type: application/x-www-form-urlencoded"
      
        ),
      ));
       
      $response = curl_exec($curl);
      //  dd($response);
      curl_close($curl);
      $vids= json_decode($response);
       return redirect('/videos')->with('message', 'Video updated successfully');   
      
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
    
      public function category(){
        $cat_token = Session::get('user');
        if(isset($_GET['page'])){
          if(!empty($_GET['page'])){
              $page = $_GET['page'];
          }else{
              $page = 1;
          }
      }else{
          $page = 1;
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/view/categories?per_page=5&page=$page",
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
            $category = 10;
            $per_page = 5;
            $links = $category / $per_page;

            $data['links'] = $links;
            return view('category',$data);
        }

      }


        public function createCategory(){
          return view ('createCategory');
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

      public function editCat($id){
        return view ('editCat');
    }


        
}
