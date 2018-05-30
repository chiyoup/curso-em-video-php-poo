<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Aula 05</title>
  </head>
  <body>
    <?php
      require_once 'exercicio-01.php';

      $cliente1 = new ContaBanco();
      $cliente2 = new ContaBanco();
      $cliente1->abrirConta("CC");
      $cliente1->setdono("Gustavo");
      $cliente1->setnumConta(0001);
      $cliente2->abrirConta("CP");
      $cliente2->setdono("Chiyo");
      $cliente2->setnumConta(0002);

      $cliente1->depositar(300);
      $cliente2->depositar(500);

      $cliente2->sacar(100);

      $cliente1->pagarMensal();
      $cliente2->pagarMensal();

      $cliente1->sacar(1000);
      $cliente1->sacar(362);

      $cliente1->fecharConta();
      $cliente2->fecharConta();

      var_dump($cliente1);
      var_dump($cliente2);
    ?>
  </body>
</html>
