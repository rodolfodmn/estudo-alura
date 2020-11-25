<?php
namespace Alura/Leilao/Model;

class Usuario
{

    /** @var string */
    private $name;

    public function __construct($name)
    {
       $this->name = $name; 
    }

    public function getName(){
        return $this->name;
    }
} 
