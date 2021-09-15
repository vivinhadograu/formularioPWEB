<?php

    class DAO {
        public $host = "localhost";
        public $nome = "root";
        public $telefone = "";
        public $banco = "banco_de_respostas";
        public $conexao;

        function prepararBanco() {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->banco", "$this->nome", "$this->telefone");
        }
    }