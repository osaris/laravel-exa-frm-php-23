<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    var $fillable = ['reference', 'quantity', 'nota'];

    protected $attributes = [
        'quantity' => 0,
    ];

    public function isDeletable()
    {
        return $this->quantity == 0;
    }

    public static function getStock() : int
    {
        return Article::sum('quantity');
    }
}
