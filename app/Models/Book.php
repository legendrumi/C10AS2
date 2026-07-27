<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = [
        'category_id',
        'author_id',
        'year_id',
        'language_id',
        'publisher_id',
        'name',
        'page_number',
        'code',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
