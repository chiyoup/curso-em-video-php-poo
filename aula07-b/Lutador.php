<?php

class Lutador {
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  function apresentar() {
    echo "<p>-------------------------------------</p>";
    echo "<p>CHEGOOOU A HOOORA! O lutador {$this->getNome()},
    veio diretamente do(a) {$this->getNacionalidade()}, tem {$this->getIdade()} anos,
    e pesa {$this->getPeso()} kg. Ele tem {$this->getVitorias()} vitórias, {$this->getDerrotas()},
    derrotas e, {$this->getEmpates()} empates.</p>";
  }

  function status() {
    echo "<p>-------------------------------------</p>";
    echo "<p><pre>
    Nome: {$this->getNome()}
    Categoria: {$this->getCategoria()}
    Vitórias: {$this->getVitorias()}
    Derrotas: {$this->getDerrotas()}
    Empates: {$this->getEmpates()}</pre></p>";
  }

  function ganharLuta() {
    $this->setVitorias($this->getVitorias() + 1);
  }

  function perderLuta() {
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  function empatarLuta() {
    $this->setEmpates($this->getEmpates() + 1);
  }

  public function Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
      $this->nome = $nome;
      $this->nacionalidade = $nacionalidade;
      $this->idade = $idade;
      $this->altura = $altura;
      $this->setPeso($peso);
      $this->vitorias = $vitorias;
      $this->derrotas = $derrotas;
      $this->empates = $empates;
  }

  function getNome() {
    return $this->nome;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }

  function getNacionalidade() {
    return $this->nacionalidade;
  }

  function setNacionalidade($nacionalidade) {
    $this->nacionalidade = $nacionalidade;
  }

  function getIdade() {
    return $this->idade;
  }

  function setIdade($idade) {
    $this->idade = $idade;
  }

  function getAltura() {
    return $this->altura;
  }

  function setAltura($altura) {
    $this->altura = $altura;
  }

  function getPeso() {
    return $this->peso;
  }

  function setPeso($peso) {
    $this->peso = $peso;
    $this->setCategoria();
  }

  function getCategoria() {
    return $this->categoria;
  }

  private function setCategoria() {
    if ($this->peso < 52.2) {
        $this->categoria = "Inválido";
    } elseif ($this->peso <= 70.3) {
        $this->categoria = "Leve";
    } elseif ($this->peso <= 83.9) {
        $this->categoria = "Médio";
    } elseif ($this->peso <= 120.2) {
        $this->categoria = "Pesado";
    } else {
        $this->categoria = "Inválido";
    }
  }

  function getVitorias() {
    return $this->vitorias;
  }

  function setVitorias($vitorias) {
    $this->vitorias = $vitorias;
  }

  function getDerrotas() {
    return $this->derrotas;
  }

  function setDerrotas($derrotas) {
    $this->derrotas = $derrotas;
  }

  function getEmpates() {
    return $this->empates;
  }

  function setEmpates($empates) {
    $this->empates = $empates;
  }
}
