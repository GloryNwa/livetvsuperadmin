<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckUser;
use Auth;
use Session;


class SuperAdminController extends Controller

{
  


    public function dashboard(){
      $token = Session::get('user');
        
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "http://apis.livetvmobile.org/api/statistics",
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
        // dd($token);

        $response = curl_exec($curl);  
            curl_close($curl);
            $resp = json_decode($response);

//////////////////////////////////////////////////////

$curll = curl_init();
$access_token = Session::get('user');

curl_setopt_array($curll, array(
  CURLOPT_URL => "http://apis.livetvmobile.org/api/view/stations",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: $access_token",
    "Accept: application/json"
  ),
));

$response = curl_exec($curll);
  curl_close($curll);
  $state = json_decode($response);
// dd($state);
////////////////////////////////////////////////////////////
$cul = curl_init();
$user_token = Session::get('user');
curl_setopt_array($cul, array(
  CURLOPT_URL => "http://apis.livetvmobile.org/api/video/all?per_page=10&page1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: $user_token",
    "Accept: application/json",
    "Content-Type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($cul);

curl_close($cul);
$res = json_decode($response);

 return view('dashboard',['resp'=>$resp, 'res'=>$res, 'state'=>$state]);  
         
    }


   


  }


    



