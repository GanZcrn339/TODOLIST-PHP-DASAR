<?php

require_once "../Model/TodoList.php";
// Jadi Di Panggil Juga menggunakan require once array yang ada di Model/TodoList.php nya
require_once "../BusinessLogic/ShowTodoList.php";

$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Database";

showTodoList();