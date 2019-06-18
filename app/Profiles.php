<?php

namespace DaleLogistica;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $table    = 'profiles';
    protected $fillable = ['name'];
    protected $guarded  = ['id'];

}
