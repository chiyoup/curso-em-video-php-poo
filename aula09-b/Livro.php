<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
  private $titulo;
  private $autor;
  private $qtdPaginas;
  private $pgAtual;
  private $aberto;
  private $leitor;

  function Livro($titulo, $autor, $qtdPaginas, $leitor) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->qtdPaginas = $qtdPaginas;
    $this->pgAtual = 0;
    $this->aberto = false;
    $this->leitor = $leitor;
  }

  public function detalhes() {
    echo "<p>Livro: {$this->titulo}
    <br>Autor: {$this->autor}
    <br>Paginas: {$this->qtdPaginas}
    <br>Pagina Atual: {$this->pgAtual}
    <br>Sendo lido por: {$this->leitor->getNome()}</p>";
  }

  function getTitulo() {
    return $this->titulo;
  }

  function setTitulo() {
    $this->titulo = $titulo;
  }

  function getAutor() {
    return $this->autor;
  }

  function setAutor() {
    $this->autor = $autor;
  }

  function getQtdPaginas() {
    return $this->qtdPaginas;
  }

  function setQtdPaginas() {
    $this->qtdPaginas = $qtdPaginas;
  }

  function getPgAtual() {
    return $this->pgAtual;
  }

  function setPgAtual() {
    $this->pgAtual = $pgAtual;
  }

  function getAberto() {
    return $this->aberto;
  }

  function setAberto() {
    $this->aberto = $aberto;
  }

  function getLeitor() {
    return $this->leitor;
  }

  function setLeitor() {
    $this->leitor = $leitor;
  }

  public function abrir() {
    $this->aberto = true;
  }

  public function  fechar() {
    $this->aberto = false;
  }

  public function folhear($p) {
    if ($p > $this->qtdPaginas) {
      $this->pgAtual = 0;
    } else {
      $this->pgAtual = $p;
    }
  }

  public function avancaPg() {
    if ($this->pgAtual > $this->qtdPaginas) {
      echo "FIM!";
    } else {
      $this->pgAtual ++;
    }
  }

  public function retornaPg() {
    if ($this->pgAtual < $this->qtdPaginas) {
      echo "INICIO!";
    } else {
      $this->pgAtual --;
    }
  }
}
