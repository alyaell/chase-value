<?php
if(isset($_GET["nis"])){
    $kodebarang = $_GET["nis"];

    $query = "
     DELETE FROM nilai
     WHERE nis = '$nis';
    ";

    include ('./nilai-config.php');
    $update = mysqli_query($mysqli, $query);

    if($update){
        echo "
        <script>
        alert('Data berhasil dihapus');
        window.location='nilai.php';
        </script>
        ";
    }
}
?>

<?php 
include ('./nilai-config.php');
$data=mysqli_query($mysqli,"DELETE FROM nilai WHERE nis='".$_GET["nis"]."'");
header("location:nilai.php");
?>