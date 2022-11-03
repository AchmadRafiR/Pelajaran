<form action="" method="post">
    <input type="number" name="bulan" placeholder="masukkan bulan">
    <input type="number" name="tanggal" placeholder="masukkan tanggal">
    <input type="submit" name="submit" value="kirim">
</form>

<?php 

    require_once "zodiak.php";

    // $zodiak = new Zodiac;
    // echo $zodiak -> zodiak(1,20);

    if (isset($_POST['submit'])) {
        $b = $_POST['bulan'];
        $t = $_POST['tanggal'];
        echo Zodiac::zodiak($b,$t);
    }

    


    // require_once "rumus.php";
    // $rumus = new Rumus;
    // echo $rumus->luasLingkaran(10);
    // echo '<br>';
    // echo $rumus->kelilingLingkaran(10);
    // echo '<br>';
    // echo $rumus->luaspersegiPanjang(4,5);
    // echo '<br>';
    // echo $rumus->kelilingPersegipanjang(2,5);
    // echo '<br>';
    // echo $rumus->luasSegitiga(2,5);
    // echo '<br>';
    // echo $rumus->kelilingSegitiga(3);

?>