<?php

namespace App\Http\Controllers;

use App\Models\WriterModel;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $authors = WriterModel::all();
        return view('writer', [
            'writer' => $authors
        ]);
    }

    public function show(WriterModel $author)
    {
        $posts = $author->posts()->get();
        return view('writer', [
            'writer' => $author,
            'content' => $posts
        ]);
    }
}
