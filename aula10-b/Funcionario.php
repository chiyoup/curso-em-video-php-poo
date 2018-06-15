<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {
  private $setor;
  private $trabalhando;

  function Funcionario($setor) {
    $this->trabalhando = true;
    $this->setor = $setor;
  }

  function mudarTrabalho() {
    $this->trabalhando = ! $this->trabalhando;
  }

  function getSetor() {
    return $this->setor;
  }

  function setSetor() {
    $this->setor = $setor;
  }

  function getTrabalhando(){
    return $this->trabalhando;
  }

  function setTrabalhando() {
    $this->trabalhando = $trabalhando;
  }
}
