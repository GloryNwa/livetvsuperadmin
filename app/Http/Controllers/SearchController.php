<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Messenger;

class SearchController extends Controller
{
    //

    public function returnSearch(Request $request,Messenger $messenger){
        $request->validate([
            'search' => 'required'
        ]);

        $dataArr = array(
            'search'=>$request->search,
        );

         $response = $messenger->postApi($dataArr,'http://apis.livetvmobile.org/api/super/search/videos');

        return response()->json($response);

    }
}
