<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    public function setCoverAttribute($cover)
    {
        if (is_array($cover)) {
            $this->attributes['cover'] = json_encode($cover);
        }
    }

    public function getCoverAttribute($cover)
    {
        return json_decode($cover, true);
    }

    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
                            ->where('post_id', $this->id)
                            ->first();
    }
}
