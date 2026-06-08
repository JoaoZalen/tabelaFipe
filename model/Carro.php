<?php 
class Carro {
    private $nome;
    private $fabricante;
    private $ano;
    private $preco;


    public function __construct($nome,$fabricante,$ano,$preco) 
    {
        $this->nome = $nome;
        $this->fabricante = $fabricante;
        $this->ano = $ano;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
}
?>