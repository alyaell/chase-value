<?php
    if ( isset($_GET["npm"]) ){
        $npm = $_GET["npm"];
        $check_npm = "SELECT * FROM siswa WHERE npm = '$npm';";
        include('./mhsiswa-config.php');
        $querry = mysqli_query($mysqli, $check_npm);
        $row = mysqli_fetch_array($querry);
    }
?>

<h1>Edit Data</h1>
<form action="mhsiswa-edit.php" method="POST">
    <label for="npm"> Nomor Penduduk Mahasiswa :</label>
    <input value="<?php echo $row["npm"]; ?>" readonly type="number" name="npm" placeholder="Ex. 12001142" /><br>

    <label for="namamahasiwa">namamahasiswa :</label>
    <input value="<?php echo $row["namamahasiswa"]; ?>" type="text" name="namamahasiswa" placeholder="Ex. Alyael" /><br>

    <label for="prodi"> Prodi :</label>
    <input value="<?php echo $row["prodi"]; ?>" type="text" name="prodi" placeholder="Informatika" /><br>

    <label for="kehadiran"> Kehadiran :</label>
    <input value="<?php echo $row["kehadiran"]; ?>" type="number" name="kehadiran" /><br>

    <label for="tugas"> Tugas :</label>
    <input value="<?php echo $row["tugas"]; ?>" type="number" name="tugas" placeholder="Ex. 40%" /><br>

    <label for="uts"> UTS :</label>
    <input value="<?php echo $row["uts"]; ?>" type="number" name="uts" placeholder="Ex. 25%" /><br>

    <label for="nilai"> UAS :</label>
    <input value="<?php echo $row["uas"]; ?>" type="number" name="uas" placeholder="Ex. 25%" /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="mhsiswa.php">kembali</a>
</form>

<?php

    if (isset($_POST["simpan"])) {
        $npm = $_POST["npm"];
        $namamahasiswa = $_POST["namamahasiswa"];
        $prodi = $_POST["prodi"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        $query ="
        UPDATE siswa SET namamahasiswa = '$namamahasiswa',
        prodi = '$prodi',
        kehadiran = '$kehadiran',
        tugas = '$tugas',
        uts = '$uts',
        uas = '$uas'
        WHERE npm = '$npm';
    ";
        
        include ('./mhsiswa-config.php');
        $update = mysqli_query ($mysqli, $query);


        if ($update){
            echo "
                <script>
                    alert('Data Berhasil Diperbaharui');
                    window.location='mhsiswa.php';
                </script>
            ";
        }else {
            echo "
            <script>
                alert('Data Gagal');
                window.location='mhsiswa-edit.php?nis=$nis';
            </script>
            ";
        }
    }
?>