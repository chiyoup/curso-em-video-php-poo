<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once 'exercicio-01.php';
      $c1 = new Caneta();
      $c1->setModelo("BIC");
      $c1->setPonta(0.5);
      echo "Eu tenho uma caneta {$c1->getModelo()}, de ponta {$c1->getPonta()}!";
      var_dump($c1);
    ?>
  </body>
</html>
