<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $posts=Post::query();

        if($search=request("search")){
            $posts->where("title","LIKE","%".$search."%")
                ->orWhere("body","LIKE","%".$search."%");
        }
        $postcatgory=PostCategory::all();
        $posts=$posts->paginate(6);
        return view('home.index',compact("posts","postcatgory"));
    }




    public function category(PostCategory $postcategory)
    {
        # code...
        return view("home.category",compact("postcategory"));
    }


    public function post(Post $post)
    {
        # code...
        return $post;
    }

}
