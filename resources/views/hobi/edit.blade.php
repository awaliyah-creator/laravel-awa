@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Hobi</h2>
    <form action="{{ route('hobi.update', $hobi->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Hobi</label>
            <input type="text" name="nama_hobi" class="form-control" value="{{ $hobi->nama_hobi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('hobi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
