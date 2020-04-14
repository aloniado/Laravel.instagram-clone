<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];    //do not guard, we are guarding with validation

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
