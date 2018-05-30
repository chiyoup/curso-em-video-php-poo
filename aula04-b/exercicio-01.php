<?php

class Caneta {
  public $modelo;
  private $ponta;
  private $tampada;

  public function Caneta() { #Construtor -> __construct()
    $this->cor = "Azul";
    $this->tampar();
  }
  #ou
  /**public function Caneta($m, $c, $p) {
      $this->modelo = $m;
      $this->cor = $c;
      $this->ponta = $p;
      $this->tampar();
    }
  Ao usar este metodo deve-se especificar os parâmetros durante criação do objeto.**/

  public function tampar() {
    $this->tampada = true;
  }

  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($m) {
    $this->modelo = ($m);
  }

  public function getPonta() {
    return $this->ponta;
  }

  public function setPonta($p) {
    $this->ponta = ($p);
  }

}
