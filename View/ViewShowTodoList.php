<?php

require_once __DIR__ ."/../Helper/Input.php";
require_once __DIR__ ."/../Controller/ShowTodoList.php";
require_once __DIR__ ."/../View/ViewAddTodoList.php";
require_once __DIR__ ."/../View/VIewRemoveTodoList.php";
require_once __DIR__ ."/../Model/TodoList.php";


function viewShowTodoList(){

   while(true){
    showTodoList();

    echo "MENU".PHP_EOL;
    echo "1. Tambah Todo".PHP_EOL;
    echo "2. Hapus Todo".PHP_EOL;
    echo "x. Keluar".PHP_EOL;
    $pilihan = input("Pilih");

    if($pilihan == "1"){
        viewAddtodoList();
    }elseif($pilihan == "2"){
        viewRemoveTodoList();
    }elseif($pilihan == "x"){
        break;
    }else{
        echo "Pilihan tidak dimengerti".PHP_EOL;
    }

   }

   echo "Sampai Jumpa Lagi".PHP_EOL;

}