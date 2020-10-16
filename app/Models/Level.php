<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
    ];

    /**
     * Return the relation with users.
     *
     * @var array
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }

    public function videos()
    {
        return $this->hasManyThrough(Video::class, User::class);
    }
}
