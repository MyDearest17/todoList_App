<?php

require_once __DIR__ ."/../Model/TodoList.php";
require_once __DIR__ ."/../Controller/AddTodoList.php";
require_once __DIR__ ."/../Helper/Input.php";


function viewAddtodoList(){
    
    echo "MENAMBAH TODO".PHP_EOL;

    $todo = input("Todo (x untuk batal) ");

    if($todo == "x"){
        echo "Batal menambah todo";
    }else{
        addTodoList(($todo));
    }
}