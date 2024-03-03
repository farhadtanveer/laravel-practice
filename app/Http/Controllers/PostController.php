<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){ 
        $data['posts'] = DB::table('post')->get();
        return view('post/index', $data);
    }

    public function create(){
        return view('post/create');
    }

    // store our data into database. and database table name is "post"
    public function store(Request $request){
        $data['title']= $request->title;
        $data['details']= $request->details;

        DB::table('post')->insert($data);
        return redirect('posts');
    }

    public function show($id){
        $data['post'] = DB::table('post')->where('id',$id)->first();
        return view('post/show', $data);
    }
    
    public function edit($id){
        $data['post'] = DB::table('post')->where('id',$id)->first();
        return view('post/edit', $data);
    }

    public function update(Request $request,$id){
        $data['title']= $request->title;
        $data['details']= $request->details;

        DB::table('post')->where('id',$id)->update($data);
        return redirect('posts');
    }

    public function delete(Request $request,$id){
        $data['title']= $request->title;
        $data['details']= $request->details;

        DB::table('post')->where('id',$id)->delete();
        return redirect('posts');
    }
}
