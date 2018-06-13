<?php
require_once 'Lutador.php';
class Luta {
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  public function marcarLuta($lutador1, $lutador2) {
    if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2) {
      $this->aprovada = true;
      $this->desafiado = $lutador1;
      $this->desafiante= $lutador2;
    } else {
      $this->aprovada = false;
      $this->desafiado = null;
      $this->desafiante = null;
    }
  }

  public function lutar() {
    if ($this->aprovada) {
      $this->desafiante->apresentar();
      $this->desafiado->apresentar();
      $vencedor = rand(0, 2);

      switch($vencedor) {
        case 0:
          echo "<p>EMPATE</p>";
          $this->desafiante->empatarLuta();
          $this->desafiado->empatarLuta();
          break;
        case 1:
          echo "<p>{$this->desafiado->getNome()} venceeeeu!!!</p>";
          $this->desafiado->ganharLuta();
          $this->desafiante->perderLuta();
          break;
        case 2:
          echo "<p>{$this->desafiante->getNome()} venceeeeu!!!</p>";
          $this->desafiante->ganharLuta();
          $this->desafiado->perderLuta();
          break;
      }

    } else {
      echo "<p>Luta não aprovada.</p>";
    }
  }

  function getDesafiado() {
    return $this->desafiado;
  }

  function setDesafiado() {
    $this->desafiado = $desafiado;
  }

  function getDesafiante() {
    return $this->desafiante;
  }

  function setDesafiante() {
    $this->desafiante = $desafiante;
  }

  function getRounds() {
    return $this->rounds;
  }

  function setRounds() {
    $this->rounds = $rounds;
  }

  function getAprovada() {
    return $this->aprovada;
  }

  function setAprovada() {
    $this->aprovada =$aprovada;
  }
}
