<?php

require_once "../Model/TodoList.php";
// kita masukan array nya dulu
require_once "../BusinessLogic/AddTodoList.php";
// lalu add nya, masa mau nge hapus todolist
// sebelumnya belum ada data nya
require_once "../BusinessLogic/ShowTodoList.php";
// yah harus di tampilin dulu lah data yang udah di tambahkan tadi,
// masa mau di tambahkan dalam bentuk array nya
require_once "../BusinessLogic/RemoveTodoList.php";
// baru deh kita tambahin function remove nya buat nge hapus data nya
// Harus Nyusun atau urut


// Pertama Kita tambahin dulu data nya
addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");
addTodoList("Budi");
addTodoList("Joko");

// Kita tampilin
showTodoList();

// Kita hapus
removeTodoList(3);

// Tampilin lagi dengan tampilan data yang sudah dihapus nya
showTodoList();

// Coba hapus yang lain
removeTodoList(2);

// Tampilin lagi
showTodoList();



$success = removeTodoList(4);
var_dump($success);

showTodoList();