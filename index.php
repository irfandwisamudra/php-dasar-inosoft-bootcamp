<?php
// Fungsi untuk menghitung luas lingkaran
function luas_lingkaran($jari_jari) {
    return number_format(3.14 * ($jari_jari * $jari_jari), 2);
}

// Fungsi untuk menghitung keliling lingkaran
function keliling_lingkaran($jari_jari) {
    return number_format(2 * 3.14 * $jari_jari, 2);
}

// Fungsi untuk menghitung luas persegi
function luas_persegi($panjang, $lebar) {
    return number_format($panjang * $lebar, 2);
}

// Cetak angka dari 1 hingga 100
for ($i = 1; $i <= 100; $i++) {
    // Cek kelipatan 3 dan 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        // Memanggil fungsi luas_persegi dengan panjang = i/3 dan lebar = i/5
        echo luas_persegi($i/3, $i/5) . "<br>";
    } elseif ($i % 3 == 0) {
        // Memanggil fungsi luas_lingkaran dengan jari-jari = i/3
        echo luas_lingkaran($i/3) . "<br>";
    } elseif ($i % 5 == 0) {
        // Memanggil fungsi keliling_lingkaran dengan jari-jari = i/5
        echo keliling_lingkaran($i/5) . "<br>";
    } else {
        // Cetak angka biasa
        echo number_format($i, 2) . "<br>";
    }
}
?>