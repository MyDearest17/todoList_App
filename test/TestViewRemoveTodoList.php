<?php

require_once "../View/VIewRemoveTodoList.php";
require_once "../Model/TodoList.php";
require_once "../Controller/AddTodoList.php";
require_once "../Controller/ShowTodoList.php";

addTodoList("Rizki");
addTodoList("Zulfi");
addTodoList("Hadi");

showTodoList();
viewRemoveTodoList();
showTodoList();