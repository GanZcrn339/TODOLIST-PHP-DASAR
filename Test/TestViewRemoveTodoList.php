<?php

require_once "../Model/TodoList.php";
// masa kgk ditampilin dulu nih todolist yg udah ada nya
require_once "../View/ViewRemoveTodoList.php";
// nah ini nih yang pilihan sama input buat nge hapus nya
require_once "../BusinessLogic/AddTodoList.php";
// tambahin dulu lah todolist nya, klo kgk ada yg mana yang mau dihapus
require_once "../BusinessLogic/ShowTodoList.php";
// abis itu tampilin udah dihapus tadi jadi nya kek gimana

addTodoList("Eko");
addTodoList("Kurniwan");
addTodoList("Khannedy");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");
// noh tambahin dulu

showTodoList();
// liatin tuh yg udah ditambahin tadi

viewRemoveTodoList();
// nah tinggal hapus lah

showTodoList();
// tampilin yang udah dihapus nya