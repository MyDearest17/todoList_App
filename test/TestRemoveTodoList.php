<?php

require_once "../Model/TodoList.php";
require_once "../Controller/RemoveTodoList.php";
require_once "../Controller/AddTodoList.php";
require_once "../Controller/ShowTodoList.php";

addTodoList("Rizki");
addTodoList("Zulfi");
addTodoList("Hadi");




$succes = removeTodoList(1);
var_dump($succes);
showTodoList();