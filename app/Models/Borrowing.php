<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;


class Borrowing extends Model
{
     protected $fillable = ['student_id', 'book_id', 'borrow_date', 'return_date', 'status'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
