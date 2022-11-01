<?php

if($_POST){

    $nama_barang=$_POST['nama_barang'];
    $tgl_daftar=$_POST['tgl_daftar'];
    $harga_awal=$_POST['harga_awal'];
    $deskripsi=$_POST['deskripsi'];
    $foto=$_POST ['foto'];

    

    if(empty($nama_barang)){
        echo "<script>
                alert('nama barang tidak boleh kosong');
                location.href='tambah_barang.php';
              </script>";
    } elseif(empty($tgl_daftar)){
        echo "<script>
                alert('tanggal daftar tidak boleh kosong');
                location.href='tambah_barang.php';
            </script>";
    } elseif(empty($harga_awal)){
        echo "<script>
                alert('harga awal tidak boleh kosong');
                location.href='tambah_barang.php';
            </script>";
    } elseif(empty($deskripsi)){
        echo "<script>
                alert('deskripsi tidak boleh kosong');
                location.href='tambah_barang.php';
            </script>";
    } if (empty($foto)){
        echo "<script>alert('foto tidak boleh kosong');   location.href='tambah_barang.php';   </script>";


    }else{

        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into barang (nama_barang, tgl_daftar, harga_awal, deskripsi, foto) value ('".$nama_barang."', '".$tgl_daftar."', '".$harga_awal."', '".$deskripsi."', '".$foto."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan barang');location.href='petugas../barang.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan barang');location.href='tambah_barang.php';</script>";

        }

    }

}


        
    

?>