<?php
namespace Rodolfo\Leilao\Model;

class Leilao 
{
    /** @var Lance[] */
    private $lances;
    /** @var string */
    private $descricao;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
        $this->lances = [] ;
    }

    public function recebeLance(Lance $lance){
        $this->lances[] = $lance;
    }

    /** 
     * @return Lance[]
     */
    public function getLances(){
        return $this->lances;
    }
}
