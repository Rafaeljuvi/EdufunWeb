<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $guarded = [
        'id',
    ];

    public function posts()
    {
        return $this->hasMany(ContentModel::class);
    }
}
