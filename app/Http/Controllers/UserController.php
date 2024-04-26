<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{


    function loginUser(Request $request)
    {
        $val = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'string|required|min:6',
        ]);

        if ($val->fails()){
            return response(['errors'=>$val->errors()->all()], 422);
        }

        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response(['message' => 'Invalid Credentials'], 401);
        }

        return response(['message' => 'Login successful'], 200);

    }


    function createAccount(Request $request)
    {
        $val = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => 'string|required|min:6',
            'name' => 'required|string'
        ]);

        if ($val->fails()){
            return response(['errors'=>$val->errors()->all()], 422);
        }

        $user = User::create([
            'name' => $request->name, 
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return response([
            'message' => 'User\'s account has been sucessfuly created'
        ], 200);
    }


    function checkEmail($email) {
        $check  = User::where(['email' => $email])->first();
        return response([
            'data' => $check
        ], 200);
    
    }

    function checkPhone($phone)
    {
        $check  = User::where(['phone' => $phone])->first();
        return response([
            'data' => $check
        ], 200);
    
    }
}
