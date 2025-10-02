<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //secara otomatis model ini menganggap
    //table yang di gunakan adalah table'posts'

    // apa aja yang boleh di isi
    public $fillable = ['title', 'content'];

    // apa aja yang boleh di tampilkan
    public $visible = ['id', 'title', 'content'];

    //mengisi tanggal kapan di buat dan kapan di update secara otomatis
    public $timestamps = true;
}
