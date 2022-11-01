<?php
if ($_GET['id']){
include "koneksi.php";
$qry_hapus=mysqli_query($conn, "delete from petugas where id= '".$_GET['id']."'");

if ($qry_hapus){
    echo "<script>alert('sukses'); location.href='petugas/datapetugas.php'; </script>";
} else  {
echo "<script>alert('gagal'); location.href='petugas/barang/php'; </script>";
}
}



?>