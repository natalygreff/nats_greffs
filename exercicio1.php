<?php


class Produto{
    
    public $nome;
    public $preco;
    public $quantidade;
    
    public function exibirInformacoes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: " . $this->preco . "<br>";
        echo "Quantidade: " . $this->quantidade . "<br>";
    }
}


$produto1 = new Produto();
$produto1->nome = "Jaqueta";
$produto1->preco = 120.80;
$produto1->quantidade = 10;

$produto1->exibirInformacoes();

?>