<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задание 1</h1>
    <form method="POST" action="task1.php">
        <label>Введите строку</label>
        <input type="text" name="textSplit" value="<?= isset($_POST['textSplit']) ? $_POST['textSplit'] : ''  ?>">
        <button type="submit">Выполнить</button>
       
    </form>
    <div>
    <?php if (isset($_POST['textSplit'])): ?>
        <h3>Результат:</h3>
        <?php
         $text_split = $_POST['textSplit']; 

         $symbols = array(',', '.', '?', '!', ';', ':', '- ');
         $text_split = str_replace($symbols, "", $text_split);
         $result1 = explode(' ', $text_split);
         var_dump($result1);
        ?>
        <?php endif ?>
    </div>
</body>
</html>
