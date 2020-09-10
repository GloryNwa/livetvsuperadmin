<?php

namespace App\Libraries;

use App\Loan;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Exception\ClientException;
use Validator;

class Messenger
{
    //

    public function postApi($dataArr,$endpoint)
    {
    
        if (Session::get('user')) {
           $token = Session::get('user');
        }else{
            $token = "";
        }




        $headers = [
            'Authorization' => $token,
            'Accept-Encoding' => 'gzip,deflate',
            'Content-Type' => 'application/json'
        ];

        $client =  new Client(['headers' => $headers]);

        //dd(env('API_HOST').$endpoint);

        try {
            //  echo "I dgot here";exit;
            $response = $client->post(env('API_HOST').$endpoint, [
                'form_params' => $dataArr,
            ]);

            return json_decode($response->getBody(true)->getContents());


        }catch (ClientException $exception) {


            $response = $exception->getResponse()->getBody(true)->getContents();
            $res = json_decode($response);

            if(isset($res->message)){
                if($res->message == "Unauthenticated."){

                   // session_destroy();
                    Session::flush();
                    return Redirect::to("/login")->with("message","You need to login to continue")->with("type","danger");

                }

            }

//            dd($res);
            return $res;

            /* return Redirect::route("showAddBank")
                 ->with('message',$res->message)
                 ->with('type','danger');*/
        }
    }




    public function getApi($endpoint)
    {

        if (Session::get('user')[0]["token"]) {
            $token = Session::get('user')[0]["token"];
        }else{
            $token = "";
        }

        $headers = [
            'Authorization' => $token,
            'Accept-Encoding' => 'gzip,deflate',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        $client =  new Client(
            ['headers' => $headers]
        );

        //dd(env('API_HOST').$endpoint);
        try {
             // echo "I dgot here";exit;
            $response = $client->get(env('API_HOST').$endpoint);
            //dd($response);
            return json_decode($response->getBody(true)->getContents());



        }catch (ClientException $exception) {


            $response = $exception->getResponse()->getBody(true)->getContents();


            $res = json_decode($response);
            if(isset($res->message)){
                if($res->message == "Unauthenticated."){

                    Session::flush();
                    return Redirect::to("/login")->with("message","You need to login to continue")->with("type","danger");

                }

            }


           // dd($res);

            return $res;

        }
    }





    public function random_num($size) {
        $alpha_key = '';
        $keys = range('A', 'Z');

        for ($i = 0; $i < 2; $i++) {
            $alpha_key .= $keys[array_rand($keys)];
        }

        $length = $size - 2;

        $key = '';
        $keys = range(0, 9);

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $alpha_key . $key;
    }



    public function randomId($num,$column,$table){

        $id = $this->random_num($num);

        $validator = \Validator::make(["$column"=>$id],['id'=>"unique:$table,reference"]);

        if($validator->fails()){
            return $this->randomId($num);
        }

        return $id;
    }


    public function validate($request,$array)
    {

        $validator = Validator::make($request, $array);


        # if all went well then...


        if ($validator->fails()) {

            return response()->json([
                'status' => false,
                'type' => "danger",
                'message' => 'Some errors occured while processing your request',
                'errors' => $validator->errors()->all(),
            ], 400);
            exit;


        }
    }

    public function return_message($status,$type,$message,$code)
    {
        return response()->json([
            'status' => $status,
            'type' => $type,
            'message' => $message,
        ], $code);
        exit;
    }


    public function disburse($loan_id)
    {

        //$bank = Banks::where("unique_id",Auth::user()->unique_id)->first();


        $loan = Loan::where("unique_id",$loan_id)->first();


        //check if the loan exist
        if(count($loan) < 1){

            return response()->json([
                'status' => false,
                'type' => "danger",
                'message' => 'An error 28291 occurred, please contact support',
            ], 400);
            exit;
        }

        //check if the loan has not already been disbursed
        if($loan -> status == 3){

            // loan has been disbursed
            return response()->json([
                'status' => false,
                'type' => "danger",
                'message' => 'This Loan has already been disbursed, check the bank account that u used while registering on the site',
            ], 400);
            exit;
        }



        dd($loan->owner);
        $useraccount = $loan->useuserr->account;



        $loan -> status = 3;
        $loan -> save();

        return response()->json([
            'status' => false,
            'type' => "danger",
            'message' => 'Loan disbursal successful',
        ], 200);
        exit;



    }







}
