<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{


    public function contact_form(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data = array(
            'name'=> $request['name'],
            'phone'=> $request['phone'],
            'messages'=> $request['message'],
            'token'=>'_token',
        );


        Mail::send(['text'=>'layouts.mail'], $data, function($message) {
            $message->to('galich_iv@ukr.net');
            $message->subject('Laravel Basic Testing Mail');
            $message->from('info@agromaster.pp.ua','Config.pp.ua');
        });

        toast('Your Post as been submited!','error','bottom-right');
//        alert('Title','Lorem Lorem Lorem', 'success');
        return redirect()->back();
    }


    public function newsletter(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'phone' => 'required',
        ]);

        $data = array(
            'messages'=> $request['message'],
            'phone'=> $request['phone'],
            'token'=>'_token',
        );

        Mail::send(['text'=>'mails.newsletter'], $data, function($message) {
            $message->to('galich_iv@ukr.net');
            $message->subject('Laravel Basic Testing Mail');
            $message->from('info@agromaster.pp.ua');
        });

        toast('Your message has been submited!','success');
        return redirect()->back();
    }







    public function basic_email() {

    }
    public function html_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    public function attachment_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
