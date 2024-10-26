
<?php
    // Menampilkan Variabel dan Konstanta
    $nama = "Andi";
    define("GAJI", 50000000); //kalau costant nilainya mutlak jadi nilai value tidak bisa diubah 
    echo $nama;
    echo "<br>";
    echo GAJI;

    // Memanggil variabel dalam string
    $nama = "Andi";
    echo "<p>Selamat pagi $nama</p>";

    // Menghapus Variabel
    $nama = "Andi";
    echo $nama;
    unset($nama); //untuk menarik variabel nama
    echo $nama; //disini tidak akan muncul karena line 17 ada unset 

