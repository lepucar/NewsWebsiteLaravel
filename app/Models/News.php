<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'summary', 'description', 'meta_description', 'image', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
