<?php

/**
 * Menghapus todo di list
 */
function removeTodoList(int $number): bool
// disini tertulis bool yang artinya function removeTodoList Menghasilkan hasil true or false 
// Jadi jika menghapus nya berhasil akan bernilai true tapi jika gagal akan bernilai false

{
    global $todoList;
    // Bayangkan disini ada array dari variabel $todoList
    // dan sebelumnya harus ada data dalam array nya

    if ($number > sizeof($todoList)) {
        return false;
    }
    /* jika key $number lebih besar dari keseluruhan 
    data di array yang ada di variabel $todoList
    Maka menghapus nya akan gagal

    contoh :
array(4) {
  [1]=>
  string(3) "Eko"
  [2]=>
  string(9) "Kurniawan"
  [3]=>
  string(8) "Khannedy"
  [4]=>
  string(4) "UDIN"
}

dan kita malah mengisi parameter di function RemoveTodoList (5) dengan angka 5
yang mana data hanya ada 4 maka akan gagal dikarenakana tidak ada ngka 5




    */

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }
/*
disini ada perulangan for yang berfungsi menghapus array nya
jadi kita isi kondisi nya dengan variabel $i yang
diisi dengan key $number(yang nanti
kita masukan di parameter function nya)
lalu kita isi kondisi nya, jika $i kurang
dari keseluruhan data $todolist
maka key $number yang dimasukan
ke var $i akan ditambah 1

Contoh:

array(4) {
  [1]=>
  string(3) "Eko"
  [2]=>
  string(9) "Kurniawan"
  [3]=>
  string(8) "Khannedy"
  [4]=>
  string(4) "UDIN"
}

kita isi removeTodoList(3) maka $number 3 dari array di atas akan di hapus
dan akan digantikan dengan $number 4 tapi number 4 ini akan diganti menjadi $number 3
dan $number 4 akan di hapus

jadi si $number 3 digantikan oleh $number 4
dan $number 4 akan dihapus dengan method unset seperti dibawah 

dan hasilnya seperti ini
array(4) {
  [1]=>
  string(3) "Eko"
  [2]=>
  string(9) "Kurniawan"
  [3]=>
  string(8) "UDIN"
}

*/

    unset($todoList[sizeof($todoList)]);
// berfungsi menghapus data terakhir dari $todolist

    return true;
}