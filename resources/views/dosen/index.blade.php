@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Dosen</h2>
    <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama Dosen</th>
            <th>NIPD</th>
            <th>Aksi</th>
        </tr>
        @foreach($dosens as $dosen)
        <tr>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->nipd }}</td>
            <td>
                <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-info btn-sm">Show</a>
                <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
