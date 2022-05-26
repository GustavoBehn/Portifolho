<?php

namespace Classe;

class Pedido
{
    //Atributos
    private $codPedido;
    public $itens;
    public $quant;
    public $pag;
    public $local;

    //Métodos / funções
    public function __construct()
    {
        //Método que será invocado toda vez
        //que esta classe for instanciada
        echo "Novo objeto criado!";
        $this -> gerarDataHora();
    }

    private function gerarDataHora()
    {
        date_default_timezone_set("America/Sao_Paulo");
        echo "<br>Data e hora do pedido:<br>"; 
        echo date("d/m/y") . "<br>";
        echo date("H:i:s A"); 
    }

    public function gerarCodigo()
    {
        $this->codPedido = random_int(100, 300);
        return $this->codPedido;
    }
}