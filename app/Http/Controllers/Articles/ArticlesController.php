<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Articles;

class ArticlesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $articles = Articles::all();
        return view('index', [
            'items' => $articles
        ]);
    }


    public function show(int $id)
    {
        $item = Articles::find($id);
        Articles::where('id', $id)
            ->update([
                'view' => $item->view + 1
            ]);

        return view('show', [
            'item' => $item
        ]);
    }
}
