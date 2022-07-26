<?php

require_once  __DIR__."/../service/showTodolist.php";
require_once  __DIR__."/viewAddTodolist.php";
require_once __DIR__. "/viewRemoveTodolist.php";
require_once  __DIR__."/../helper/input.php";
function viewShowTodolist(){

  showTodolist();
  echo "Menu".PHP_EOL;
  echo "----------------------".PHP_EOL;
  echo "1.Tambah Todo".PHP_EOL;
  echo "2.Hapus Todo".PHP_EOL;
  echo "x.Keluar".PHP_EOL;
  $istrue =false;
  do{
      $chose =input("Pilih Menu");
      switch ($chose){
          case "1":
              viewAddtodolist();
              $istrue=false;
              break;
          case "2":
              viewaRemoveTodolist();
              $istrue=false;
              break;
          case "x":
              //keluar
              echo "Terimakasih".PHP_EOL;
              $istrue=false;
              break;
          default :
              echo "Pilihan Tidak dimengerti".PHP_EOL;
              $istrue=true;
      }
  }while($istrue==true);

}