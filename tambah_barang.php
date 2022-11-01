<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <h3>Tambah Barang</h3>

    <form action="proses_tambah_barang.php" method="post">

    foto :

    <input type="file" name="foto" value="" class="form-control">

    nama barang :

    <input type="text" autocomplete="off" name="nama_barang" value="" class="form-control">
    
    tanggal daftar :

    <input type="date" name="tgl_daftar" value="" class="form-control">

    harga awal :

    <input type="text" name="harga_awal" value="" class="form-control">
    
    Deskripsi :

    <input type="text" name="deskripsi" value="" class="form-control">

    <br>
    
    <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>