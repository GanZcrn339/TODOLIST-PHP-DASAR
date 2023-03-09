<?php

function input(string $info): string
/*
ada sebuah function input yang memiliki variabel $info yang diisi dengan string
dan kembalinya juga string
ketika disi maka akan menghasilkan proses seperti dibawah ini
*/
{
    echo "$info : ";
    // Echo menampilkan $info ditambah dengan :
    // misal kita isi $info nya dengan "nama" maka hasilnya akan seperti dibwah ini
    // nama : 
    // nah nanti nya itu kita isi si input itu terserah kita asalkan string
    $result = fgets(STDIN);
    // Inti nya ada method yang disebut fgets yang isi STDIN
    // (Pokok nya input gitu kek form lah nanti nya kita disuruh isi) 
    // kek diatas nah fungsi ngisi nya itu pake method tadi
    return trim($result);
    // lalu kita minta hasil nya dengan di trim
    // Lanjut di test
}