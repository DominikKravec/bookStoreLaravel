<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model{
    
    protected $fillable = ['title', 'price', 'storedAmount', 'author_id', 'genre'];
    
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public function author(){
        return $this->belongsTo(Author::class);
    }

}
