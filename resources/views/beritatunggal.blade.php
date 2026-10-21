@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-3">{{ $berita->judul }}</h1>
        
        <p class="text-muted">
            Ditulis oleh: <strong>{{ $berita->penulis }}</strong> | 
            Diposting pada {{ $berita->created_at->format('d M Y') }}
        </p>

        <hr>

        <div class="content mt-3">
            <p>{{ $berita->konten }}</p>
        </div>

        <div class="mt-4">
            <a href="/berita" class="btn btn-secondary">&larr; Kembali ke Daftar Berita</a>
        </div>
    </div>
@endsection