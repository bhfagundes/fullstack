<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagiarios extends Model
{
    protected $fillable=['nome','email','telefone','data_nascimento'];
}
