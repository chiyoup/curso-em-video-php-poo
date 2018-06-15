<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {
  private $matricula;
  private $curso;

  function Aluno($curso) {
    $this->matricula = true;
    $this->curso = $curso;
  }

  function cancelarMatricula() {
    $this->matricula = false;
    $this->curso = null;
    echo "Matricula cancelada";
  }

  function getMatricula() {
    return $this->matricula;
  }

  function setMatricula() {
    $this->matricula = $matricula;
  }

  function getCurso() {
    return $this->curso;
  }

  function setCurso() {
    $this->curso = $curso;
  }
}
