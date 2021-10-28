<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $fillable = ['modelo','placa','obs','id_morador'];
}
