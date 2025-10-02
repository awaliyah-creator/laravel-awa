<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

//basic
Route::get('about', function(){
    return '<h1>Hallo </h1>'. 
    '<br>Selamat Datang di Perpustakaan Digital';
});

Route::get('aku', function(){
    return 'Nama : Alifhia Awaliyah'. 
    '<br> Kelas : XI RPL 3'. 
    '<br> Alamat : TCI';
});

Route::get('buku', function(){
    return view ('buku');
});

Route::get('menu', function(){
    $data = [
        ['nama_makanan'=>'Bala-bala','harga'=>1000,'jumlah'=>10],
        ['nama_makanan'=>'Gehu Pedas','harga'=>2000,'jumlah'=>15],
        ['nama_makanan'=>'Cireng Isi Ayam','harga'=>2500,'jumlah'=>5],
    ];
    $resto = "Resto MPL - Makanan Penuh Lemak";
    //compact fungsinya untuk mengirim collection data(array)
    //yang ada di variabel ke dalam sebuah view
    return view('menu',compact('data','resto'));
});

//route Parameter (Nilai)
Route::get('books/{judul}',function($a){
    return 'Judul Buku : '.$a;
});

Route::get('post/{title}/{category}',function($a, $b){
    //compact assosiatif
    return view('post',['judul'=>$a, 'cat'=>$b]);
});

//route opsional Parameter
//di tandai dengan ?
Route::get('profile/{nama?}',function($a = "guest"){
    return 'Halo nama saya '.$a;
});

Route::get('order/{item?}',function($a = "Nasi"){
    return view('order',compact('a'));
});

Route::get('/barang-total', function () {
    $barang = [
        ['nama' => 'Buku', 'harga' => 15000, 'qty' => 2],
        ['nama' => 'Pensil', 'harga' => 3000, 'qty' => 5],
        ['nama' => 'Penggaris', 'harga' => 7000, 'qty' => 1],
    ];
    return view('barang-total', compact('barang'));
});

Route::get('/nilai/{nama}/{mapel}/{nilai}', function ($nama, $mapel, $nilai) {
    return view('nilai', compact('nama', 'mapel', 'nilai'));
});

Route::get('/grading/{nama?}/{nilai?}', function ($nama = 'Guest', $nilai = 0) {
    $grade = 'E';
    if ($nilai >= 90) $grade = 'A';
    elseif ($nilai >= 80) $grade = 'B';
    elseif ($nilai >= 70) $grade = 'C';
    elseif ($nilai >= 60) $grade = 'D';
    return view('grading', compact('nama', 'nilai', 'grade'));
});

Route::get('/nilai-ratarata', function () {
    $siswa1 = ['nama' => 'Andi', 'nilai' => 85];
    $siswa2 = ['nama' => 'Budi', 'nilai' => 70];
    $siswa3 = ['nama' => 'Citra', 'nilai' => 95];

    $totalNilai = $siswa1['nilai'] + $siswa2['nilai'] + $siswa3['nilai'];
    $jumlahSiswa = 3;

    $rataRata = $totalNilai / $jumlahSiswa;
    $status = $rataRata >= 75 ? 'Lulus' : 'Remedial';

    return view('nilai-ratarata', [
        'siswa' => [$siswa1, $siswa2, $siswa3],
        'rataRata' => $rataRata,
        'status' => $status
    ]);
});

//Test Model
Route::get('test-model', function(){
    //menampilkaan semua data dari model Post
    $data = App\Models\Post::all();
    return $data;
});

// tambah data
Route::get('create-data-post', function(){
    //membuat data baru melalui model
    $data = App\Models\Post::create([
        'title'=>'Belajar PHP-2',
        'content'=>'Lorem Ipsum'
    ]);
    return $data;
});

Route::get('show-data/{id}', function ($id){
    // menampilkan data berdasarkan parameter 'id'
    $data = App\Models\Post::find($id);
    return $data;
});

Route::get('edit-data/{id}', function($id){
    // mengupdate data berdasarkan id
    $data           = App\Models\Post::find($id);
    $data->title    = "Membangun Project dengan Laravel";
    $data->content  = "Ipsum Lorem";
    $data->save();
    return $data;
});

Route::get('delete-data/{id}', function($id){
    // menghapus data berdasarkan parameter id
    $data       = App\Models\Post::find($id);
    $data->delete();
    // di kembalikan ke halaman test model
    return redirect('test-model');
});

Route::get('search/{cari}', function($query){
    // mencari data berdasarkan title yang mirip seperti (like) .....
    $data = App\Models\Post::where('title', 'like', '%' . $query . '%')->get();
    return $data;
});

// pemanggilan url menggunakan controller
//controller harus di import/di panggil
Route::get('greetings',[MyController::class, 'hello']);
Route::get('student', [MyController::class, 'siswa']);

// post
Route::get('post', [PostController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
