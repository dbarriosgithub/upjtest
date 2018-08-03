<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = ['firstname','lastname','email','address','celphone'];
}
