<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Articles;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Articles::all();
        return view('index', [
            'items' => $articles
        ]);
    }

}
