<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// app/Http/Controllers/PageController.php
class PageController extends Controller {
    public function about(){ return view('about'); }
    public function contact(){ return view('contact'); }
}
