<?php 

class pedidoRestaurante{
    private $valorTotal;
    private $taxaServiço; //10%
    private $numeroPessoas;

    public function __construct($valorTotal, $numeroPessoas){
        $this->valorTotal = $valorTotal;
        $this->taxaServiço = 0.10; // 10%
        $this->numeroPessoas = $numeroPessoas;
    }

    public function adicionarCouvert($valor){
        $this->valorTotal += $valor;
    }

    public function  calcularTaxaServico(){
        return $this->valorTotal * $this->taxaServiço;
    }

    public function totalComTaxas(){
        return $this->valorTotal + $this->calcularTaxaServico();
    }

    public function dividirConta(){
        $totalComTaxas = $this->totalComTaxas();
        return $totalComTaxas / $this->numeroPessoas;
    }

    public function exibirConta(){
        $taxaServico = $this->calcularTaxaServico();
        $totalComTaxas = $this->totalComTaxas();
        $valorPorPessoa = $this->dividirConta();

        return "Valor Total: R$ " . number_format($this->valorTotal, 2) . "\n" .
               "Taxa de Serviço (10%): R$ " . number_format($taxaServico, 2) . "\n" .
               "Total com Taxas: R$ " . number_format($totalComTaxas, 2) . "\n" .
               "Valor por Pessoa: R$ " . number_format($valorPorPessoa, 2);
    }

}