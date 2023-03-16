<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable =['name', 'description', 'image_filename', 'published_date'];

    public function authors() {
        return $this->belongsTo('App\Models\Author');
    }

    public function list_of_authors() {
        return $this->belongsToMany('App\Models\Author', 'list_of_authors');
    }
}
