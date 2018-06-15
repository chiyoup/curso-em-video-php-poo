<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once 'Pessoa.php';
      require_once 'Aluno.php';
      require_once 'Professor.php';
      require_once 'Funcionario.php';

      $pessoa1 = new Pessoa("Aline", 21, "feminino");
      $pessoa2 = new Aluno("Analise e Desenvolvimento de Sistemas");
      $pessoa2->setNome("Chiyo");
      $pessoa2->setIdade(21);
      $pessoa2->setSexo("feminino");
      $pessoa3 = new Professor("PHP", 3500.00);
      $pessoa3->setNome("Bailão");
      $pessoa3->setIdade(37);
      $pessoa3->setSexo("masculino");
      $pessoa4 = new Funcionario("Marketing");
      $pessoa4->setNome("Gustavo");
      $pessoa4->setIdade(22);
      $pessoa4->setSexo("masculino");

      $pessoa3->receberAumento(584.00);
      $pessoa4->mudarTrabalho();

      var_dump($pessoa1);
      var_dump($pessoa2);
      var_dump($pessoa3);
      var_dump($pessoa4);
    ?>
  </body>
</html>
