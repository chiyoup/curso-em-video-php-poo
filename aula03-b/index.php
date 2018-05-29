<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Aula 03</title>
  </head>
  <body>
    <?php
      require_once 'exercicio-01.php';

      $c1 = new Caneta;
      $c1->modelo = "BIC Crystal";
      $c1->cor = "Rosa";
      #$c1->ponta = 0.5;
      #$c1->carga = 99;
      $c1->rabiscar();
      $c1->tampar();
      var_dump($c1);
    ?>
  </body>
</html>
