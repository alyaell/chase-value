<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
    <title>Aplikasi CRUD</title>
</head>
<body>
  <div class="container">
  <table class="table table-striped table-hover mt-5">
    <thead class="table-dark">
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Telepon</th>
    </thead>

    <?php
        $sqlGet = "SELECT * FROM tb_kampus";
        $query = mysqli_query ($conn, $sqlGet);

        while($data = mysqli_fetch_array($query)) {
            echo "
        <tbody>
        <tr>
            <td>$data[NIM]</td>
            <td>$data[Nama]</td>
            <td>$data[Jurusan]</td>
            <td>$data[Alamat]</td>
            <td>$data[Telp]</td>
        </tr> 
        </tbody>
         ";
        }
    ?>
    </table>
  </div>  
</body>
</html>


