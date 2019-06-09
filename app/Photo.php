<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
