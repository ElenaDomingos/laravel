<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('Blog', ['blog' => $blog]);
    }

    public function show(Blog $blog, Request $request){
        $blog = Blog::find(request('id'));
        return view('singlepost',  ['blog' => $blog]);
    }
}
