<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = "blogs";

    public function user(): HasOne
    {
        return $this->hasOne(BlogCategoryModel::class, 'cat_id', 'cat_id');
    }
}
