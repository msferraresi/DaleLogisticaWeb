<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    protected $table    = 'zones';
    protected $fillable = ['name'];
    protected $guarded  = ['id'];
}
