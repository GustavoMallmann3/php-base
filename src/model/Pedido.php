<?php 

namespace Model;

class Pedido 
{    
    //Atributos
    private $codPedido;
    public $itens;
    public $pgto;
    public $qtde;
    public $entrega;

    //Métodos
    public function __construct()
    {
        //Executará assim que um novo objeto dessa classe for criado 
        echo "Novo objeto criado!";

    }

    public function gerarCodigo()
    {
        $this->codPedido = random_int(100, 300);
        return $this->codPedido;
    }

    public function darDesconto()
    {
        if($this->qtde >=  5 && $this->entrega == "Viamão") {
            return "<h1 style='backgroud-color: green; color: white'> 10% off </h1>";
        }
    }

}
