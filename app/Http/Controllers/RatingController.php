<?php

// app/Http/Controllers/RatingController.php
namespace App\Http\Controllers;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class RatingController extends Controller {
    public function store(Request $r) {
        Rating::create([
            'user_id'=>Auth::id(),
            'rateable_id'=>$r->rateable_id,
            'rateable_type'=>$r->rateable_type,
            'rating'=>$r->rating,
            'comment'=>$r->comment
        ]);
        return back();
    }
}
