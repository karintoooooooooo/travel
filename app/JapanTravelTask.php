<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JapanTravelTask extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'hiduke',
        'meisyou',
    ];
}
