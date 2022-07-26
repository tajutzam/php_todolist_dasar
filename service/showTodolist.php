<?php

//show todo
function showTodolist(){
    echo "TOTOLIST".PHP_EOL;
    global $todolist;
    if(sizeof($todolist)==0){
        echo "Data Todo Kosong".PHP_EOL;
    }else{
        foreach ($todolist as $indek => $value){
            echo "$indek. $value".PHP_EOL;
        }
    }


}
