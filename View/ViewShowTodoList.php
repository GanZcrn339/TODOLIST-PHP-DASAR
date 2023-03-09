<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
// Biasa lah masukin require_once harus urut sesuai yang ingin di proses dibawah

function viewShowTodoList()
// Ada function viewShowTodolist masa gak mau ditampilin
{
    while (true) 
    // Nah untuk ditampilin makanya butuh while supaya tampil terus sampe dibreak
    {
        showTodoList();
        // kita panggil showTodolist supaya tampil si TODOLIST ama Key $number sama $velue nya

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;
        // Nah tampilin pilihan lah user nya supaya gak bingung

        $pilihan = input("Pilih");
        // Kita masukin function input dari folder helper dan input.php
        // Untuk masukin pilihan diatas

        if ($pilihan == "1") {
            viewAddTodoList();
            // nah ini nih dimulai proses nya
            // kalo $pilihan nya 1 atau user nya ketik angka 1
            // Maka tampilin si viewAddTodoList nanti ada pilihan lagi atau 
            // disuruh masukin inputan lagi
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
            // Nah sama lah kyk yang diatas
        } else if ($pilihan == "x") {
            break;
            // ya udah kalo gak mau nambahin atau masukin
            // inputan todolist kelaur atau berhenti
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
    // Karena udah beres atau lu yang keluar ya udah beres dah
}