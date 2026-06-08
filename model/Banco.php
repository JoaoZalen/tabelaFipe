<?php 
include_once ('../model/Carro.php');

class Banco {
    private $Host;
    private $Login;
    private $Senha;
    private $DataBase;


    public function __construct() 
    {
     $this->Host = "localhost";
     $this->Login = "root";   
     $this->Senha = "";
     $this->DataBase = "fipe";
    }

    public function ConectarBd()
    {
        $conexao = mysqli_connect($this->Host, $this->Login, $this->Senha, $this->DataBase);
        return $conexao;
    }

    public function TodosCarros()
    {
        $conexao = $this->ConectarBd();
        $consulta = "SELECT * FROM carros";
        $resultado = mysqli_query($conexao, $consulta);
        if(mysqli_num_rows($resultado) > 0)
        {
            return $resultado;
        }
    }

    public function cadastroCarro($carro)
    {
        $conexao = $this->ConectarBd();
        $consulta = "insert into carros (nomeModelo,fabricanteMontadora,anoFabricacao,preco) 
                    values ('".$carro->getNome()."',                       
                    '".$carro->getFabricante()."',
                    '".$carro->getAno()."',
                    '".$carro->getPreco()."')";
        $resultado = mysqli_query($conexao, $consulta);
    }
    

}
?>