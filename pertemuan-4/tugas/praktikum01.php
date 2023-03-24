<?php
require_once 'header.php';
require_once 'sidebar.php';

// Array Asosiatif
$nilai1 = ["id" => 1, "nim" => 0110222006, "uts" => 90, "uas" => 95, "tugas" => 99];
$nilai2 = ["id" => 2, "nim" => 0110222007, "uts" => 91, "uas" => 96, "tugas" => 98];
$nilai3 = ["id" => 3, "nim" => 0310222006, "uts" => 92, "uas" => 97, "tugas" => 97];
$nilai4 = ["id" => 4, "nim" => 0410222006, "uts" => 93, "uas" => 98, "tugas" => 96];
$nilai5 = ["id" => 5, "nim" => 0110232006, "uts" => 94, "uas" => 99, "tugas" => 95];

// Array Multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4, $nilai5];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="container">
        <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIM</th>
              <th scope="col">UTS</th>
              <th scope="col">UAS</th>
              <th scope="col">Tugas</th>
              <th scope="col">Nilai Akhir</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($kumpulan_nilai as $nilai) : ?>

              <tr>
                <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                <td> <?= $nilai["id"] ?> </td>
                <td> <?= $nilai["nim"] ?> </td>
                <td> <?= $nilai["uts"] ?> </td>
                <td> <?= $nilai["uas"] ?> </td>
                <td> <?= $nilai["tugas"] ?> </td>
                <td> <?= number_format($nilai_akhir, 2, ",", ".") ?> </td>
              </tr>

            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>