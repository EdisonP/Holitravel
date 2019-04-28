<?php

namespace Holitravel;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alpha2', 'alpha3', 'langEN'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'code'
    ];
}
