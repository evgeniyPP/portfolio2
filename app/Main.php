<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    public $timestamps = false;

    protected $fillable =
    ['name', 'type', 'text'];
}
