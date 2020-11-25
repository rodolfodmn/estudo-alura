<?php
namespace Rodolfo\Leilao\Model;

class Lance 
{
    /** @var Usuario */
    private $usuario;
    /** @var float */
    private $valor;

    public function __construct(Usuario $usuario, float $valor)
    {
       $this->usuario = $usuario; 
       $this->valor = $valor; 
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getValor(){
        return $this->valor;
    }
}
