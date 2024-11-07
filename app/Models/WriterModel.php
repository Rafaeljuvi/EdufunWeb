<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WriterModel extends Model
{
    protected $guarded = [
        'id',
    ];

    public function contents()
    {
        return $this->hasMany(ContentModel::class);
    }
}
