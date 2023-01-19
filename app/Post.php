<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['description'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
