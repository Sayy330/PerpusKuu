<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'category_id', 'stock', 'cover', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Accessor untuk status ketersediaan
    public function getStatusAttribute()
    {
        return $this->stock > 0 ? 'Tersedia' : 'Dipinjam Semua';
    }
}
