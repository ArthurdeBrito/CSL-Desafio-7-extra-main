<?php

class ClubeFidelidade {
    
    private $nome;
    private $pontos;
    private $valor;

    public function __construct($nome, $pontos, $valor) {
        $this->nome = $nome;
        $this->pontos = $pontos;
        $this->valor = $valor;
    }

    public function converterParaPontos() {
        return $this->valor * 10; // Supondo que cada real gasto vale 10 pontos
    }

    public function  verificarResgate($custoBrinde) {
        if ($this->pontos >= $custoBrinde) {
            return "Parabéns, $this->nome! Você pode resgatar o brinde.";
        } else {
            return "Desculpe, $this->nome. Você precisa de mais " . ($custoBrinde - $this->pontos) . " pontos para resgatar o brinde.";
        }
    }

    public function  aplicarResgate($custoBrinde) {
        if ($this->pontos >= $custoBrinde) {
            $this->pontos -= $custoBrinde;
            return "Resgate aplicado com sucesso! Pontos restantes: $this->pontos.";
        } else {
            return "Não foi possível aplicar o resgate. Pontos insuficientes.";
        }
    }

    public function extrato() {
        return "Clube de Fidelidade - $this->nome\nPontos: $this->pontos\nValor Gasto: R$ " . number_format($this->valor, 2);
    }
}