<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Aula 06</title>
  </head>
  <body>
    <?php
      require_once 'ControleRemoto.php';

      $cr = new ControleRemoto();
      $cr->ligar();
      var_dump($cr);
    ?>
  </body>
</html>
