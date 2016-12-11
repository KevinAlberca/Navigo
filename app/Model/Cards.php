<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $table = 'cards';

    protected $casts = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
