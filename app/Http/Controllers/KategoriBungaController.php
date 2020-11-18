<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBungaController extends Controller
{
    public function head_bucket() {
        return view('pages.kategori-bunga.head_bucket');
    }

    public function bunga_meja() {
        return view('pages.kategori-bunga.bunga_meja');
    }

    public function bunga_kering() {
        return view('pages.kategori-bunga.bunga_kering');
    }

    public function bunga_papan() {
        return view('pages.kategori-bunga.bunga_papan');
    }
}
