<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function hello()
    {
    $nama = "alifhia";
    $umur = 16;

    return view('hello',compact('nama','umur')); 
    }
    public function siswa(){
        $data = [
            ['nama'=> 'Ly', 'kelas'=> 'x rpl 1'],
            ['nama'=> 'Jpd', 'kelas'=> 'x rpl 1'],
        ];
        return view('siswa', compact('data'));
    }
}
