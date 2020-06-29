<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Data;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function users()
    {
        return view('users');
    }

    public function adduser(Request $request){
        $this->validate($request, [
             'fname' => 'required',
             'lname' => 'required',
             'email' => 'required'
             
 
        ]);
 
         $adduser  = new User;
         
         $adduser->firstName = $request->input('fname');
         $adduser->lastName = $request->input('lname');
         $adduser->email = $request->input('email');  
         $adduser->save();
         return redirect('/users/input')->with('response', 'Data Submitted');
    }

    public function userdata()
    {
        return view('data');
    }

    public function data(){
        
      $data = User::latest()->get();
       return view('data')->with('data',$data);
    }


    public function update(Request $request, $id){
    
         $updateData = User::find($id);
         $updateData->firstName = $request->input('fname');
         $updateData->lastName = $request->input('lname');
         $updateData->email = $request->input('email');  
         
         $updateData->save();
         return $updateData;
       
    }


 
}
