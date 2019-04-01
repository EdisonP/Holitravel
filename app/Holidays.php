<?php

namespace Holitravel;

use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DateOfFlight', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'toDest', 'fromDest', 'child', 'adult', 'elderly'
    ];
}
