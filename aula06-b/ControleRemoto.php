<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador {
  private $volume;
  private $ligado;
  private $tocando;

  public function ControleRemoto() {
    $this->volume = 0;
    $this->ligado = false;
    $this->tocando = false;
  }

  private function getVolume() {
    return $this->volume;
  }

  private function setVolume($volume) {
    $this->volume = $volume;
  }

  private function getLigado() {
    return $this->ligado;
  }

  private function setLigado($ligado) {
    $this->ligado = $ligado;
    $this->setVolume(50);
    $this->setTocando(true);
  }

  private function getTocando() {
    return $this->tocando;
  }

  private function setTocando($tocando) {
    $this->tocando = $tocando;
  }

  public function ligar() {
    $this->setLigado(true);
  }

  public function desligar() {
    $this->setDesligado(false);
    $this->setVolume(0);
    $this->setTocando(false);
  }

  public function abrirMenu() {
    if ($this->getLigado() == true) {
      echo "Ligado<br/>";
      echo "Volume<br/> {$this->getVolume()}";
      for ($i = 0; $i <= $this->getVolume(); $i+=5) {
        echo " I";
      }
    }
  }

  function fecharMenu() {
    if ($this->getLigado() == true) {
      echo "Fechando o menu...";
    }
  }

  function maisVolume() {
    if ($this->getLigado() == true) {
      $this->setVolume($this->getVolume() + 5);
    }
  }

  function menosVolume() {
    if ($this->getLigado() == true) {
      $this->setVolume($this->getVolume() -5);
    }
  }

  function ligarMudo() {
    if (($this->getLigado() == true) and ($this->getVolume() > 0)) {
      $this->setVolume(0);
    }
  }

  function desligarMudo() {
    if (($this->getLigado() == true) and ($this->getVolume() > 0)) {
      $this->setVolume(50);
    }
  }

  function play() {
    if (($this->getLigado() == true) and ($this->getTocando() == false)) {
      $this->setTocando(true);
    }
  }

  function pause() {
    if (($this->getLigado() == true) and ($this->getTocando() == true)) {
      $this->setTocando(false);
    }
  }
}
