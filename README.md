Aqui está o seu **README refeito, melhorado e pronto para GitHub em FULL Markdown**, com cara de projeto profissional:

---

```markdown
# 📦 Projeto de Programação Orientada a Objetos em PHP

Este projeto contém a implementação de diversas classes em **PHP utilizando Programação Orientada a Objetos (POO)**, simulando situações reais como:

- Locação de veículos
- Pedidos em restaurante
- Sistema de login
- Clube de fidelidade
- Desempenho de vendas
- Consumo de energia elétrica

O objetivo do projeto é praticar **encapsulamento, regras de negócio, cálculos e organização de código orientado a objetos**.

---

# 📁 Estrutura do Projeto

```

poo-projeto/
│
├── index.php
├── classes/
│   ├── LocadoraVeiculo.php
│   ├── PedidoRestaurante.php
│   ├── SistemaLogin.php
│   ├── ClubeFidelidade.php
│   ├── DesempenhoVendas.php
│   └── MonitorEnergia.php
│
└── README.md

````

---

# 📚 Classes Implementadas

---

## 🚗 Classe `LocadoraVeiculo` – Aluguel e KM Rodado

### 🎯 Objetivo
Calcular o custo de locação com base nas diárias e na quilometragem excedente.

### 📥 Atributos
- Modelo do carro
- Valor da diária
- KM inicial
- KM final

### ⚙️ Métodos

| Método | Descrição |
|-------|-----------|
| `calcularDias($quantidade)` | Retorna o valor base (diárias × valor da diária) |
| `calcularKmRodado()` | Retorna o total de KM percorrido |
| `calcularCustoExtra($limiteGratis, $valorPorKm)` | Calcula custo adicional por KM excedente |
| `gerarFatura()` | Exibe resumo completo da locação |

### 🧾 Fatura exibida
- Modelo do veículo
- Total de dias
- KM rodados
- Valor total

---

## 🍔 Classe `PedidoRestaurante` – Conta e Divisão

### 🎯 Objetivo
Gerenciar consumo, taxas e divisão da conta.

### 📥 Atributos
- Valor total do consumo
- Taxa de serviço (10%)
- Número de pessoas

### ⚙️ Métodos

| Método | Descrição |
|-------|-----------|
| `adicionarCouvert($valor)` | Adiciona valor fixo ao consumo |
| `calcularTaxaServico()` | Calcula 10% sobre o consumo |
| `totalComTaxas()` | Soma consumo + taxa + couvert |
| `dividirConta()` | Retorna valor por pessoa |
| `exibirConta()` | Mostra detalhamento completo |

---

## 🔐 Classe `SistemaLogin` – Validação de Acesso

### 🎯 Objetivo
Simular autenticação com controle de tentativas.

### 📥 Atributos
- Usuário cadastrado
- Senha cadastrada
- Tentativas de login

### ⚙️ Métodos

| Método | Descrição |
|-------|-----------|
| `validarSenha($senhaInformada)` | Retorna true ou false |
| `verificarBloqueio()` | Bloqueia após 3 tentativas |
| `exibirStatus($usuario, $senha)` | Retorna status do login |

### 🔒 Possíveis retornos
- Autorizado
- Senha incorreta
- Usuário não encontrado
- Usuário bloqueado

---

## 🎁 Classe `ClubeFidelidade` – Pontos e Resgates

### 🎯 Objetivo
Gerenciar pontos acumulados e resgates.

### 📥 Atributos
- Nome do cliente
- Saldo de pontos
- Valor da compra

### ⚙️ Métodos

| Método | Descrição |
|-------|-----------|
| `converterParaPontos()` | R$10 = 1 ponto |
| `verificarResgate($custoBrinde)` | Verifica se há pontos suficientes |
| `aplicarResgate($custoBrinde)` | Subtrai pontos |
| `extrato()` | Exibe saldo e equivalente em reais |

> 1 ponto = R$ 0,50

---

## 💰 Classe `DesempenhoVendas` – Comissão e Metas

### 🎯 Objetivo
Calcular salário final com base em vendas.

### 📥 Atributos
- Nome do vendedor
- Salário base
- Total de vendas

### ⚙️ Métodos

| Método | Descrição |
|-------|-----------|
| `calcularComissao()` | 5% sobre vendas |
| `verificarMeta($meta)` | Bônus de R$ 500 |
| `getSalarioFinal($meta)` | Salário + comissão + bônus |
| `exibirContraCheque()` | Exibe resumo financeiro |

---

## ⚡ Classe `MonitorEnergia` – Consumo de Energia

### 🎯 Objetivo
Calcular valor da conta de luz com base no consumo e bandeira tarifária.

### 📥 Atributos
- Leitura anterior (kWh)
- Leitura atual (kWh)
- Bandeira tarifária

### ⚙️ Métodos

| Método | Descrição |
|-------|-----------|
| `calcularConsumo()` | Diferença entre leituras |
| `definirTarifa()` | Define valor por kWh |
| `calcularValorTotal()` | Consumo × tarifa |
| `exibirFatura()` | Exibe conta detalhada |

### 💡 Tarifas

| Bandeira | Valor |
|---------|------|
| Verde | R$ 0,50 |
| Amarela | R$ 0,65 |
| Vermelha | R$ 0,80 |

---

# 🧠 Conceitos Aplicados

Este projeto trabalha os seguintes conceitos:

- Programação Orientada a Objetos (POO)
- Encapsulamento
- Atributos privados
- Métodos públicos
- Regras de negócio
- Estruturas condicionais (`if`, `switch`)
- Cálculos financeiros
- Organização de código
- Separação de responsabilidades

---

# ▶️ Como Executar

## Usando servidor embutido do PHP

No terminal, dentro da pasta do projeto:

```bash
php -S localhost:8000
````

Depois acesse no navegador:

```
http://localhost:8000
```

---

# 🎯 Objetivo do Projeto

O objetivo deste projeto é simular **situações reais usando POO em PHP**, como:

* Sistema de locadora
* Sistema de restaurante
* Sistema de login
* Sistema de fidelidade
* Sistema de vendas
* Sistema de energia elétrica

Este projeto serve como **treinamento prático de POO para desenvolvimento de sistemas**.

---

# 🚀 Possíveis Melhorias

* [ ] Interface gráfica com CSS
* [ ] Integração com banco de dados MySQL
* [ ] Sistema de login real com sessão
* [ ] Relatórios em PDF
* [ ] Dashboard administrativo
* [ ] API para integração com outros sistemas

---

# 👨‍💻 Autor

Projeto desenvolvido para estudo de:

* PHP
* Programação Orientada a Objetos
* Lógica de programação
* Desenvolvimento de sistemas

---

# 📜 Licença

Este projeto é livre para uso educacional e aprendizado.

```

---

Se você colocar todos seus projetos no GitHub, você já vai ter tipo um portfólio com:

- Jo-Ken-Pô
- Gerador de Rifas
- Sistema Escolar
- Exercícios POO
- Projeto POO (classes reais)

Isso já parece **portfólio de estudante de programação** mesmo.
```
