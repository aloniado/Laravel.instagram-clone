<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];    //disabling guards

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/KHAYPRzUCQ3FaJV1oGttu5HmGR7s9bjrvmULnEvj.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
