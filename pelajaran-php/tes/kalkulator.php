<form action="" method="post">

    Bilangan 1 :
    <input type="number" name="bil1"><br>

    Bilangan 2 :
    <input type="number" name="bil2"><br>

    <input type="submit" name="tambah" value="tambah">
    <input type="submit" name="kurang" value="kurang">
    <br>
    <input type="submit" name="kali" value="kali">
    <input type="submit" name="bagi" value="bagi">

</form>

<?php 

    if (isset($_POST['tambah'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil = $bil1+$bil2;
        echo $hasil;
    }

    if (isset($_POST['kurang'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $total = $bil1-$bil2;
        echo $total;
    }

    if (isset($_POST['kali'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil = $bil1*$bil2;
        echo $hasil;
    }

    if (isset($_POST['bagi'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil = $bil1/$bil2;
        echo $hasil;
    }

?>