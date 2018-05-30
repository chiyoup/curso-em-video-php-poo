<?php

class ContaBanco {
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  public function abrirConta($t) {
    $this->settipo($t);
    $this->setstatus(true);
    if ($t == "CC") {
      $this->setsaldo(50);
    } elseif ($t == "CP") {
      $this->setsaldo(150);
    }
  }

  public function fecharConta() {
    if ($this->getsaldo() > 0) {
      echo "<p>Conta com dinheiro. Retire para fechar a conta.</p>";
    } elseif ($this->getsaldo() < 0) {
      echo "<p>Conta em débito. Deposite o valor negativo para encerrar sua conta.</p>";
    } else {
      $this->setstatus(false);
      echo "Conta encerrada com sucesso para o(a) cliente {$this->getdono()}.";
    }
  }

  public function depositar($valor) {
    if ($this->getstatus() == true) {
      $this->setsaldo($this->getsaldo() + $valor);
      echo "<p>Deposito no valor de $valor, realizado por {$this->getdono()}.</p>";
    } else {
      echo "<p>Conta inativa. Impossivel depositar.</p>";
    }
  }

  public function sacar($valor) {
    if ($this->getstatus() == true) {
      if ($this->getsaldo() >= $valor) {
        $this->setsaldo($this->getsaldo() - $valor);
        echo "<p>Saque no valor de $valor, realizado por {$this->getdono()}.</p>";
      } else {
        echo "<p>Saldo insuficiente.Impossivel sacar.</p>";
      }
    } else {
      echo "<p>Conta inativa. Impossivel sacar.</p>";
    }
  }

  public function pagarMensal() {
    if ($this->gettipo() == "CC") {
      $valor = 12;
    } elseif ($this->gettipo() == "CP") {
      $valor = 20;
    }

    if ($this->getstatus() == true) {
      if ($this->getsaldo() > $valor) {
        $this->setsaldo($this->getsaldo() + $valor);
        echo "<p>Manutenção da conta no valor de $valor, debitada na conta de {$this->getdono()}.</p>";
      } else {
        echo "<p>Saldo insuficiente para debitar a manutenção da conta.</p>";
      }
    } else {
      echo "<p>Conta inativa. Impossivel pagar manutenção da conta.</p>";
    }
  }

  public function ContaBanco() {
    $this->setsaldo(0);
    $this->setstatus(false);
    echo "<p>Conta criada com sucesso!</p>";
  }

  public function getnumConta() {
    return $this->numConta;
  }

  public function setnumConta($nc) {
    $this->numConta = $nc;
  }

  public function gettipo() {
    return $this->tipo;
  }

  public function settipo($tc) {
    $this->tipo = $tc;
  }

  public function getdono() {
    return $this->dono;
  }

  public function setdono($nome) {
    $this->dono = $nome;
  }

  public function getsaldo() {
    return $this->saldo;
  }

  public function setsaldo($saldo) {
    $this->saldo = $saldo;
  }

  public function getstatus() {
    return $this->status;
  }

  public function setstatus($status) {
    $this->status = $status;
  }
}
