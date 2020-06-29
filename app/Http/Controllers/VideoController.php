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
        CURLOPT_URL => "apis.livetvmobile.org/api/statistics",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization: $video_token",
            "Accept: application/json"
           ),
       ));
          
          $response = curl_exec($curl);
           curl_close($curl);
              $videos = json_decode($response);
            // dd($videos->data);
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
          'file' => 'required'
          
         
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
                
                $uploads->save();
           return redirect('/upload_video')->with('message', 'Video updated successfully');
          
       
      }
  
  
  /////////////////////////////////////////////////////////////////////    
      public function edit_video(){
          return view('edit_video');
      }
  
      public function video_details(){
          return view('video_details');
      }
      //////////////////////////
  
      
      
      
  
  
  
  
}
