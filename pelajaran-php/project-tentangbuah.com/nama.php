<?php 

    $db = "dbteman";
    $host = "localhost";
    $user = "root";
    $password = "";
    $koneksi = new mysqli($host,$user,$password,$db)

?>

<form action="" method="post">
    Nama :
    <input type="text" name="nama">
    <br>

    Alamat :
    <input type="text" name="alamat">
    <br>

    Asal Sekolah :
    <input type="text" name="sekolah">
    <br>

    <input type="submit" name="simpan" values="simpan">
</form>

<?php 

    if (isset($_GET['id']) && isset($_GET)) {
        $id = $_GET['id'];
        $menu = $_GET['menu'];
        $sql = "SELECT * FROM tblbuah WHERE idbuah=$id";
            $hasil = $koneksi->query($sql);
            $row = $hasil->fetch_array();
                $nama = $row[1];
                $alamat = $row[2];
                $sekolaj = $row[3]; 
    }



    if (isset($_GET['simpan'])) {
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];
        $sekolah = $_GET['sekolah'];

        $sql = "INSERT INTO tblteman (nama,alamat,sekolah) VALUES ('$nama','$alamat','$sekolah')";
        $koneksi->query($sql);
    }

    
    $sql = "SELECT * FROM tblteman";
    $hasil = $koneksi->query($sql);

    echo '<table border>';
    echo '<tr>
        <th>idnama</th>
        <th>nama</th>
        <th>alamat</th>
        <th>asalsekolah</th>
    </tr>';

    if ($hasil->num_rows > 0) {
            while ($row=$hasil->fetch_array()) {
                echo '<tr>';
                echo '<td>'.$row[0].'</td>';
                echo '<td>'.$row[1].'</td>';
                echo '<td>'.$row[2].'</td>';
                echo '<td>'.$row[3].'</td>';
                echo '</tr>';
            }
        } else {
            echo "kosong";
        }

    echo '</table>';


?>