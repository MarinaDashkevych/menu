<?php
require_once 'product.php';
require_once 'classes\Dishes.php';
require_once 'classes\Food.php';
require_once 'classes\Drink.php';
require_once 'classes\HtmlWriter.php';

$drinksObjs = [];
foreach ($drinks as $drink) {
    $drinksObjs[] = new Drink($drink['name'], $drink['price'], $drink['volume']);
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Кафешка</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">

</head>
<body>
<div class="container">
    <br>
    <h4><b>Он-Лайн КАФЕШКА</b></h4>
    <br>
</div>
<? require_once 'menu.php' ?>
<div>
    <br>
    <p>
    <h1><p>Выберите свой напиток:</p></h1>
    <br>
    <br>
    <?php foreach ($drinksObjs as $drinksObj): ?>
        <?= HtmlWriter::writeDrink($drinksObj) ?>
    <?php endforeach; ?>
</div>
</body>
</html>
