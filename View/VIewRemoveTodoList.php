<?php

require_once __DIR__ ."/../Helper/Input.php";
require_once __DIR__ ."/../Controller/RemoveTodoList.php";


function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO".PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if($pilihan == "x"){
        echo "Batal menghapus todo".PHP_EOL;
    }else{
        $succes = removeTodoList($pilihan);

        if($succes){
            echo "Sukses menghapus todo nomor $pilihan".PHP_EOL;
        }else{
            echo "Gagal menghapus todo nomor $pilihan".PHP_EOL;
        }
    }


}