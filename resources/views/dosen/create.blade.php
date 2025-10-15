@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Dosen</h2>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Dosen</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NIPD</label>
            <input type="text" name="nipd" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
