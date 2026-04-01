<?php

class locadoraVeiculo{

    private $modelo;
    private $valorDiaria;
    private $kmInicial;
    private $kmFinal;

    public function __construct($modelo, $valorDiaria, $kmInicial, $kmFinal){
        $this->modelo = $modelo;
        $this->valorDiaria = $valorDiaria;
        $this->kmInicial = $kmInicial;
        $this->kmFinal = $kmFinal;
    }

    public function calcularDias($quantidade){
        return $quantidade * $this->valorDiaria;
    }

    public function calcularKmRodados(){
        return $this->kmFinal - $this->kmInicial;
    }

    public function calcularCustoExtra ($limiteKm, $valorPorKm){   
        $kmRodados = $this->calcularKmRodados();
        if ($kmRodados > $limiteKm) {
            $kmExcedentes = $kmRodados - $limiteKm;
            return $kmExcedentes * $valorPorKm;
        } else {
            return 0;
        }
    }

    public function gerarFatura (){
        $diasAlugados = $this->calcularDias(1); // Supondo que o cliente alugou por 1 dia
        $custoExtra = $this->calcularCustoExtra(100, 0.50); // Supondo um limite de 100 km e custo extra de R$ 0,50 por km
        $total = $diasAlugados + $custoExtra;
        return "Fatura: \nModelo: $this->modelo\nDias Alugados: 1\nCusto Extra: R$ $custoExtra\nTotal a Pagar: R$ $total";
        }



}