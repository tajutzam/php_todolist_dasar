<?php

require_once "../model/todolist.php";
require_once "../service/addTodolist.php";
require_once "../service/removeTodolist.php";
require_once "../service/showTodolist.php";

addTodolist("zam");
addTodolist("tajut");
addTodolist("zam zami");
var_dump(RemoveTodo(1));
showTodolist();
RemoveTodo(2);
showTodolist();
var_dump(RemoveTodo(20));
