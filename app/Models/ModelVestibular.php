<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVestibular extends Model
{
   protected $table='vestibular';
   protected $fillable=['inst', 'site', 'ano', 'mat', 'gram', 'lit', 'texto', 'bio','quim', 'fis', 'hist', 'geo', 'socio', 'ing'];
}
