<?php

require_once "../View/ViewShowTodoList.php";
// panggil si viwshow nya sih supaya pilihan yang kita buat untuk di isi tadi
// ama user bisa dipilih buat nambahin todolist atau menghapus
require_once "../BusinessLogic/AddTodoList.php";
// masa mau nampilin todolist nya nggak ditambahin dulu
// panggil lah pake require folder sama file add nya

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");
// Disini tambahin dululah si todolist nya

viewShowTodoList();