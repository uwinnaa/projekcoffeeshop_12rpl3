<?php


include "../controllers/c_koneksi.php";

//htmlentities untuk mengantisipasi sistem tidak menjalankan tag html
$kode_order = (isset($_POST['kode_order'])) ? htmlentities($_POST['kode_order']) : "";
$meja = (isset($_POST['meja'])) ? htmlentities($_POST['meja']) : "";
$pelanggan = (isset($_POST['pelanggan'])) ? htmlentities($_POST['pelanggan']) : "";


if (!empty($_POST['edit_order_validate'])) {

    $select = mysqli_query($conn, "SELECT * FROM tb_order WHERE id_order='$kode_order'");

    $query = mysqli_query($conn, "UPDATE tb_order SET meja='$meja', pelanggan='$pelanggan' WHERE id_order='$kode_order'");

    if (!$query) {
        $message = '<script>alert("Failed to change data!");            
                    window.location="../order"</script>';

    } else {
        $message = '<script>alert("Successfully changed data!");          
                    window.location="../order"</script>';
    }
}


echo $message;
?>