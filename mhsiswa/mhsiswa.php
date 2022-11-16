<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Data Nilai</title>
  </head>
  <body>
    <h1>This Data Nilai Mahasiswa!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



<?php
    include('./mhsiswa-config.php');
    echo "<a href='mhsiswa-tambah.php'>Tambah Data</a>";
    echo "<hr>";
    
    // Menampilkan data nilai database
    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli," SELECT * FROM siswa ");
    while($row = mysqli_fetch_array($data)){

        $nilai_akhir=($row["kehadiran"]*0.1+$row["tugas"]*0.4+$row["uts"]*0.25+$row["uas"]*0.25);
        $tabledata .= "
            <tr>
                <td>".$row["npm"]."</td>
                <td>".$row["namamahasiswa"]."</td>
                <td>".$row["prodi"]."</td>
                <td>".$row["kehadiran"]."</td>
                <td>".$row["tugas"]."</td>
                <td>".$row["uts"]."</td>
                <td>".$row["uas"]."</td>
                <td>".$nilai_akhir."</td>
                <td>

                    <a href='mhsiswa-edit.php?npm=".$row["npm"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='mhsiswa-hapus.php?npm=".$row["npm"]."'
                    onclick='return confirm(\"aduuuu yakin nii mo di APUSS?\");'>Hapus</a>
                </td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpadding=5 border=1 cellspacing=0>
            <tr>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>
                <th>Kehadiran</th>
                <th>tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>