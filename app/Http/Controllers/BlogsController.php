<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        return view('blog.home',compact('blogs'));
    }
    public function create(){
        
        return view('blog.create');

    }
    public function delete(Blog $blog){
        $blog->delete();
       return redirect('/blogs');


    }
    public function show(Blog $blog){
        return view('blog.show',compact('blog'));
    }
    public function update(Blog $blog, Request $request){

        $this->validate($request, [
            'name' => 'required'
        ]);

        $blog->name=request('name');
        $blog->description=request('description');
        $blog->user_id=request('user_id');
        $id=$blog->id;
        $blog->save();
        return view('blog.show',compact('blog'));
    }
    public function edit(Blog $blog){
        return view('blog.edit',compact('blog'));

    }
    public function store(Blog $blog, Request $request){

        $this->validate($request, [
            'name' => 'required|min:4',
            'description' => 'required|min:25',
            'user_id' => 'required|integer|min:1'
        ]);
        $blog->name=request('name');
        $blog->description=request('description');
        $blog->user_id=request('user_id');
        $imagePath=$request->file('photo')->store('photos');
        $blog->photo = $imagePath;

       
       // $blog->photo='Hi';
        $blog->save();
         //dd ($blog->photo);
        return redirect('/blogs');


    }
   
}
