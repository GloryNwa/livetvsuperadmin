<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckUser;
use Auth;
use Session;

class StationController extends Controller
{
    public function stations() {
        $users_token = Session::get('user');
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
              "Authorization: $users_token",
              "Accept: application/json"
            ),
          ));
          
          $response = curl_exec($curl);
            curl_close($curl);
            $data['stations'] = json_decode($response);
  
             return view('stations',$data);
      }
  
  
  
  
      public function stationProfile($id){
        $station_token = Session::get('user');
        $curl = curl_init();
  
          curl_setopt_array($curl, array(
            CURLOPT_URL => "http://apis.livetvmobile.org/api/station/profile",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('id' => 'lwusa'),
            CURLOPT_HTTPHEADER => array(
              "Authorization: $station_token",
              "Accept: application/json"
            ),
          ));
        
          $response = curl_exec($curl);
         
           curl_close($curl);
           $stations = json_decode($response);
  
          // dd($stations->data['0']->stationName);
          $station = $stations->data['0'];
  
           return view('stationProfile',compact('station'));
        }
  
  
  
      public function stationsProfile(Request $request,$id){
        $this->validate($request, [
          'name'  => 'required',
          'desc' => 'required',
          'url'  => 'required',
          'email' => 'required',
          'paypal_id'  => 'required',
          'phone' => 'required',
          'donateurl'  => 'required',
          'weburl' => 'required',
          'scheduleurl'  => 'required',
          'kingspay' => 'required',
          'unique_id'  => 'required',
          'banner' => 'required'
         
          ]);
  
  
           return redirect('/station/profile')->with('message', 'Station updated successfully');
          
       
      }
  
  
  
   
  
      
     
}
