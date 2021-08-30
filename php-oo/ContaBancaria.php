<?php

    declare(strict_types=1);

    class ContaBancaria
    {
        /**
         * @var string
         */
        private $banco;

        /**
         * @var string
         */
        private $nomeTitular;

        /**
         * @var string
         */
        private $numeroAgencia;

        /**
         * @var string
         */
        private $numeroConta;

        /**
         * @var float
         */
        private $saldo;

        public function __construct(
            string $banco, 
            string $nomeTitular, 
            string $numeroAgencia, 
            string $numeroConta, 
            float $saldo
        ) {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroAgencia = $numeroAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }

        public function obterSaldo(): string
        {
            return 'Seu saldo atual é: R$' . $this->saldo;
        }

        public function depositar(float $valor): string
        {
            $this->saldo += $valor;
            return 'Depósito de R$ ' . $valor . ' realizado!';
        }

        public function sacar(float $valor): string
        {
            $this->saldo -= $valor;
            return 'Saque de R$ ' . $valor . ' realizado!';
        }

    }

    $conta1 = new ContaBancaria(
        'Banco do Brasil', // banco
        'Leandro Dutra Silva', // nomeTitular
        '2219-5', // numeroAgencia
        '42534-6', // numeroConta
        100.00 // saldo
    );

    var_dump($conta1);

    /*
    $conta2 = new ContaBancaria(
        'Caixa Economica Federal', // banco
        'Leandro Dutra Silva', // nomeTitular
        '0804', // numeroAgencia
        '776798425-8', // numeroConta
        300.00 // saldo
    );

    var_dump($conta2);

    /*
    echo $conta->obterSaldo(); // 0
    
    echo PHP_EOL;

    echo $conta->depositar(300.00);

    echo PHP_EOL;

    echo $conta->obterSaldo(); // 300

    echo PHP_EOL;

    echo $conta->sacar(150.00);

    echo PHP_EOL;

    echo $conta->obterSaldo(); // 150
    */
