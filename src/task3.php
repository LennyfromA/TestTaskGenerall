<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задание 3</h1>
    <form method="POST" action="task3.php">
        <label>Введите элемент массива</label>
        <input type="text" name="textSplit"> 
        <button type="submit">Добавить</button>
    </form>

     <?php if (isset($_POST['textSplit'])): ?>
        <h3>Результат:</h3>
        <?php
         $textSplit = $_POST['textSplit'];
         if (isset($_SESSION['textSplit'])){
            $_SESSION['textSplit'][]=$textSplit;
         } else {
            $_SESSION['textSplit']=[];
            $_SESSION['textSplit'][]=$textSplit;
         }
         $result3 = implode(' ', $_SESSION['textSplit']);
         var_dump($result3);
         echo "<br>";
         var_dump($_SESSION['textSplit']);
        ?>
        <?php endif ?>
</body>
</html>

