<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $fillable = ['name'];
}
