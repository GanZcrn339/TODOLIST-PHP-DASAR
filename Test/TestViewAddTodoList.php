<?php

require_once "../View/ViewAddTodoList.php";
// mau nambahin todo masa gak di tampilin halaman nambahin nya
require_once "../BusinessLogic/ShowTodoList.php";
// hasil dari nambahin todo nya liatin dong
require_once "../BusinessLogic/AddTodoList.php";
// nah ini buat nambah todo nya lah

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");
// diatas kita tambahin dulu todo nya 3 aja

viewAddTodoList();
// terus kita tampilin inputan nya
// masa mau ngisi todo gak dikasih form nya
// nah kalo batas kita tinggal tekan x kan kyk tadi dah dimasukin tuh ke function nya

showTodoList();
// tampilin lah hasil yang ditambahin tadi

viewAddTodoList();
// coba lagi siapa tau mau nambahin lebih dari satu todo

showTodoList();
// tampilin lagi lah