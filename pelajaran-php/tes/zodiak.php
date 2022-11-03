<form action="" method="post">

    Tanggal :
    <input type="number" name="tanggal">
    <br>

    Bulan :
    <input type="number" name="bulan">
    <br>

    <input type="submit" name="simpan" value="simpan">

</form>

<?php 

    if (isset($_POST['simpan'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
            if ($bulan == 1) {
                if ($tanggal >= 1 && $tanggal <=20) {
                    echo "Zodiak anda adalah A";
                }else {
                    echo "Zodiak anda adalah B";
                }
            }
        }else {
            echo "Data tidak valid";
        }

    }

?>