<?php

class monitorEnergia{

 private $leituraAnterior; // Em kWh
 private $leituraAtual;// Em kWh
 private $corBandeira; // Verde, Amarela, Vermelha

    public function __construct($leituraAnterior, $leituraAtual, $corBandeira){
        $this->leituraAnterior = $leituraAnterior;
        $this->leituraAtual = $leituraAtual;
        $this->corBandeira = $corBandeira;
    }

    public function calcularConsumo(){
        return $this->leituraAtual - $this->leituraAnterior;
    }

    public function definirTarifa(){
        $consumo = $this->calcularConsumo();
        $tarifaBase = 0.50; // Tarifa base por kWh

        switch ($this->corBandeira) {
            case 'Verde':
                return $consumo * $tarifaBase;
            case 'Amarela':
                return $consumo * ($tarifaBase + 0.10); // Aumento de R$ 0,10 por kWh
            case 'Vermelha':
                return $consumo * ($tarifaBase + 0.20); // Aumento de R$ 0,20 por kWh
            default:
                return "Cor da bandeira inválida.";
        }
    }

    public function calcularValorTotal(){
        $tarifa = $this->definirTarifa();
        return "Valor total a pagar: R$ " . number_format($tarifa, 2);
    }

    public function exibirFatura(){
        $consumo = $this->calcularConsumo();
        $valorTotal = $this->calcularValorTotal();
        return "Leitura Anterior: $this->leituraAnterior kWh\n" .
               "Leitura Atual: $this->leituraAtual kWh\n" .
               "Consumo: $consumo kWh\n" .
               "Bandeira: $this->corBandeira\n" .
               "$valorTotal";
    }

}