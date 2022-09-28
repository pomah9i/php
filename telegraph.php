<?php

$textStorage = [];

function addText ($title,$text,&$textStorage) {
    $textStorage[] = ["title" => $title, "text" => $text];
}


addText("Заголовок1","Текст1", $textStorage);
addText("Заголовок2","Текст2", $textStorage);

echo "Функция добавления".PHP_EOL;
var_dump($textStorage);
echo "Функция удаления".PHP_EOL;

function removeText ($index, &$textStorage) {
    if (array_key_exists ("$index", $textStorage)) {
        unset($textStorage[$index]);
        echo "Индекс с номером \"$index\" удален из массива".PHP_EOL;
    } else {
        echo "Индекса с номером \"$index\" в массиве не существует".PHP_EOL;
    }

}

removeText(0,$textStorage);
removeText(5,$textStorage);
var_dump($textStorage);

function editText ($index, $title, $text, &$textStorage) {
    if (array_key_exists ("$index", $textStorage)) {
        unset($textStorage[$index]);
        $textStorage[$index] = ["title" => $title, "text" => $text];
        echo "Текст индекса \"$index\" изменен".PHP_EOL;
    } else {
        echo "Индекса с номером \"$index\" в массиве не существует".PHP_EOL;
    }

}

echo "Функция редактирования".PHP_EOL;
editText(1,"Новый заголовок","Новый текст",$textStorage);
var_dump($textStorage);

editText(2,"Новый заголовок","Новый текст",$textStorage);