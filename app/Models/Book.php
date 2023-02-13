<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    protected  $fillable=[
        'title','desc','img'
    ];

    //book belongs to many categories

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
