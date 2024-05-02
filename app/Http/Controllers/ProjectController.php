<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProjectController extends PaymentController
{
    function postProject(Request $request)
    {

        $find = User::where('email', $request->email)->first();
        if($find) {
            $user = $find;
        }else {
            $user = User::create([
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->phone)
            ]);
        }
   
        $trno = $this->ran_rel(20);

        Project::create([
            'customer_id' => $user->id,
            'title' => $request->project_name,
            'description' => $request->description,
            'budget' => $request->budget,
            'deadline' => $request->date,
            'category' => $request->industry,
            'trno' => $trno
        ]);




        $info = [
            'email' => $user->email, 'phone' => $user->phone, 'name' => env('APP_NAME').' Customer'
        ];

        $redirect = $this->getPaymentLink($trno, $request->budget, 'NGN',  env('APP_LINK') . 'verify/' . $trno, $info);


        // return $redirect;

        $redirect = json_decode($redirect);
        return redirect($redirect->data->link);
    }
}
