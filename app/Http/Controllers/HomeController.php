<?php

namespace App\Http\Controllers;

use App\Models\ContentModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $posts = ContentModel::limit(5)->get();
        return view('home', [
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('About');
    }
}
