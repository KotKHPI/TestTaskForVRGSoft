<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['last_name', 'first_name', 'middle_name'];

    public function book() {
        return $this->hasMany('App\Models\Book');
    }

    public function books() {
        return $this->belongsToMany('App\Models\Book', 'list_of_authors');
    }
}
