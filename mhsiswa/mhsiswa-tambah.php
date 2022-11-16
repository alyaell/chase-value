<h1>Tambah Data</h1>
<form action="mhsiswa-tambah.php" method="POST">
    <label for="npm">Nomor Pokok Mahasiswa  : </label>
    <input type="number" name="npm" placeholder="Ex. 12003102" /> <br>

    <label for="namamahasiswa">Nama Mahasiswa  : </label>
    <input type="text" name="namamahasiswa" placeholder="Ex. Alyael" /> <br>
    
    <label for="prodi">Prodi :</label>
    <input type="text" name="prodi" placeholder="Informatika" /><br>

    <label for="kehadiran">Kehadiran :</label>
    <input type="number" name="kehadiran" placeholder="Ex. 10%"><br>

    <label for="tugas">Tugas :</label>
    <input type="number" name="tugas" placeholder="Ex. 40%"><br>

    <label for="uts">UTS :</label>
    <input type="number" name="uts" placeholder="Ex. 25%"><br>

    <label for="uas">UAS :</label>
    <input type="number" name="uas" placeholder="Ex. 25%"><br>

    <input type="submit" name="simpan" value="Simpan Data" /> 
    <a href="mhsiswa.php">Kembali</a>
</form>

<?php
    if( isset($_POST["simpan"]) ){
        $npm = $_POST["npm"];
        $namamahasiswa = $_POST["namamahasiswa"];
        $prodi = $_POST["prodi"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        echo $npm . "<br>";
        echo $namamahasiswa . "<br>";
        echo $prodi . "<br>";
        echo $kehadiran . "<br>";
        echo $tugas . "<br>";
        echo $uts . "<br>";
        echo $uas . "<br>";


        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO siswa VALUES
                ('$npm', '$namamahasiswa', '$prodi', '$kehadiran', '$tugas', '$uts', '$uas');
            ";

            include ('./mhsiswa-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                echo "
                    <script>
                            alert('Data berhasil ditambahkan');
                            window.location='mhsiswa.php';
                    </script>
                ";
            }
    }
?>