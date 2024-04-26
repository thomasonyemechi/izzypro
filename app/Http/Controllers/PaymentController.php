<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    function getPaymentLink($ref, $amount, $currency, $redirect_url, $user)
    {
        $res = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer FLWSECK-746765972f7c0c4b2df2422515f17a8f-18d8dad7004vt-X',
        ])->post('https://api.flutterwave.com/v3/payments', [
            'tx_ref' => $ref,
            'amount' => $amount,
            'currency' => $currency,
            'redirect_url' => $redirect_url,
            'payment_options' => 'card, ussd, banktransfer',
            'customizations' => [
                'title' => env('APP_NAME') . ' Order Payment',
                'logo' => ""
            ],
            'customer' => [
                'email' => $user['email'],
                'phonenumber' => $user['phone'],
                'name' => $user['name'],
            ],
        ]);
        return $res;
    }


    public function verifyFlutter(Request $request, $trno)
    {
        $res = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer FLWSECK-746765972f7c0c4b2df2422515f17a8f-18d8dad7004vt-X',
        ])->get('https://api.flutterwave.com/v3/transactions/' . $request->transaction_id . '/verify', []);

        $res = json_decode($res);

        if (!auth()->user()) {
            $user = User::where(['email' => $res->data->customer->email])->first();
            Auth::login($user);
        }


        if ($request->status == 'successful') {

            return redirect('/thank-you?trno=' . $trno)->with('success', 'payment completed');
        } else {
            return redirect('/user/index')->with('error', 'An error occure while making payment');
        }
    }
}
