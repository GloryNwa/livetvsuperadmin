<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AnnouncementController extends Controller
{

     
    public function manageBanners(){
        $token = Session::get('user');
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/banner/all",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
          "Authorization: $token",
          "Accept: application/json"
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $banners = json_decode($response);
          return view('manageBanners',['banners' =>$banners]);
      }

//////////////////////////////////////////////////////////////
// public function manageBanners(){
 
//   if(isset($_GET['page'])){
//     if(!empty($_GET['page'])){
//         $page = $_GET['page'];
//     }else{
//         $page = 1;
//     }
//   }else{
//     $page = 1;

//     $token = Session::get('user');
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => "http://apis.livetvmobile.org/api/banner/all?per_page=10&page=$page",
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => "",
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 0,
//       CURLOPT_FOLLOWLOCATION => true,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => "GET",
//       CURLOPT_HTTPHEADER => array(
//       "Authorization: $token",
//       "Accept: application/json"
//     ),
//     ));

//     $response = curl_exec($curl);
//     curl_close($curl);
//     $data['banners']  = json_decode($response);
//      // dd($data['total_videos']);exit;
//      $banners = 40;

//      $per_page = 10;
//      $links = $banners / $per_page;

//      $data['links'] = $links;
    
//        return view("manageBanners",$data);
//   }

// }
           
 //////////////////////////////////////////////////////////////     


     public function createBanners(){
        return view('createBanners');
    }


    public function postBanners(Request $request){
        $this->validate($request, [

            'title' => 'required',
            'desc' => 'required',
            'banner' => 'required', 
            'link' => 'required' 
      ]);
      $banner = Session::get('user');
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "http://apis.livetvmobile.org/api/super/banner/upload",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array('title' => 'testing','file'=> new CURLFILE('/C:/Users/Edwin Codes/Desktop/testUI.PNG'),'link' => 'http://apis.livetvmobile.org/api/banner/upload','description' => 'its just a test please ignore'),
        CURLOPT_HTTPHEADER => array(
          "Authorization:$banner",
          "Accept: application/json",
          "Content-Type: application/x-www-form-urlencoded"
        ),
      ));
      

          return redirect()->back()->with('message', 'Banner uploaded successfully'); 
    }



      
    public function editBanner(Request $request,$id){
        $this->validate($request, [
         
            'banner' => 'required' 
           
            ]);
    

        return redirect('/manageBanners');
    }
  
  
 //////////////////////////////////////////////////////////// 
  
 public function createAnnouncement(){
    return view('createAnnouncement');
 }
  
 /////////////////////////////////////////////////////////// 
   
  public function announcement(){
    $announce_token = Session::get('user');
    $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://apis.livetvmobile.org/api/super/announcement/all",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization:$announce_token  ",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $data['announce'] = json_decode($response);
// dd($data );
        return view('announcement',$data);
   }



    public function postAnnouncement(Request $request){
        $this->validate($request, [
          'title'  => 'required',
          'desc' => 'required',
          'text'  => 'required',
          'time' => 'required'
            
           
            ]);
  
            $create_token = Session::get('user');
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "http://apis.livetvmobile.org/api/super/create/announcement",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => array('title' => 'test title','description' => 'test description with so much text, as much text as you can but no more than one hundred and ninety one text','button_text' => 'this is just a button text'),
              CURLOPT_HTTPHEADER => array(
                "Authorization: $create_token",
                "Accept: application/json",
                "Content-Type: application/x-www-form-urlencoded"
              ),
            ));
            
                  $response = curl_exec($curl);
                  curl_close($curl);
                  $uploads= json_decode($response);
                  
                  return redirect()->back()->with('message', 'Announcement created successfully');
            
         
        }

      public function edit(Request $request,$id){
        $this->validate($request, [
         
            'announcement' => 'required' 
           
            ]);
    

        return redirect('/announcement');
    }

  
  /////////////////////////////////////////////////////////////   
     
  public function deleteAnnouncement(Request $request, Messenger $messenger,$id){


    $dataArr = array(
      'announcement_id'=>$id
   
    
   );

  $response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/super/announcement/remove');

if($response->status){
return redirect('/announcement')->with('message', 'Announcement deleted successfully ')->with("type","success");

  }else {

    
  return redirect('/announcement'.$request->announcement_id)->with('message', 'There was an error while trying to delete announcement ')->with("type","danger");

  }

 
}

    
 

}

  
  
  

