<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Aula 02</title>
  </head>
  <body>
    <?php
      require_once 'exercicio-01.php';

      $c1 = new Caneta;
      $c1->cor = "Azul";
      $c1->ponta = 0.5;
      $c1->tampada = false;
      $c1->tampar();
      $c1->rabiscar();
      var_dump($c1);

      $c2 = new Caneta;
      $c2->cor = "Vermelha";
      $c2->carga = 50;
      $c2->tampar();
      var_dump($c2);
    ?>
  </body>
</html>
