<?php

namespace A;

class Produto implements \B\CadastroInterface
{
    public $nome = 'Notebook';

    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function salvar()
    {
        echo 'Salvar';
    }

    public function remover()
    {
        echo 'remover';
    }
}

interface CadastroInterface
{
    public function salvar();
}

namespace B;

class Produto implements \A\CadastroInterface
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
    
    public function salvar()
    {
        echo 'Salvar';
    }

}

interface CadastroInterface
{
    public function remover();
}


//--------------------


$c = new \A\Produto();
print_r($c);
echo $c->__get('nome');
echo '<br>';
$c = new \B\Produto();
print_r($c);
echo $c->__get('nome');
