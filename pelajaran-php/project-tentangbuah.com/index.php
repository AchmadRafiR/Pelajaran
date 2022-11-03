<?php 

require_once('db.php');

if (isset($_GET['id']) && isset($_GET['menu'])) {
    $id = $_GET['id'];
    $menu = $_GET['menu'];

        if ($menu=='hapus') {
            $buah = '';
            $deskripsi = '';
            $harga = '';
            $sql = "DELETE FROM tblbuah WHERE idbuah = $id";
            $koneksi->query($sql);
            header("location:index.php");
        }else {
            $sql = "SELECT * FROM tblbuah WHERE idbuah=$id";
            $hasil = $koneksi->query($sql);
            $row = $hasil->fetch_array();
                $buah = $row[1];
                $deskripsi = $row[2];
                $harga = $row[3]; 
            // print_r($row);
            
        }

   // echo $sql;
    }else {
        $buah = '';
        $deskripsi = '';
        $harga = '';
    }


    // $buah ='apel';
    // $deskripsi = 'apel merah';
    // $harga = 1000;

?>

<form action="" method="post">
    Buah :
    <input type="text" name="buah" value="<?= $buah ?>">
    <br>
    
    Deskripsi :
    <input type="text" name="deskripsi" value="<?= $deskripsi ?>">
    <br>

    Harga :
    <input type="number" name="harga" value="<?= $harga ?>">
    <br>
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php 

    

    if (isset($_POST['simpan'])) {
        
        if (isset($_GET['menu'])) {
            $menu = $_GET['menu'];
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];
            $sql = "UPDATE tblbuah SET buah='$buah', deskripsi='$deskripsi', harga = $harga WHERE idbuah = $id ";
            $koneksi->query($sql);
            header("location:index.php");

        }else {
            $buah = $_POST['buah'];
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];
            $sql = "INSERT INTO tblbuah (buah,deskripsi,harga) VALUES ('$buah','$deskripsi',$harga)";
            $koneksi->query($sql);
        }

    }

    

    $sql = "SELECT * FROM tblbuah";
    // echo $sql;

    $hasil = $koneksi->query($sql);
    // print_r($hasil);
    // echo $hasil->num_rows;

    echo '<table border=5>';
    echo '<tr>
        <th>idbuah</th> 
        <th>buah</th>
        <th>deskripsi</th>
        <th>harga</th>
        <th>gambar</th>
        <th>hapus</th> 
        <th>ubah</th>
    </tr>';
    
    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td>'.$row[4].'</td>';
            echo '<td><a href="?id='.$row[0].'&menu=hapus"> Hapus </a></td>';
            echo '<td><a href="?id='.$row[0].'&menu=edit"> Edit </a></td>';
            echo '</tr>';
        }
    } else {
        echo "kosong";
    }


    echo '</table>';
    
?>