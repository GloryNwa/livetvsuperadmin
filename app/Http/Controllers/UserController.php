<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckUser;
use Auth;
use Session;



class UserController extends Controller
{
   

 //////////////////All Users////////////////////////////////  

 public function users(){
    $user_token = Session::get('user');

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
  CURLOPT_URL => "http://apis.livetvmobile.org/api/view/users?per_page=10&page=$page",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
  "Authorization: $user_token",
  "Accept: application/json"
  ),
  ));
  
  $response = curl_exec($curl);
  curl_close($curl);

  $data['users']  = json_decode($response);
    $users = 40;
    $per_page = 10;
    $links = $users / $per_page;

    $data['links'] = $links;
  return view('users',$data);
  }
  
}





/////////////////////////DELETE Users////////////////////////////////////////

public function deleteUser(Request $request, Messenger $messenger,$user_id){


  $dataArr = array(
    'user_id'=>$user_id
 
  
 );

$response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/user/delete');

if($response->status){
return redirect('/all/users/')->with('message', 'User deleted successfully ')->with("type","success");

}else {

  
return redirect('/all/users/'.$request->user_id)->with('message', 'There was an error while trying to delete user ')->with("type","danger");

}


}

  
  
  
  //////////////////////////////Login Method//////////////////////////////////////
    public function loginPage(){
      return view('loginPage');
  }
  
  
  public function login(Request $request){
      
          $this->validate($request,[
              'email' => 'required',     
              'password' => 'required'
      ]);
   
      $loginDetails = "email=loveworldplus@imm.com&password=password";
      
  
      $curl = curl_init();
  
      curl_setopt_array($curl, array(
        CURLOPT_URL => "apis.livetvmobile.org/api/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $loginDetails,
        CURLOPT_HTTPHEADER => array(
          "Accept: application/json",
          "Content-Type: application/x-www-form-urlencoded"
        ),
      ));
  
          $response = curl_exec($curl);
          curl_close($curl);
          // echo $response;
          $resp = json_decode($response);
          //dd($resp);
          //die();
          if($resp->status === true){
              $a = $resp->data->access_token;
              $name = $resp->data->user->name;
              // dd($a);
            
                //  session_start(),
                
                Session::put('user', $a);
                Session::put('name', $name);
  
  
  
                // session()->put('registered', $session);
            //  dd(session('unique_id', $resp));
            // dd(Session::get('user'));
              // session()->put('registered', $session);
              return redirect('/dashboard');
             
            }else{
              return redirect('/');
            }
   }
  
  
  
 //////////////////////////////Logout bMethod//////////////////////////////////////
   public function logout(){
      session()->flush();
      return redirect('/');      
  }
  
  //   public function logout(){
  //     Auth::logout();
  
  //  return redirect("/login");
}




