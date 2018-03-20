<?php

namespace App\vendas;

class Produto
{
    public $id, $descricao;

    public function cadastrar($id, $descricao)
    {
        $this->id = $id;
        $this->descricao = $descricao;
    }

    public function imprimir()
    {
        $r = 'Produto id:' . $this->id . ' | ';
        $r .= 'Descricao: ' . $this->descricao . '<br>';

        return $r;
    }
}