<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\CheckUser;
use App\Libraries\Messenger;
use Auth;
use Session;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;


class SliderController extends Controller
{
    ///////////////////////////SLIDERS//////////////////////////////////////////////
    public function sliders(){
        return view('sliders');
}

public function postSliders(Request $request, Messenger $messenger){

       
    $this->validate($request, [
      'contentType'  => 'required',
      'content' => 'required',
      'sliderfile'  => 'required'
    
       ]);

            $dataArr = array(
              'contentType'=>$request->contentType,
              'content'=>$request->content,
              'sliderfile'=>$request->sliderfile);

           $response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/super/slider/upload/banner');
  
  
    if($response->status){
      return redirect('/create/sliders')->with('message', 'Slider Uploaded successfully ')->with("type","success");
  
          }else {

            
          return redirect('/create/sliders')->with('message', 'There was an error while trying to upload banner slider ')->with("type","danger");
  
          }

          
        }


 //////////////////////////MANAGE SLIDERS /////////////////////////////////////

    
 public function manageSliders(){
   
    $allSliders = Session::get('user');
    $curl = curl_init();
     curl_setopt_array($curl, array(
        CURLOPT_URL => "http://apis.livetvmobile.org/api/super/slider/all",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization:$allSliders",
          "Content-Type: application/x-www-form-urlencoded",
          "Accept: application/json"
        ),
      ));
    $response = curl_exec($curl);
    curl_close($curl);
    $sliders = json_decode($response);
      return view('manageSliders',['sliders' =>$sliders]);
  }





  public function  postSlider(Request $request)
  {


      $request->validate([
        'uri_type'  => 'required',
        'uri' => 'required',
        'file'  => 'required'
      ]);




      //$response = $this->postFile($dataArr,env('API_HOST').'/webtier/recordlabelartist/createartist');

      $client =  new Client();

      $token= Session::get('user');

      try {


          $response = $client->request('POST', 'http://apis.livetvmobile.org/api/super/slider/upload/banner', [
              'headers' => [
                  'Authorization' => $token,


              ],

              'multipart' => [
                  [

                      'name' => 'file',
                      'contents' => fopen($request->file('file')->path(), 'r')
                  ],

                  [
                      'name' => 'uri_type',
                      'contents' =>$request->uri_type
                  ],
                  [
                      'name' => 'uri',
                      'contents' => $request->uri
                  ],
                 
              ]
          ]);
          $res = json_decode($response->getBody()->getContents());


          return redirect()->route("sliders")->with("message", $res->message)->with("type", 'success');

      }catch(ClientException $exception){
          $response = $exception->getResponse()->getBody(true)->getContents();
          $res = json_decode($response);
          return redirect()->route("sliders")->with("message", $res->message)->with("type", 'danger');

      }

  }
}
