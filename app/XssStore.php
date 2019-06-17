<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XssStore extends Model
{
    protected $table = "store";

    protected $fillable = [
        'xss'
    ];
}
