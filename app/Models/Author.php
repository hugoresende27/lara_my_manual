<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = ['laravel_through_key', 'updated_at'];

    public function book()
    {
        return $this->hasManyThrough(
            '\App\Models\Book',
            '\App\Models\BookAuthor',
            'book_id',
            'id',
            'id',
            'author_id'
        );
    }
}
