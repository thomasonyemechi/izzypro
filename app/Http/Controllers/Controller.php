<?php

namespace App\Http\Controllers;

use App\Models\Sms;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

        
    function sendSms($body, $to, $from = "")
    {

        $from = ($from == "") ? env('SMS_DEFAULT_SENDER') : $from;

        $sms = Sms::create([
            'phone' => $to,
            'message' => $body,
            'sent_by' => auth()->user()->id ?? 1 
        ]);

        $res = Http::asForm()->post(env('SMS_ENDPOINT'), [
            'from' => $from,
            'to' => $to,
            'body' => $body,
            'api_token' => env("SMS_API_TOKEN"),
            'gateway' => '1',
            'append_sender' => env('SMS_DEFAULT_SENDER')
        ]);

        $res = json_decode($res);

        if(isset($res->data->status)) {
              if($res->data->status == 'success') {
            $sms->update([
                'status' => $res->data->status ?? 'Message has been sucessgully sent'
            ]);
              }
        }else {
            $sms->update([
                'status' => $res->data->status ?? 'Message was not sent'
            ]);    
        }

    
        return $res;
    }


}
