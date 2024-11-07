<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(CategoryModel $category)
    {
        $posts = ContentModel::where('category_id', $category->id)->get();
        return view('category.index', [
            'category' => $category,
            'posts' => $posts
        ]);
    }
}
