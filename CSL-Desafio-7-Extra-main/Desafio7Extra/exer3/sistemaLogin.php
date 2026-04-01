<?php

class sistemaLogin {

    private $usuario;
    private $senha;
    private $numeroTentativas;

    public function __construct($usuario, $senha) {
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->numeroTentativas = 0;
    }

    public function validarSenha($senha) {
        return $this->senha === $senha;
    }

    public function verificarBloqueio() {
        return $this->numeroTentativas >= 3;
    }

    public function exibirStatus($usuario, $senha) {
        if ($this->verificarBloqueio()) {
            return "Usuário bloqueado devido a múltiplas tentativas de login falhadas.";
        }

        if ($this->validarSenha($senha)) {
            $this->numeroTentativas = 0; // Resetar tentativas após login bem-sucedido
            return "Login bem-sucedido. Bem-vindo, $usuario!";
        } else {
            $this->numeroTentativas++;
            return "Senha incorreta. Tentativa $this->numeroTentativas de 3.";
        }
    }

}