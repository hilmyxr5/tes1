<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <?php 

    include "koneksi.php";

    $qry_get_petugas=mysqli_query($conn,"select * from petugas where id='".$_GET['id']."'");

    $dt_petugas=mysqli_fetch_array($qry_get_petugas);

    ?>

    <h3>Ubah Petugas </h3>

    <form action="proses_ubah_petugas.php" method="post">

        <input type="hidden" name="id" value= "<?=$dt_petugas['id']?>">

        nama petugas :

  <input type="text" name="nama_petugas" value=   "<?=$dt_petugas['nama_petugas']?>" class="form-control">

        username :

  <input type="username" name="username" value="<?=$dt_petugas['username']?>" class="form-control">

       level :

      <select name="level" id="" class="form-control">

      <option value="<?=$dt_petugas['level']?>"><?=$dt_petugas['level']?></option>
      <option value="admin">Admin</option>
      <option value="petugas">Petugas</option>
      </select>

        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>

