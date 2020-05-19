<?php
    $nis = $_POST["nis"];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ipa = $_POST['ipa'];
    $ips = $_POST['ips'];
    $mat = $_POST['mat'];
    $ind = $_POST['ind'];

    $total = $ipa + $ips + $mat + $ind;
    $rata = $total / 4;

    $keterangan = '';
    if ($rata >= 81) {
        $keterangan = 'DITERIMA';
    } elseif ($rata >= 70) {
        $keterangan = 'DIPERTIMBANGKAN';
    } else {
        $keterangan = 'TIDAK DITERIMA';
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hasil Nilai</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-5">HASIL</h1>
        <h3 class="text-center"> RATA RATA : <?= $rata; ?></h3>
        <h3 class="text-center">KETERANGAN : <?= $keterangan; ?></h3>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>