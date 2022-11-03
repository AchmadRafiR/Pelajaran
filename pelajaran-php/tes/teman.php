<form action="" methos="post">
    Nama :
    <input type="text" name="nama">
    <br>
    
    Alamat :
    <input type="text" name="alamat">
    <br>

    Sekolah :
    <input type="text" name="asalsekolah">
    <br>

    <input type="submit" name="simpen" value="simpan">
</form>

<?php 

    $db = 'dbteman';
    $user = 'localhost';
    $host = 'root';
    $password = '';
    
    $koneksi = new mysqli($user, $host, $password, $db);

?>

<?php 

    $sql = "SELECT * FROM tblteman";
    $hasil = $koneksi->query($sql);

    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $asalsekolah = $_POST['asalsekolah'];

        $sql = "INSERT INTO tblteman (nama, alamat, asalsekolah) VALUES ('$nama','$alamat', '$asalsekolah')";
        $koneksi->query($sql);
    
    }

    echo "<table border=1>";
    echo "<tr>
            <th>idnama</th>
            <th>nama</th>
            <th>alamat</th>
            <th>Asal sekolah</th>
        </tr>";

    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo "<tr>";
            echo  "<td>".$row[0]."</td>";
            echo  "<td>".$row[1]."</td>";
            echo  "<td>".$row[2]."</td>";
            echo  "<td>".$row[3]."</td>";
            echo "</tr>";
        }
    }

    echo "</table>";

?>
