<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.article.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated=$request->validate([
            "title"=>"required|min:3",
            "body"=>"required",
            "categories"=>"required",
            "image"=>"image|mimes:png,jpg,gif"
        ]);

        $post=auth()->user()->Posts()->create([
            "title"=>$request->title,
            "body"=>$request->body,
            "image"=>$request->file->store("public/".date("Y/m/d"),"liara")
        ]);

        $post->Categories()->attach($request->categories);

        alert()->success('پست جدید ساخته شد');

        return redirect(route('index.admin'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
          return view('admin.article.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
        $validated=$request->validate([
            "title"=>"required|min:3",
            "body"=>"required",
            "categories"=>"required",
            "image"=>"mimes:png,jpg|nullable"
        ]);

        if ($request->hasFile("image")) {
            # code...

            Storage::disk("liara")->delete($post->image);
            $validated["image"]=$request->image->store("public/".date("Y/m/d"),"liara");
        }

        $post->update($validated);
        $post->Categories()->sync($request->categories);
        alert()->success('پست جدید بروز شد');
        return redirect(route('index.admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        Storage::disk("liara")->delete($post->image);

        $post->delete();
        alert()->success('مقاله مورد نظر با موفقیت حذف شد');

        return back();

    }
}
