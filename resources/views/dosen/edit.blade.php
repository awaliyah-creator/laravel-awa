@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Dosen</h2>
    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Dosen</label>
            <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}" required>
        </div>
        <div class="mb-3">
            <label>NIPD</label>
            <input type="text" name="nipd" class="form-control" value="{{ $dosen->nipd }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
