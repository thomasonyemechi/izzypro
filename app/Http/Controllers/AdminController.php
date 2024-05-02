<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboardIndex()
    {
        return view('admin.index');
    }


    public function projectIndex($project_id)
    {
        $project = Project::findorfail($project_id);

        return view('admin.project', compact(['project']));

    }


    public function clientIndex()
    {
        $total_client = User::count();
        $users = User::orderby('id', 'desc')->paginate(20);
        return view('admin.manage_users', compact(['users', 'total_client']));
    }

    public function clientOrdersIndex()
    {
        $projects = Project::with(['user'])->orderby('id', 'desc')->paginate(25);
        $total_projects = Project::count();
        return view('admin.orders', compact(['projects', 'total_projects']));
    }
}



