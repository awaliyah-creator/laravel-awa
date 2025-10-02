<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    // daftar post
    public function index (){
        // menampilkan semua data dari post
        $post = Post::all();
        return view('post.index', compact('post'));
    }
}
