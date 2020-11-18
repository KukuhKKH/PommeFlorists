<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tentang_perusahaan() {
        return view('pages.profile.tentang_perusahaan');
    }

    public function visi() {
        return view('pages.profile.visi');
    }

    public function misi() {
        return view('pages.profile.misi');
    }
}
