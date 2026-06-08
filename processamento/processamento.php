<?php 
require_once "../controller/Controlador.php";
$controlador = new Controlador();


if(isset($_POST['acao']) && $_POST['acao'] === 'cadastrarCarro')
{
    $nomeModelo = $_POST['nomeModelo']?? '';
    $fabricanteMontadora = $_POST['fabricanteMontadora']?? '';
    $anoFabricacao = $_POST['anoFabricacao']?? '';
    $preco = $_POST['preco']?? '';

    $controlador->cadastrarCarro($nomeModelo, $fabricanteMontadora, $anoFabricacao, $preco);
    header("location: ../view/visualizarCarros.php");
}
?>