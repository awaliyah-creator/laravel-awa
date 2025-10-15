@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Hobi</h2>
    <form action="{{ route('hobi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Hobi</label>
            <input type="text" name="nama_hobi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('hobi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
