<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once 'Pessoa.php';
      require_once 'Livro.php';

      $pessoa[0] = new Pessoa("Aline", 21, "feminino");
      $pessoa[1] = new Pessoa("Gustavo", 22, "masculino");

      $livro[0] = new Livro("O Guia Definitivo do Mochileiro das Galáxias", "Douglas Adams",
      672, $pessoa[0]);
      $livro[1] = new Livro("It: A Coisa", "Stephen King", 1104, $pessoa[1]);

      $livro[0]->abrir();
      $livro[0]->folhear(601);
      $livro[0]->detalhes();
      $livro[1]->abrir();
      $livro[1]->folhear(937);
      $livro[1]->detalhes();
    ?>
  </body>
</html>
