<?php 
include_once ('../model/banco.php');
include_once ('../model/Carro.php');

class Controlador {
    private $banco;

    public function __construct() {
        $this->banco = new Banco();
    }

    public function cadastrarCarro($nomeModelo, $fabricanteMontadora, $anoFabricacao, $preco)
    {
        $carro = new Carro($nomeModelo, $fabricanteMontadora, $anoFabricacao, $preco);
         $this->banco->cadastroCarro($carro);
    }

    public function RetornarCarros()
    {
        $carros = $this->banco->TodosCarros();

        $cards = "";

        while($carro = mysqli_fetch_assoc($carros))
            {
                $cards .= "
            <tr>
            <td>". $carro['id'] ."</td>
            <td>". $carro['nomeModelo'] ."</td>
            <td>". $carro['fabricanteMontadora'] ."</td>
            <td>". $carro['anoFabricacao'] ."</td>
            <td>R$". $carro['preco'] ."</td>
            </tr>";
            }
        return $cards;
    }
}
?>