<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function jne() {
        return view('pages.pengiriman.jne');
    }

    public function jnt() {
        return view('pages.pengiriman.jnt');
    }

    public function cepat() {
        return view('pages.pengiriman.cepat');
    }
}
