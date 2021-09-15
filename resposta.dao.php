<?php

include_once 'dao.php';

  class respostasDAO extends DAO {
    function __construct () {
        $this->prepararBanco();
    }

    function cadastrar($nome, $telefone) {
      
      $preparacao = $this->conexao->prepare("INSERT INTO resposta(nome, telefone) VALUES(?, ?)");

      $preparacao->bindParam(1, $nome);
      $preparacao->bindParam(2, $telefone);

      $resultado = null;
       return null;

    }

  }