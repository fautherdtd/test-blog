<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public $table = 'articles';
    public $fillable = [
        'title',
        'body',
        'view'
    ];
}
