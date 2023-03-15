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
        return $this->belongsToMany('App\Models\ListOfAuthors');
    }
}
