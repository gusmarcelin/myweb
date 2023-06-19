<?php
include 'inc_koneksi.php';

$query = "SELECT * FROM karyawan;";
$sql = mysqli_query($koneksi, $query);
$no = 0;

//while($result = mysqli_fetch_assoc($sql)){
 // echo $result['NAMA']."<>";
//}

//$result = mysqli_fetch_assoc($sql);
//var_dump($result);
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>PENGGAJIAN KARYAWAN</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">PENGGAJIAN KARYAWAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="karyawan.php">KARYAWAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gaji.php">GAJI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bagian.php">BAGIAN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h1>Karyawan</h1>
    <table class="table align-middle table-bordered mt-3">
        <thead>
            <tr>
                <th><center>NO.</center></th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>TELEPON</th>
                <th>ALAMAT</th>
            </tr>
        </thead>
        <tbody>
          <?php
          while($result = mysqli_fetch_assoc($sql)){
          ?>
            <tr>
                <td><center>
                  <?php echo ++$no; ?>.
                </center></td>
                <td><?php echo $result['NAMA']; ?></td>
                <td><?php echo $result['JENIS_KELAMIN']; ?></td>
                <td><?php echo $result['TELEPON']; ?></td>
                <td> <?php echo $result['ALAMAT']; ?></td>
                 <td>
                    <a href="kelola.karyawan.php?ubah=<?php echo $result ['ID_KARYAWAN']; ?>"type="button" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                    <a href="proses_karyawan.php?hapus=<?php echo $result ['ID_KARYAWAN']; ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin Ingin Mengirim Uang???')"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
</table>
    <a href="kelola.karyawan.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i>
        Tambah Data
      </a>
    <!-- Optional JavaScript; choose one of the two! -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>