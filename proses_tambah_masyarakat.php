<?php

if($_POST){

    $nama=$_POST['nama_masyarakat'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $telp=$_POST['telp'];

    

    if(empty($nama)){
        echo "<script>
                alert('nama masyarakat tidak boleh kosong');
                location.href='tambah_masyarakat.php';
              </script>";
    } elseif(empty($username)){
        echo "<script>
                alert('username tidak boleh kosong');
                location.href='tambah_masyarakat.php';
            </script>";
    } elseif(empty($password)){
        echo "<script>
                alert('harga awal tidak boleh kosong');
                location.href='tambah_masyarakat.php';
            </script>";
    } elseif(empty($telp)){
        echo "<script>
                alert('telp tidak boleh kosong');
                location.href='tambah_masyarakat.php';
            </script>";
    }else{

        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into masyarakat(nama, username, password, telp) value ('".$nama."', '".$username."', '".md5($password)."', '".$telp."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan masyarakat');location.href='darkpan-1.0.0/blankmasyarakat.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan masyarakat');location.href='tambah_masyarakat.php';</script>";

        }

    }

}


        
    

?>