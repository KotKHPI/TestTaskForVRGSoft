<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable =['name', 'description', 'image_filename', 'published_date'];

    public function author() {
        return $this->belongsTo('App\Models\Author');
        return $this->belongsToMany('App\Models\ListOfAuthors');
    }
}
