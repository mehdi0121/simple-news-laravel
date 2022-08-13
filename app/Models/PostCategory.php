<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;






    public function Posts()
    {
        return $this->belongsToMany(Post::class,"post_postcategories","category_id","post_id");
    }
}
