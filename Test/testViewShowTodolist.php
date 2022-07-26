<?php

require_once "../view/viewShowTodolist.php";
require_once "../model/todolist.php";
require_once "../service/addTodolist.php";
require_once "../service/showTodolist.php";

addTodolist("baru");
addTodolist("zam");

viewShowTodolist();
