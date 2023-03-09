<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
// bikin function biasalah
{
    echo "MENAMBAH TODO" . PHP_EOL;
    // karena mau menambahkan todo yah diatas nya kita
    // kasih judul menambah todo lah

    $todo = input("Todo (x untuk batal)");
    // kasih pilihan lah nanti kita pilih tuh kalo mau batal

    if ($todo == "x")
    // nah kalo tadi kita isi x maka bakalan batal dan bakal tampil
    // tampilan seperti dibawah ini
     {
        echo "Batal menambah todo" . PHP_EOL;
    } else
    // kalo nggak mau batal yah tinggal kita isi si todo nya 
     {
        addTodoList($todo);
    }
}