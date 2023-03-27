<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index($slug = 0) {
        if($slug != 'isla' && $slug != 'abhel'){
            return view('error', ['id'=>$slug]);
        } else if ($slug == 'isla'){
            return view('layouts.isla',['post' => Post::getBySlug($slug)]);
        } else {
            return view('layouts.abhel',['post' => Post::getBySlug($slug)]);
        }
    }
}
