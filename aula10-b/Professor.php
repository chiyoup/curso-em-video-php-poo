<?php

require_once 'Pessoa.php';

class Professor extends Pessoa {
  private $especialidade;
  private $salario;

  function Professor($especialidade, $salario) {
    $this->especialidade = $especialidade;
    $this->salario = $salario;
  }

  function receberAumento($aumento) {
    $this->salario += $aumento;
  }

  function getEspecialidade() {
    return $this->especialidade;
  }

  function setEspecialidade() {
    $this->especialidade = $especialidade;
  }

  function getSalario() {
    return $this->salario;
  }

  function setSalario() {
    $this->salario = $salario;
  }
}
