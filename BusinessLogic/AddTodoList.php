<?php

/**
 * Menambah todo ke list
 */
function addTodoList(string $todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1;
    /* fungsi size off diatas untuk menghintung ada berapa saja data di variabel
      $todoList lalu ditambahkan 1.
     Contoh : ada 0 berarti di tambah 1 menjadi 1 dan ada 1 ditambah 1 jadi 2
     jika data dalam array nya seperti ini
     $todolist = [
        1 => Belajar PHP Dasar
        2 => Belajar PHP OOP
        3 => Belajar PHP Database
     ];

     berarti ada 3 $number dan 3 $value maka jika menggunakan
     perintah $number = sizeof($todoList) + 1; data number 3 tadi akan ditambah 1 jadi 4
    

     */
    

    $todoList[$number] = $todo;

    /* disini $todo yang merupakan parameter addTodoList yang mana berisi perintah
      $number = sizeof($todoList) + 1; akan disimpan ke dalam key $number yang berada pada array variabel $todoList
      jadi nanti kita tinggal masukan string seperti nama atau apa saja di function addtodolist nya
      seperti addTodoList("UDIN") Nah udin ini akan mengisi value dari number nya

      seperti ini :
      $todolist = [
        1 => Belajar PHP Dasar
        2 => Belajar PHP OOP
        3 => Belajar PHP Database
        4 => UDIN
     ];

     Bisa Di cek di folder Test
    */
}