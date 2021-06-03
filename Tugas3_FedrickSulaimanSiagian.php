<?php
    echo "=============== CETAK BILANGAN GANJIL GENAP 1-100===============<br>"; //Menampilkan tulisan judul
    for ($i=1; $i <=100; $i++) { //operasi perulangan menggunakan for loop sebanyak 100x
        $string = $i%2==0 ? $i." adalah Bilangan Genap<br>" : $i." adalah Bilangan Ganji.<br>"; //operasi ternary untuk menentukan apakah variabel i genap atau ganjil
        echo $string; //menampilkan isi variabel string
    }
?>