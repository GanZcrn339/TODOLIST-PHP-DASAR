<?php

require_once __DIR__ . "/../Helper/Input.php";
// masukin lah input nya, kalo kgk mau menghapus yang mana
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
// terus panggil juga lah kesini fungsi buat nge hapus nya, nanti
// dan dimasukin nomer nya malah kgk ke hapus

function viewRemoveTodoList()
// kita buat function tampilan nge hapus nya
{
    echo "MENGHAPUS TODO" . PHP_EOL;
    // judul ngehapusnya

    $pilihan = input("Nomor (x untuk batalkan)");
    // nah ini nih gua bilang kasih input yang nanti di isi nomer key $number 
    // yang mau dihapus nya kalo batal yah tinggal ketik x

    if ($pilihan == "x")
    // nah kalo mau batal nge hapus nya kita tinggal tekan x
    {
        echo "Batal menghapus todo" . PHP_EOL;
        // ini tampilan nya kalo batal
    } else {
        $success = removeTodoList($pilihan);
        // kalo kgk batal, kesini nih nanti kita pake fungsi yang udah kita bikin di BuisinessLogic


        if ($success)
        // Nah kalo sukses yah aman deh ke hapus dan tampil seperti dibawah ini 
         {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else
        // yah lu yg bener aja ngetik nya, cukup nomer nya aja kalo salah bakal tampil kek dibawah
        {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}