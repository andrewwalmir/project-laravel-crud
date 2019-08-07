<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    protected $table = 'propriedades';

    protected $fillable = ['titulo', 'url', 'descricao', 'preco_aluguel', 'preco_compra'];

    public $timestamps = false;

}
