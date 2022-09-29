<?php
require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/Controller/AddTodoList.php";
require_once __DIR__ . "/Controller/ShowTodoList.php";
require_once __DIR__ . "/Controller/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/VIewRemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "App TodoList";
viewShowTodoList();