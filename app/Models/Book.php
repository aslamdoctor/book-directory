<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public function author(){
        return $this->hasOne(Author::class);
    }

    public function publisher(){
        return $this->hasOne(Publisher::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function languages(){
        return $this->belongsToMany(Language::class);
    }
}
