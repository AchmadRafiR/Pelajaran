<form action="" method="post">
    Barang :
    <input type="text" name="barang">
    <br>

    Stock :
    <input type="number" name="stock">
    <br>
    <input type="submit" name="simpan" values="simpan">
</form>

<?php 

    $db = "dbtoko";
    $user = "localhost";
    $host= "root";
    $password = "";

    $koneksi = new mysqli($user, $host, $password, $db);

?>

<?php 

    if (isset($_POST['simpan'])) {

        if (isset($_GET['id'])) {
            $barang = $_POST['barang'];
            $stock = $_POST['stock'];

            $sql = "UPDATE tblbarang SET barang='$barang' stock = $stock WHERE idbarang = $id ";
            $koneksi->query($sql);
        }
    }

    $sql = "SELECT * FROM tblbarang";
    $hasil = $koneksi->query($sql);


    echo "<table border=2>";
    echo "<tr>
            <th>No</th>
            <th>Barang</th>
            <th>Stock</th>
            <th>Update</th>
        </tr>";
    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td><a href=?id".$row[0]."</a></td>";
            echo "</tr>";
        }
    }
    echo "</table>";

?>



    
        
    
