<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    protected $guarded = [
        'id',
    ];

    public function writer()
    {
        return $this->belongsTo(WriterModel::class);
    }

    public function category()
    {
        return $this->belongsTo(CategoryModel::class);
    }
}
