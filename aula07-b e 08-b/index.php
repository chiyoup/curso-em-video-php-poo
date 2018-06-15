<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Aula 07</title>
  </head>
  <body>
    <?php
      require_once 'Lutador.php';
      require_once 'Luta.php';

      $lutadores= array();

      $lutadores[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
      $lutadores[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
      $lutadores[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
      $lutadores[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
      $lutadores[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
      $lutadores[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

      $UEC01 = new Luta();
      $UEC01->marcarLuta($lutadores[2], $lutadores[3]);
      $UEC01->lutar();
      $lutadores[2]->status();
      $lutadores[3]->status();
    ?>
  </body>
</html>
