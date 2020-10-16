<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instagram', 
        'github', 
        'web',
    ];

    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
