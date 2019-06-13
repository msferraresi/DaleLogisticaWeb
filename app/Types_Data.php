<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types_Data extends Model
{
    protected $table    = 'types_data';
    protected $fillable = ['name'];
    protected $guarded  = ['id'];
}
