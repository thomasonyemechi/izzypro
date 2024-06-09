<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function dashboardIndex()
    {
        return view('admin.index');
    }

    public function portfolioIndex()
    {
        $projects = Portfolio::orderby('id', 'desc')->paginate(30);
        return view('admin.portfolio', compact(['projects']));
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



    public function createPortfolio(Request $request)
    {
        Validator::make($request->all(), [
            'title' => 'string|required',
        ])->validate();
        $image = '';  $other_images = [];
        $slug = Str::slug($request->title);

        $files = $request->file('files');


        foreach ($request->only('files') as $files) {
            foreach ($request->file('files') as $key => $file) {
                $extension = $file->getClientOriginalExtension();
                $name = rand(2312323222, 99999999999) . time() . '.' . $extension;                
                $img = 'assets/uploads/' . $name;
                move_uploaded_file($file, $img);
                $other_images[] = $img;
            }
        }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $name = $slug. '.' . $extension;
            $img = 'assets/uploads/' . $name;
            move_uploaded_file($image, $img);
            $image = $img;
        }





        Portfolio::create([
            'title' => $request->title, 
            'description' => $request->description,
            'category' => $request->category,
            'note' => $request->note,
            'tags' => $request->tags,
            'image' => $image,
            'other_images' => json_encode($other_images)
        ]);

        return back()->with('success', 'Portfolio has been sucessfuly created');
    }
}



