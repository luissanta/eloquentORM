<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->morpheByMany(Post::class, 'taggable');
    }

    public function videos()
    {
        return $this->morpheByMany(Video::class, 'taggable');
    }
}
