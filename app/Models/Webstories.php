<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Webstories extends Model
{
    use HasFactory;

    public function webstoryCategory(): HasOne
    {
        return $this->hasOne(WebstoriesCategory::class, 'id', 'cat_id');
    }
}
