<?php

namespace App\Http\Controllers\Articles;

use App\Contracts\ArticlesContract;
use App\Models\Articles;
use Illuminate\Contracts\View\Factory;


class ArticlesController
{

    public function index()
    {
    }

    public function reviewAdd()
    {

    }

    public function create()
    {
    }

    public function show(int $id): Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $article = Articles::find($id);
        return view('show', [
            'item' => $article
        ]);
    }

    public function update()
    {
    }

    public function delete()
    {
    }

}
