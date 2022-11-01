<?php
if($_POST){
$id=$_POST['id'];
$nama_petugas=$_POST['nama_petugas'];
$username=$_POST['username'];

$level=$_POST['level'];
if(empty($nama_petugas)){
echo "<script>alert('nama tidak boleh kosong');location.href='data.php';</script>";
} elseif(empty($username)){
echo "<script>alert('username tidak boleh kosong');location.href='data.php.php';</script>";
} else {
        include 'koneksi.php';
        $ubah=mysqli_query($conn,"update petugas set nama_petugas='".$nama_petugas."',username='".$username."',level='".$level."' where id = '".$id."'");
    
        if($ubah){
            echo"<script>alert('Sukses ubah data');location.href='darkpan-1.0.0/blankpetugas.php';</script>";
        }else{
            echo"<script>alert('Gagal ubah data');location.href='tambah_petugas.php';</script>";
    
        }
}
}