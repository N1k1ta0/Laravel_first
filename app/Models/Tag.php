<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

public function post()
{
    return $this->beLongsToMany(Posts::class, 'post_tags', 'tag_id', 'post_id');
}
}
