@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Dosen</h2>
    <div class="card p-4">
        <h4>{{ $dosen->nama }}</h4>
        <p><strong>NIPD:</strong> {{ $dosen->nipd }}</p>
    </div>
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
