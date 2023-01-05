<?php

namespace B;

class Produto implements CadastroInterface
{
    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public $nome = 'Impressora';
    public function __get($attr)
    {
        return $this->$attr;
    }

    public function remover()
    {
        echo 'remover';
    }
}

interface CadastroInterface
{
    public function remover();
}
