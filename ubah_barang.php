<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "koneksi.php";

    $qry_get_barang=mysqli_query($conn,"select * from barang where id='".$_GET['id']."'");

    $dt_barang=mysqli_fetch_array($qry_get_barang);

    ?>

    <h3>Ubah Barang</h3>

    <form action="proses_ubah_barang.php" method="post">

        <input type="hidden" name="id" value= "<?=$dt_barang['id']?>">

        nama barang :

  <input type="text" name="namabarang" value="<?=$dt_barang['nama_barang']?>" class="form-control">

        tanggal daftar :

  <input type="date" name="tgldaftar" value="<?=$dt_barang['tgl_daftar']?>" class="form-control">

       harga awal :

       <input type="text" name="hargaawal" value="<?=$dt_barang['harga_awal']?>" class="form-control">

       deskripsi :

       <input type="text" name="deskripsi" value="<?=$dt_barang['deskripsi']?>" class="form-control">

      

        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>

