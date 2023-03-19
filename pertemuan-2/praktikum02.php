<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form nilai</title>
</head>

<body>
<form method="POST">
  Nama : <input type="text" name="nama" value="" size="30"></br>
  Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"><br>
  Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"><br>
  Nilai Tugas : <input type="text" name="nilai_tugas" value="" size="6"><br>
  <button name="proses">Simpan</button>
</form>

<?php
error_reporting(0);
$nama = $_POST ['nama'];
$nilai_uts = $_POST ['nilai_uts'];
$nilai_uas = $_POST ['nilai_uas'];
$nilai_tugas = $_POST ['nilai_tugas'];
$tombol = $_POST ['proses'];

// variabel total nilai
$total_nilai = $nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100;

//Logic Status
$status;
if ($total_nilai >= 55) { 
  $status = "Lulus";
} 
else {
  $status = "Tidak Lulus";
}

// logic grade
if($total_nilai >= 85 && $total_nilai <= 100) $grade = "A";
elseif ($total_nilai >= 70 && $total_nilai <= 84) $grade = "B";
elseif ($total_nilai >= 56 && $total_nilai <= 69) $grade = "C";
elseif ($total_nilai >= 36 && $total_nilai <= 55) $grade = "D";
elseif ($total_nilai >= 0 && $total_nilai <= 35) $grade = "E";
else $grade = "";

//logic predikat
 switch ($grade) {
  case 'A': $predikat = 'Sangat Baik' ; break;
  case 'B': $predikat = 'Baik' ; break;
  case 'C': $predikat = 'Cukup' ; break;
  case 'D': $predikat = 'Kurang Baik' ; break;
  case 'E': $predikat = 'Tidak Baik' ; break;
  
  default: $predikat = '' ;
 }
 if(isset($tombol)) { ?>
 
 Nama Siswa : <?= $nama ?><br>
 Nilai UTS : <?= $nilai_uts ?><br>
 Nilai UAS : <?= $nilai_uas ?><br>
 Nilai Tugas : <?= $nilai_tugas ?><br>
 Total Nilai : <?= $total_nilai ?><br>
 Keterangan : <?= $status ?><br>
 Grade : <?= $grade ?><br>
 Predikat : <?= $predikat ?>
<?php } ?>


</body>
</html>