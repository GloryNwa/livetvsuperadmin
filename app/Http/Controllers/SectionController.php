<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Messenger;

class SectionController extends Controller
{
  public function section(){
      return view('section');
  }


 //////////////////////////Create SECTION /////////////////////////////////////

 public function postSection(Request $request, Messenger $messenger){

       
  $this->validate($request, [
    'title'  => 'required',
    'videos'  => 'required'
    
     ]);

          $dataArr = array(
            'title'=>$request->title,
            'videos'=>implode(",",$request->videos),
         );

        $response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/super/section/create');

  if($response->status){
    return redirect('/manage/section/')->with('message', 'Section created successfully ')->with("type","success");

        }else {

          
        return redirect('/create/section/'.$request->video_id)->with('message', 'There was an error while trying to create section ')->with("type","danger");

        }

       
      }



 //////////////////////////MANAGE SECTION /////////////////////////////////////

    
 public function manageSection(){
   
  $token = Session::get('user');
  $curl = curl_init();
   curl_setopt_array($curl, array(
      CURLOPT_URL => "http://apis.livetvmobile.org/api/super/section/view",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization:$token",
        "Content-Type: application/x-www-form-urlencoded",
        "Accept: application/json"
      ),
    ));
  $response = curl_exec($curl);
  curl_close($curl);
  $section = json_decode($response);
    return view('manageSection',['section' =>$section]);
}



}
