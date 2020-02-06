<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    // O atributo abaixo, serve para especificar a tabela que estamos
    // querendo trabalhar no banco de dados.
    protected $table = 'contatos';

    // Este aqui é para os dados da tabela, que queremos manipular
    protected $fillable = [
        'cliente',
        'empresa',
        'email',
        'telefone',
        'vendedor',
        'validade'
    ];
}
