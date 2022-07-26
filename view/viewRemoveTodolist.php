<?php
require_once "viewShowTodolist.php";
function viewaRemoveTodolist(){

    echo "Menghapus todo".PHP_EOL;

    $number = input("Todo Yang ingin dihapus (x untuk batal) ").PHP_EOL;
    if($number=="x"){
        echo "Batal Menghapus Todo";
        viewShowTodolist();
    }else{
        $baru=(int)$number;
        $suces=RemoveTodo($baru);
        var_dump($suces);
        if($suces==true){
            echo "Berhasil Menghapus Todo Nomor $number".PHP_EOL;
        }else if($suces==false){
            echo "Gagal Menghapus Todo".PHP_EOL;
        }
        viewShowTodolist();
    }
}