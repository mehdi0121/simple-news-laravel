<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
    'title',
    "body",
    "slug",
    "user_id",
    "image"
    ];



    public function convertTimeToShow()
    {
        # code...

        return  Carbon::parse($this->created_at)->isoFormat('LL');
    }



    public function User()
    {
        # code...
        return $this->belongsTo(User::class);
    }



    public function Categories()
    {
        # code...
        return $this->belongsToMany(PostCategory::class,"post_postcategories", "post_id","category_id");
    }


}
