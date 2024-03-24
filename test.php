<?php
    $text_split = readline('Введите строку');

    $symbols = array(',', '.', '?', '!', ';', ':', '- ');
    $text_split = str_replace($symbols, "", $text_split);
    $result1 = explode(' ', $text_split);
    var_dump($result1);

    $result2 = array_reverse($result1);
    var_dump($result2);

    $result3 = implode(' ', $result1);
    var_dump($result3);