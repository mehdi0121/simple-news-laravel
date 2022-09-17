<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //

    public function index()
    {
        # code...
        $posts=Post::latest()->get();
        return view("admin.panel.index",compact("posts"));
    }


}
