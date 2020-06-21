<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable =
    ['name', 'stack', 'description', 'github_link', 'preview_link', 'image_url', 'order'];
}
