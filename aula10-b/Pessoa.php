<?php
class Pessoa {
  private $nome;
  private $idade;
  private $sexo;

  function Pessoa($nome, $idade, $sexo) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
  }

  function fazerAniversario() {
    $this->idade ++;
  }

  function getNome() {
    return $this->nome;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }

  function getIdade() {
    return $this->idade;
  }

  function setIdade($idade) {
    $this->idade = $idade;
  }

  function getSexo() {
    return $this->sexo;
  }

  function setSexo($sexo) {
    $this->sexo = $sexo;
  }
}
