<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoradoresModel extends Model
{
    protected $fillable =['nome', 'sobrenome','endereco','complemento'];
}
