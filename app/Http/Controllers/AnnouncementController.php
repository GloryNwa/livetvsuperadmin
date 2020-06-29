<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

     
    public function manageBanners(){
        return view('manageBanners');
    }
      
    public function editBanner(Request $request,$id){
        $this->validate($request, [
         
            'file' => 'required' 
           
            ]);
    

        return redirect('/manageBanners');
    }
  
  
  
  
    public function featuredVideo(){
      return view('featuredVideo');
  }
  
 /////////////////////////////////////////////////////////// 
   
  public function anouncement(){
    return view('anouncement');
 }


    public function postAnnouncement(Request $request){
        $this->validate($request, [
          'title'  => 'required',
          'desc' => 'required',
          'text'  => 'required',
          'link' => 'required',
          
         
          ]);
  
  
        
  
           return redirect('/anouncement');
      }
  
  
}
