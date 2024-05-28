<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class produto extends Model
{
    use HasFactory;

    // use Searchable; (algolia)
    protected $fillable = [

        'nome',
        'preco'
    ];
}
