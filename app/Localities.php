<?php

namespace DaleLogistica;

use Illuminate\Database\Eloquent\Model;

class Localities extends Model
{
    protected $table    = 'localities';
    protected $fillable = ['id_zone','name','distance'];
    protected $guarded  = ['id'];
}
