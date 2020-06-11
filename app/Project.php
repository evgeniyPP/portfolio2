<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable =
    ['name', 'stack', 'description', 'github_link', 'preview_link', 'image_url'];
}
