<?php

require_once "../Helper/Input.php";
// Ini cukup satu aja require_once nya

$name = input("Name");
// nah itu funvtion yang kita bikin di input.php tadi kita isi dengan string Name
echo "Hello $name" . PHP_EOL;
// Lalu kita tampilkan
// Contoh nya kalo kita isi nanti name nya dengan nama "Ganzcrn"
// Maka tampilan nya akan seperti dibawah ini
// Name : Ganzcrn(diisi secara dinamis, ini hasil dari method fget(STDIN) Tadi)
// Hello Ganzcrn
$channel = input("Channel");
echo "Nama Channel : $channel" . PHP_EOL;
// Ini juga sama