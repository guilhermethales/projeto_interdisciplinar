<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'telefone', 'tipo_sangue', 'email', 'data_nasc'];

    protected $table = 'doadores';
}
