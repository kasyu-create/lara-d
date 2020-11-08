<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $fillable = [
        'tags_id',
        'image_file',
        'name',
        'career',
    ];
}
