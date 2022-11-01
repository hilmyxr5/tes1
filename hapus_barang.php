<?php 

if ($_GET['id']){
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"delete from barang where id= '".$_GET['id']."'");

    if($qry_hapus){
        echo "<script>alert('sukses'); location.href='index.php';   </script>"; }
    else($qry_hapus){
        echo "<script>alert('gagal'); location.href='index.php'; </script>"; }

    }

?> 



   
