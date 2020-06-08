<?php
include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ipa = $_POST['ipa'];
$ips = $_POST['ips'];
$mat = $_POST['mat'];
$ind = $_POST['ind']; // 70

$total = $ipa + $ips + $mat + $ind;
$rata = $total / 4;

$query = "  insert into peserta (nis, nama, alamat, ipa, ips, mat, ind, rata) 
            values ('$nis', '$nama', '$alamat', $ipa, $ips, $mat, $ind, $rata)";

if ($mysqli->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}
?>