<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caixa Eletônico</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section class="card">
    <h1>Caixa Eletrônico</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="valor">Qual valor você deseja sacar? (R$)*</label>
      <input type="number" name="valor">
      <p>Notas disponíveis: R$100,00, R$50,00, R$10,00 e R$5,00</p>
      <button type="submit">Sacar</button>
    </form>
  </section>
  <section class="card">
    <?php
    $valor = $_GET["valor"] ?? 0;

    $notas100 = floor($valor / 100);
    $resto100 = $valor % 100;

    $notas50 = floor($resto100 / 50);
    $resto50 = $resto100 % 50;

    $notas10 = floor($resto50 / 10);
    $resto10 = $resto50 % 10;

    $notas5 = floor($resto10 / 5);
    $resto5 = $resto10 % 5;

    echo "<h1>Saque de R$ $valor realizado</h1>";
    echo "<p>O caixa eletrônico deve entregar as seguintes notas:</p>";
    echo "<ul>";
    echo "<li><img width=\"200px\" src=\"img/100.jpg\">x$notas100</li>";
    echo "<li><img width=\"200px\" src=\"img/50.jpeg\">x$notas50</li>";
    echo "<li><img width=\"200px\" src=\"img/10.jpg\">x$notas10</li>";
    echo "<li><img width=\"200px\" src=\"img/5.jpg\">x$notas5</li>";
    echo "</ul>";
    ?>

  </section>
</body>

</html>