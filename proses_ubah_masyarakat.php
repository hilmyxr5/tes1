<?php
if($_POST){
$id=$_POST['id'];
$nama=$_POST['name'];
$username=$_POST['username'];
$telp=$_POST['telp'];
if(empty($nama)){
echo "<script>alert('nama tidak boleh kosong');location.href='data.php';</script>";
} if(empty($username)){
echo "<script>alert('username tidak boleh kosong');location.href='data.php.php';</script>";
}elseif(empty($telp)){
    echo "<script>alert('telp tidak boleh kosong');location.href='data.php.php';</script>";
    
} else {
        include 'koneksi.php';
        $ubah=mysqli_query($conn,"update masyarakat set nama='".$nama."',username='".$username."',telp='".$telp."' where id = '".$id."'");
    
        if($ubah){
            echo"<script>alert('Sukses ubah data');location.href='darkpan-1.0.0/blankmasyarakat.php';</script>";
        }else{
            echo"<script>alert('Gagal ubah data');location.href='tambah_petugas.php';</script>";
    
        }
}
}