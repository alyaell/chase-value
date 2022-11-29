<?php 
include('koneksi.php');
if (isset($_POST["edit"])) {
$id_menu = $_POST['id_menu'];
$nama_menu = $_POST['nama_menu'];
$jenis_menu = $_POST['jenis_menu'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

$query ="
UPDATE produk SET nama_menu = '$nama_menu',
jenis_menu = '$jenis_menu',
stok = '$stok',
harga = '$harga',
gambar = '$nama_file',
PTS = '$PTS'
PAS = '$PAS'
WHERE id_menu = '$id_menu';
";




if($edit)
	header('location: daftar_menu.php');
else
	echo "Edit Menu Gagal";


 ?>