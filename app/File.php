<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    protected $fillable = ['name', 'filename'];

    public function url()
    {
        return Storage::disk('public')->url($this->filename);
    }
}
