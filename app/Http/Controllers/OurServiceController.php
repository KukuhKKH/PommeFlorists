<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    public function anniversary() {
        return view('pages.our-service.anniversary');
    }

    public function birthday() {
        return view('pages.our-service.birthday');
    }

    public function graduation() {
        return view('pages.our-service.graduation');
    }

    public function weeding() {
        return view('pages.our-service.weeding');
    }
}
