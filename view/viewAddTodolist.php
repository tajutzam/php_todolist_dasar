<?php
require_once __DIR__. "/../service/addTodolist.php";
require_once  __DIR__."/../helper/input.php";
function viewAddtodolist(){
    echo "Menambah Todo".PHP_EOL;
    $todo = input("Todo(x batal)");
    if($todo=="x"){
        echo "batal Menambah Todo...".PHP_EOL;
        viewShowTodolist();
    }else{
        addTodolist($todo);
        echo "Todo : $todo berhasil ditambah".PHP_EOL;
        viewShowTodolist();
    }
}