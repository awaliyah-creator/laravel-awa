@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Hobi</h2>
    <div class="card p-4">
        <h4>{{ $hobi->nama_hobi }}</h4>
    </div>
    <a href="{{ route('hobi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
