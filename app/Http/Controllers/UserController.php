<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{


    public function projectIndex($project_id)
    {
        $project = Project::find($project_id);
        return view('client.project',compact(['project']));
    }


    public function dashboardIndex()
    {
        $user = auth()->user();
        $total_spent = Project::where(['customer_id' => $user->id, 'payment_status' => 'success'])->sum('budget');
        $pending_payment = Project::where(['customer_id' => $user->id, 'payment_status' => 'pending'])->sum('budget');
        $success_project = Project::where(['customer_id' => $user->id, 'payment_status' => 'success'])->count();
        $projects = Project::where(['customer_id' => $user->id])->orderby('id', 'desc')->paginate(5);
        $posted_project = Project::where(['customer_id' => $user->id])->count();
        return view('client.index', compact(['projects', 'posted_project', 'total_spent', 'success_project', 'pending_payment']));
    }

    public function profileIndex()
    {
        $user = auth()->user();
        return view('client.profile', compact(['user']));
    }

    public function securityIndex()
    {
        $user = auth()->user();
        return view('client.security', compact(['user']));
    }


    function updateProfile(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required',
            'dob' => 'required|date',
            'address' => 'string'
        ])->validate();

        $user = User::find(auth()->user()->id);
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'address' => $request->address
        ]);

        return back()->with('success', 'Your profile has been successfully updated');
    }


    function loginUser(Request $request)
    {
        $val = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'string|required|min:6',
        ])->validate();

        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->with('error', 'Invalid login information');
        }
        return redirect('client/account')->with('success', 'Welcome back'.auth()->user()->name ?? 'client');
    }


    function createAccount(Request $request)
    {
        return 'cannot use function';
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
