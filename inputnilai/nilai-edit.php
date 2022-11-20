<?php
if(isset($_GET["nis"])){
    $nis = $_GET["nis"];
    $check_nis = "SELECT * FROM nilai WHERE nis = '$nis';";
    include('./nilai-config.php');
    $query = mysqli_query($mysqli, $check_nis);
    $row = mysqli_fetch_array($query);
}
?>

<h1>Edit Data</h1>
<form action="nilai-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa  : </label>
    <input type="number" name="nis" placeholder="Ex. 12003102" /> <br>

    <label for="nama_lengkap">Nama Lengkap  : </label>
    <input type="text" name="nama_lengkap" placeholder="Ex. Firdaus" /> <br>
    
    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 1" /><br>

    <label for="kehadiran">Kehadiran :</label>
    <input type="number" name="kehadiran" placeholder="Ex. 80"><br>

    <label for="tugas">Tugas :</label>
    <input type="number" name="tugas" placeholder="Ex. 80"><br>

    <label for="uts">UTS :</label>
    <input type="number" name="uts" placeholder="Ex. 80"><br>

    <label for="uas">UAS :</label>
    <input type="number" name="uas" placeholder="Ex. 80"><br>

    <input type="submit" name="simpan" value="Simpan Data" /> 
<a href="nilai.php">Kembali</a>
</form>

<?php

if(isset($_POST["simpan"])) {
        $nis = $_POST["nis"];
        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

    // EDIT - Memperbaharui Data
    $query = "
        UPDATE nilai SET namalengkap = '$nama lengkap',
        kelas = '$kelas',
        kehadiran = '$kehadiran',
        tugas = '$tugas',
        UTS = '$UTS',
        UAS = '$UAS'
        WHERE nis = '$nis';
    ";
     include ('./nilai-config.php');
     $update = mysqli_query($mysqli, $query);

     if($update){
        echo "
        <script>
        alert('Data berhasil diperbaharui');
        window.location='nilai.php';
        </script>
        
        ";
     }else{
        echo "
        <script>
        alert('Data berhasil diperbaharui');
        window.location='nilai-edit.php?nis=$nis';
        </script>
        ";  
     }
}