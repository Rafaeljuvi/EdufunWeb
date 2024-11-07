<?php

namespace App\Http\Controllers;

use App\Models\ContentModel;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(ContentModel $post)
    {
        return view('content', [
            'post' => $post
        ]);
    }

    public function popular()
    {
        $posts = ContentModel::orderBy('view_count', 'desc')->simplePaginate(3);
        return view('contents', [
            'posts' => $posts
        ]);
    }
}
