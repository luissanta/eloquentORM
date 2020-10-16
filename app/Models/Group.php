<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
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
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
