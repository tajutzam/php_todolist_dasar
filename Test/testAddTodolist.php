<?php


require_once "../model/todolist.php";
require_once "../service/addTodolist.php";

addTodolist("Belajar Java Spring boot");
var_dump($todolist);