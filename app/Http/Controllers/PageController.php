<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Mail;
use Validator;
 

class PageController extends Controller
{
    public function pageview()
    {
        return view('home');      
    }

    public function downloadPDF()
    {
        $file = public_path()."/images/AnamKhanSDE.pdf";
        $headers = array('Content-Type: application/pdf',);
        return response()->download($file, 'AnamKhanSDE.pdf',$headers);  
    }

    public function sendMail(Request $request){

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];

        $validator = Validator::make($request->input(), $rules);
        if($validator->passes())
        {
            Mail::send([], [], function ($message) use($request) { 
                $message->to('anamk8064@gmail.com', 'Anam Khan')
                   ->subject($request->subject) 
                   ->from($request->email,$request->name)
                   ->setBody($request->message, 'text/html'); 
            });
            return Response::json(array( 
                'error'=> false, 
                'message'=> 'Thanks for contacting me, I will get back to you soon!' 
            )); 
        }else
        {
            return Response::json(array( 
                'error'=> true, 
                'message'=> 'Please fill the below fields Correctly.' 
            )); 
        }
    }
}



