<?php
if($_GET['id']){
include "koneksi.php";
$qry_hapus=mysqli_query($conn,"delete from masyarakat where id='".$_GET['id']."'");

if($qry_hapus) {echo "<script>alert('Sukses hapus masyarakat');location.href='darkpan-1.0.0/blankmasyarakat.php';</script>";

} else { echo "<script>alert('Gagal hapus masyarakat');location.href='darkpan-1.0.0/blankmasyarakat.php';</script>"; }
}
?>

       
