<?php
if($_POST){
$id=$_POST['id'];
$nama=$_POST['namabarang'];
$tanggaldaftar=$_POST['tgldaftar'];
$hargaawal=$_POST['hargaawal'];
$deskripsi=$_POST['deskripsi'];
if(empty($nama)){
echo "<script>alert('nama tidak boleh kosong');location.href='data.php';</script>";}
elseif(empty($tanggaldaftar)){
echo "<script>alert('tanggal daftar tidak boleh kosong');location.href='data.php.php';</script>";} 
elseif(empty($hargaawal)){
echo "<script>alert('harga awal tidak boleh kosong');location.href='data.php.php';</script>";}
elseif(empty($deskripsi)){
    echo "<script>alert('deskripsi tidak boleh kosong');location.href='data.php.php';</script>";} 
    else {
        include 'koneksi.php';
        $ubah=mysqli_query($conn,"update barang set nama_barang='".$nama."',tgl_daftar='".$tanggaldaftar."',harga_awal='".$hargaawal."',deskripsi='".$deskripsi."' where id = '".$id."'");
    
        if($ubah){
            echo"<script>alert('Sukses ubah data');location.href='darkpan-1.0.0/blankbarang.php';</script>";
        }else{
            echo"<script>alert('Gagal ubah data');location.href='tambah_petugas.php';</script>";
    
        }
}
}