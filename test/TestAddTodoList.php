<?php

require_once "../Controller/AddTodoList.php";
require_once "../Model/TodoList.php";
 
addTodoList("Rizki");
addTodoList("Zulfi");
addTodoList("Hadi");

var_dump($todoList);