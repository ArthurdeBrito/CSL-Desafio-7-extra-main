<?php

class DesempenhoVendas {
    
    private $nomeVendedor;
    private $salarioBase;
    private $valorVendas;

    public function __construct($nomeVendedor, $salarioBase, $valorVendas) {
        $this->nomeVendedor = $nomeVendedor;
        $this->salarioBase = $salarioBase;
        $this->valorVendas = $valorVendas;
    }

    public function calcularComissao() {
        return $this->valorVendas * 0.05; // Supondo que a comissão é de 5% sobre o valor das vendas
    }

    public function verificarMeta($meta) {
        if ($this->valorVendas >= $meta) {
            return "Parabéns, $this->nomeVendedor! Você atingiu a meta de vendas.";
        } else {
            return "Desculpe, $this->nomeVendedor. Você precisa vender mais R$ " . ($meta - $this->valorVendas) . " para atingir a meta.";
        }
    }

    public function getSalarioFinal($meta) {
        $comissao = $this->calcularComissao();
        $salarioFinal = $this->salarioBase + $comissao;

        if ($this->valorVendas >= $meta) {
            $salarioFinal += 500; // Bônus de R$ 500 por atingir a meta
        }

        return "Salário Final de $this->nomeVendedor: R$ " . number_format($salarioFinal, 2);
    }

    public function exibirContraCheque() {
        $comissao = $this->calcularComissao();
        return "Contra-Cheque - $this->nomeVendedor\nSalário Base: R$ " . number_format($this->salarioBase, 2) . "\nValor das Vendas: R$ " . number_format($this->valorVendas, 2) . "\nComissão: R$ " . number_format($comissao, 2) . "\n" . $this->getSalarioFinal(10000); // Supondo uma meta de R$ 10.000
    }

}