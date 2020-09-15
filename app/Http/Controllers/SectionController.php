<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Messenger;
use Session;
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
  $sections= json_decode($response);
  // $section = $sections->data['0'];
  // dd($sections);
    return view('manageSection',['sections' =>$sections]);
}


/////////////////////////DELETE SECTION////////////////////////////////////////

public function deleteSection(Request $request, Messenger $messenger,$id){


          $dataArr = array(
            'section_id'=>$id
         
          
         );

        $response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/super/section/delete');

  if($response->status){
    return redirect('/manage/section/')->with('message', 'Section created successfully ')->with("type","success");

        }else {

          
        return redirect('/manage/section/'.$request->section_id)->with('message', 'There was an error while trying to create section ')->with("type","danger");

        }

       
      }





      public function editSection($id){
//  dd($id);
        $token = Session::get('user');
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://apis.livetvmobile.org/api/super/section/details",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => array('section_id' => $id),
          CURLOPT_HTTPHEADER => array(
            "Authorization: $token",
            "Accept: application/json",
            "Content-Type: application/x-www-form-urlencoded"
          ),
        ));

        $response = curl_exec($curl);
        // dd($response);
        curl_close($curl);
        $edit= json_decode($response);
      
         return view('editSection',['edit'=> $edit]);

  }


//////////////////////////Update Section////////////////////////////////

      public function updateSection(Request $request, Messenger $messenger){

       
        $this->validate($request, [
          'title'  => 'required',
          'videos'  => 'required',
          'section_id' => 'required'
          
           ]);

                $dataArr = array(
                  'title'=>$request->title,
                  'videos'=>implode(",",$request->videos),
                  'section_id'=>$request->section_id
                );
      
              $response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/super/section/edit');
      
      
        if($response->status){
          return redirect('/manage/section')->with('message', 'Section Updated successfully ')->with("type","success");
      
              }else {
    
                
              return redirect('/edit/section/'.$request->video_id)->with('message', 'There was an error while trying to update Section ')->with("type","danger");
      
              }

             
            }
    



}
