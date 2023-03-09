<?php
// require_once harus yang model dulu untuk memanggil si array nya
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

/** Bisa di analogikan seperti ini:
 * 
 * bayangkan disini ada variabel $todoList yang merupakan array kosong yang berada di file TodoList.php dan berada di folder model
 * 
 * Seperti ini :
 * 
 * $todoList = array();
 * 
 * yang mana array nya kosong begitu pula dengan key $number maupun $value nya
 * lalu ditambahkan data nya menggunakan AddTodoList.php di business Logic
 * dengan perintah seperti di bawah ini
 *
 */
addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");
// addTodoList("UDIN");

/*
yang artinya sekarang di array nya ada data seperti dibawah ini:

$todoList = array("Eko", "Kurniawan", "Khannedy");

berarti bertambah tiga data

kemudian dipanggil dengan perintah seperti dibawah ini.
*/

var_dump($todoList);

/** Hasilnya seperti di bawah ini jika di test di terminal
 * array(3) {                                                                                                  
  [1]=>
  string(3) "Eko"      
  [2]=>
  string(9) "Kurniawan"
  [3]=>                                                                                                      
  string(8) "Khannedy" 
}
 */

/** Maka nya tadi saya bilang untuk menambahkan require_once nya harus urut
 * jadi nya yang tampil dari atas ke bawah adalah array nya dulu baru perintah addTodoList nya.
 * 
 */

