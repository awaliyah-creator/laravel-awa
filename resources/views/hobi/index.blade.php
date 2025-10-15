@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Hobi</h2>
    <a href="{{ route('hobi.create') }}" class="btn btn-primary mb-3">Tambah Hobi</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama Hobi</th>
            <th>Aksi</th>
        </tr>
        @foreach($hobis as $hobi)
        <tr>
            <td>{{ $hobi->nama_hobi }}</td>
            <td>
                <a href="{{ route('hobi.show', $hobi->id) }}" class="btn btn-info btn-sm">Show</a>
                <a href="{{ route('hobi.edit', $hobi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('hobi.destroy', $hobi->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
