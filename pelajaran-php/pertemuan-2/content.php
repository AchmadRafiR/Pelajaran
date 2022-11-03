<?php
    $menu=["Home","Kontak","Sejarah","Jurusan"];
    $judul=["Apel","Jeruk","Mangga","Durian"];
    $deskripsi=[
        "apel adalah qwertyuiop[asdfghjklzxcvbnm",
        "jeruk adalah qwertyuiop[asdfghjklZxcvbnm",
        "mangga adlah wertyuiopasdfghjkxcvbn",
        "durian adalah wertyuiodfghjkcvbn"
    ];
    for ($i=0; $i < 4; $i++) { 
        echo "<li> $menu[$i] </li>";
    }
    $link=[
        "home" => "<a href='#'> home</a>",
        "kontak" => "<a href='#'> kontak </a>",
        "sejarah" => "<a href='#'> sejarah </a>",
        "jurusan" => "<a href='#'> jurusan </a>"
    ];
    echo $link["home"];

    foreach ($link as $key => $value) {
        echo "<li>";
        echo $value ;
        echo "</li>";
    }
    echo "<br>";

    // $tanggal = 31;
    // if ($tanggal >= 1 && $tanggal <=31) {
    //     echo "anjay benar";
    // }else {
    //     echo "salah bodoh";
    // }

    $nilai = 69;
    if ($nilai >= 0 && $nilai <=100) {
        if ($nilai > 70) {
            if ($nilai == 71) {
                echo "KKM";
            }
            if ($nilai > 71 && $nilai <=80) {
                echo "C";
            }
            if ($nilai >= 80 && $nilai <90) {
                echo "B";
            }
            if ($nilai >= 90 && $nilai <=100) {
                echo "A";
            }
        }
        else {
            echo "tidak lulus";
        }
    }
    else {
        echo "nilai tidak valid";
    }
    echo "<br>";

    
    function zodiak($t,$b)
    {
    $tanggal = $t;
    $bulan = $b;
    if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
        if ($bulan == 1) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda capricon";
            }else {
                echo "zodiac anda aquarius";
            }
        }
        if ($bulan ==2) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda aquarius";
            }else {
                echo "zodiac anda pisces";
            }
        }
        if ($bulan ==3) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda pisces";
            }else {
                echo "zodiac anda aries";
            }
        }
        if ($bulan == 4) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda aries";
            }else {
                echo "zodiac anda taurus";
            }
        }
        if ($bulan == 5) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda taurus";
            }else {
                echo "zodiac anda gemini";
            }
        }
        if ($bulan == 6) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda gemini";
            }else {
                echo "zodiac anda cancer";
            }
        }
        if ($bulan == 7) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda cancer";
            }else {
                echo "zodiac anda leo";
            }
        }
        if ($bulan == 8) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda leo";
            }else {
                echo "zodiac anda virgo";
            }
        }
        if ($bulan == 9) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda virgo";
            }else {
                echo "zodiac anda libra";
            }
        }
        if ($bulan == 10) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda libra";
            }else {
                echo "zodiac anda scorpio";
            }
        }
        if ($bulan == 11) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda scorpio";
            }else {
                echo "zodiac anda sagitarius";
            }
        }
        if ($bulan == 12) {
            if ($tanggal >=1 && $tanggal <=20) {
                echo "zodiac anda sagitarius";
            }else {
                echo "zodiac anda capricorn";
            }
        }
    }else {
        echo "tanggal atau bulan salah";
    }
    }

    zodiak(1,100);
    for ($i=1; $i < 13; $i++) { 
        zodiak(25,$i);
        echo "<br>";
    } 

?>