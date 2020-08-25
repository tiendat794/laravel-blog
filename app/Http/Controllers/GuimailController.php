<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();
class GuimailController extends Controller
{
    function guimaillienhe(Request $request){
        $input = $request->all();
          Mail::send('mauthulienhe', 
            array(  'name'=>$input["name"],
                    'email'=>$input["email"], 
                    'subject'=>$input['subject'],
                    'content'=>$input['message']
                ), 
            function($message){
                $message
                ->from('kindkid12@gmail.com',' Trần Tiến Đạt')
                ->to('kindkid115@gmail.com', 'Ban quan tri')
                //->attach('img/a.png') // gửi đính kèm file nếu muốn
                ->subject('Thư liên hệ');
            }
            
          );
          Session::put('success','Cảm ơn bạn đã gửi phản hồi cho chúng tôi');
          return Redirect::to('contact');  
        //print_r($_POST);
      } 
}
