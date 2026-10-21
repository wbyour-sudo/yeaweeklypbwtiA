<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::all()
        ]);
    }

    public function show($slug)
    {
        return view('beritatunggal', [
            "title" => "Detail Berita",
            "berita" => Berita::where('slug', $slug)->firstOrFail()
        ]);
    }
}