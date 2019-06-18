<?php

namespace DaleLogistica;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    protected $table    = 'tipos';
    protected $fillable = ['name'];
    protected $guarded  = ['id'];
}
