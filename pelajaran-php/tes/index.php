<!-- <form action="" method="post">

    bilangan 1 :
    <input type="number" name="bil1">

    bilangan 2 :
    <input type="number" name="bil2">

    <input type="submit" name="tambah" value="tambah">
    <input type="submit" name="kali" value="kali">
</form> -->

<form action="" method="post">
    Tanggal :
    <input type="number" name="tanggal">
    Bulan :
    <input type="number" name="bulan">
    <input type="submit" name="simpan" value="simpan">
</form>

<?php 

    // if (isset($_POST['tambah'])) {
    //     $bil1 = $_POST['bil1'];
    //     $bil2 = $_POST['bil2'];
    //     $hasil = $bil1 + $bil2;
    //     echo $hasil;
    // }

    // if (isset($_POST['kali'])) {
    //     $bil1 = $_POST['bil1'];
    //     $bil2 = $_POST['bil2'];
    //     $hasil = $bil1 * $bil2;
    //     echo $hasil;
    // }

    if (isset($_POST['simpan'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        if ($tanggal > 0 && $tanggal <32 && $bulan > 0 && $bulan <13) {
            if ($bulan==1) {
                if ($tanggal >=1 && $tanggal <=20) {
                    echo "zodiak anda";
                }else {
                    echo "zodiak anda";
                }
            }
        }else {
            echo "data tidak valid";
        }
    }
    
?>