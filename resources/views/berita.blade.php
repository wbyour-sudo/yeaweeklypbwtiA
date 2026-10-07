@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <article class="blog-post">
            <h1 class="blog-post-title mb-1">Judul Berita Terbaru</h1>
            <p class="blog-post-meta text-muted">Dipublikasikan oleh <strong>Admin</strong> pada 7 Oktober 2026</p>

            <hr>

            <p class="lead">Ini adalah paragraf pembuka atau ringkasan dari berita yang sedang dibahas. Konten berita akan tampil dengan rapi di sini.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
            
            <a href="/berita" class="btn btn-secondary mt-3">&larr; Kembali ke Berita</a>
        </article>
    </div>
</div>
@endsection