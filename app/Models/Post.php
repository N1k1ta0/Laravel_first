<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false;


public function category()
{
    return $this->beLongsTo(Category::class, 'categoty_id', 'id');
}

public function tags()
{
    return $this->beLongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
}

}
