<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    // beri middleware 'auth' untuk mengecek sudah login atau belum
    public function __construct(){
        $this->middleware('auth');
    }

    // daftar post
    public function index (){
        // menampilkan semua data dari post
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    // menampilkan halaman form create
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request){
        // membuat data baru untuk table 'posts'
        // melalui model Post
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('post.index');
    }
    public function edit($id)
    {
        // mencari data post berdasarkan parameter 'id'
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        // mencari data post berdasarkan parameter 'id'
        $post           = Post::findOrFail($id);
        $post->title    = $request->title;
        $post->content  = $request->content;
        $post->save(); // di simpan ke db
        // di alihkan ke halaman post melalui route post.index
        return redirect()->route('post.index');
    }

    // menghapus data berdasarkan parameter 'id'
    public function destroy($id)
    {
        // mencari data post berdasarkan parameter 'id'
        $post = Post::findOrfail($id);
        $post->delete(); //setelah data di temukan kemudian di delete
        return redirect()->route('post.index');
    }
}
