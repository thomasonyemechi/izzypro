<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class ProjectController extends Controller
{
    function postProject(Request $request)
    {

        // PaymentController::class
        Validator::make($request->all(), [
            'email' => 'required|email|exists:customers,email',
            'phone' => 'required',
            'address' => 'required|string'
        ])->validate();
    }
}
