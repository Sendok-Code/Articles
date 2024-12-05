<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'author_id', 'category_id', 'tag_id'];


    // Mendefinisikan relasi dengan model Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relasi dengan Tag (jika diperlukan)
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    // Relasi dengan Category (jika diperlukan)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
