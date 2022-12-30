<?php

interface EquipamentoEletronicoInterface
{
    public function ligar();
    public function desligar();
}

class Geladeira implements EquipamentoEletronicoInterface{
    public function abrirPorta()
    {
        echo 'Abrir a porta';
    }

    public function ligar(){
        echo 'Ligar';
    }

    public function desligar(){
        echo 'Desligar';
    }

}

class TV implements EquipamentoEletronicoInterface
{
    public function trocarCanal()
    {
        echo 'Trocar canal';
    }

    public function ligar(){
        echo 'Ligar';
    }

    public function desligar(){
        echo 'Desligar';
    }

}

$x = new Geladeira();
$y = new TV();

interface MamiferoInterface{
    public function respirar();
}

interface TerrestreInterface{
    public function andar();
}

interface AquaticoInterface{
    public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface{

    public function respirar(){
        echo 'respirar';
    }

    public function andar(){
        echo 'andar';
    }

    public function conversar(){
        echo 'conversar';
    }

}

class Baleia implements MamiferoInterface, AquaticoInterface{

    public function respirar(){
        echo 'respirar';
    }

    public function nadar(){
        echo 'nadar';
    }

    public function esguichar(){
        echo 'esguichar';
    }

}

interface AnimalInterface{
    public function comer();
}

interface AveInterface extends AnimalInterface {
    public function voar();
}

class Papagaio implements AveInterface{
   
    public function voar(){
        echo 'Voar';
    }

    public function comer(){
        echo 'Comer';
    }

}