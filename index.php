<?php 

    // VARIABEL

    // Variabel String
    $namaDepan = "Sulenias";
    $namaBelakang = "Asso";

    echo $namaDepan; 
    echo $namaBelakang;

    // Gabung String
    $namaLengkap = $namaDepan .' '. $namaBelakang;

    // variabel integer
    $x = 10;
    $y = 70;

    // - = operasi pengurangan
    // * = operasi perkalian
    // + = operasi penjumlahan
    // / = operasi pembagian
    // % = hasil bagi

    $penjumlahan = $x + $y;
    echo '<p>'. $penjumlahan . '</p>';

    $pengurangan = $y - $x;
    echo '<p>' . $pengurangan . '</p>';

    $perkalian = $x * $y;
    echo '<p>' . $perkalian . '</p>';

    $pembagian = $y / $x;
    echo '<p>' . $pembagian . '</p>';

    $mod = $x % $y;
    echo '<p>' . $mod . '</p>';


    // OPERATOR PERCABANGAN atau IF ELSE

    $nilai = 90;
    // perbandingan untuk kondisi <, >, =, !=, ==, ===,
    // OR = ||
    // AND = &&
    // NOT = !=

    // 90 = A, 80 = B, 70 = C, 60 = D, E
    if(90 < $nilai)
    {
        echo '<p> Selamat '. $namaLengkap . '</p>';
        echo '<p> Anda mendapatkan nilai A </p>';
    }else if(80 <= $nilai) {
        echo '<p> Selamat '. $namaLengkap . '</p>';
        echo '<p> Anda mendapatkan nilai B </p>';
    } else if(70 <= $nilai) {
        echo '<p> Selamat '. $namaLengkap . '</p>';
        echo '<p> Anda mendapatkan nilai C </p>';
    } else if(60 <= $nilai) {
        echo '<p> Selamat '. $namaLengkap . '</p>';
        echo '<p> Anda mendapatkan nilai D </p>';
    } else{
        echo '<p> Selamat '. $namaLengkap . '</p>';
        echo '<p> Anda mendapatkan nilai E </p>';
    }


    // PENGULANGAN

    // For
    // While
    // Foreach
    echo "<h1> Bilangan Ganjil </h1>";
    for ($i=0; $i <= 100; $i++) { 
        if($i % 2 !=0)
        {
            echo $i.', ';
        }
        
    }

    echo "<h1> Bilangan Genap </h1>";
    for ($i=0; $i <= 100; $i++) { 
        if($i % 2 ==0)
        {
            echo $i.', ';
        }
        
    }
    
    
    
    



?>