<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
  </head>
  <body>
<?php

$ar_prodi = ["SI"=> "Sistem Informatika", "TI"=> "Teknik Informatika", 
    "BD"=> "Bisnis Digital"];
$ar_skill = ["HTML"=>10, "CSS"=>10, "Javascript"=>20, "RWD
    Boostrap"=>20, "PHP"=>30, "Python"=>30, "Java"=>50];
$ar_alamat = ["Depok"=> "Depok", "Jakarta" => "Jakarta", 
    "Tanggerang" => "Tanggerang", "Bekasi" => "Bekasi", "Bogor" => "Bogor"];

?>

    <fieldset style="background-color: aliceblue;">
        <legend><b>Form Registrasi IT Club Data Science</b></legend>
            <table>
                <tr>
                    <th><form method="POST"></th>
                </tr>
                <tr>
                    <td>
                        NIM
                    </td>
                    <td>:
                        <input type="text" name="nim" value="" size="30"></br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama 
                    </td>
                    <td>:
                        <input type="text" name="nama" value="" size="30">
                    </td>
                </tr>
                <tr>
                    <td>
                        Jenis Kelamin
                    </td>
                    <td>:
                        <input type="radio" name="jk" value="L" size="30">Laki-laki
                        <input type="radio" name="jk" value="P" size="30">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>
                        Program Studi
                    </td>
                    <td>:
                        <select name="prodi">
                            <?php
                                foreach($ar_prodi as $prodi => $p){ 
                                    ?>
                                
                                    <option value="<?= $prodi ?>"><?= $p ?></option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Skill Programming</td>
                    <td>:
                        <?php 
                            foreach($ar_skill as $skill => $s){
                                ?>
                                
                                <input type="checkbox" name="skill[<?= $skill ?>]" value="<?= $s ?>"><?= $skill ?>
                            <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Alamat
                    </td>
                    <td>:
                        <select name="alamat">
                            <?php
                                foreach($ar_alamat as $alamat => $a){ 
                                    ?>
                                    
                                    <option value="<?= $alamat ?>"><?= $a ?></option>
                            <?php }?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gmail
                    </td>
                    <td>:
                        <input type="gmail" name="gmail" value="" size="30">
                    </td>
                <tr>
                    <td>
                        <button name="proses">Simpan</button>
                    </td>
                </tr>
            </form>
        </table>
    </fieldset>

<?php
error_reporting(0);
if(isset($_POST['proses'])){ 

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];
    $gmail = $_POST['gmail'];
    $skill = $_POST['skill'];
    $total = 0;

    }
?>

<?php
    function skor_skill($total){
        if($total >= 100 && $total <= 170) {
            return "Sangat Baik";
        } elseif ($total >= 60 && $total <= 100) {
            return "Baik";
        } elseif ($total >= 40 && $total <=60) {
            return "Cukup";
        } elseif ($total >= 0 && $total <=40) {
            return "Kurang";
        } else {
            return "Tidak Memadai";
        } 
    }
?>
<?php
    $total = array_sum($skill);
    $kategori = skor_skill($total);
    $gmail = isset($gmail) ? $gmail : '';
?>

<fieldset style="border :1px">
<legend><b>Hasil Belajar Pemrogramming</b></legend>
<table>
    <tr>
        <td>
            NIM
        </td>
        <td>:
            <?= $nim ?>
        </td>
    </tr>
    <tr>
        <td>
            Nama
        </td>
        <td>:
            <?= $nama ?>
        </td>
    </tr>
    <tr>
        <td>
            Jenis Kelamin 
        </td>
        <td>:
            <?= $jk ?>
        </td>
    </tr>
    <tr>
        <td>
            Program Studi
        </td>
        <td>:
            <?= $prodi ?>
        </td>
    </tr>
    <tr>
        <td>
            alamat
        </td>
        <td>:
            <?= $alamat ?>
        </td>
    </tr>
    <tr>
        <td>
            gmail
        </td>
        <td>:
            <?= $gmail ?>
        </td>
    </tr>
    <tr>
        <td>
            Skill pemrogramming
        </td>
        <td>:
            <?= "". implode(", ", array_keys($skill)) ?>
        </td>
    </tr>
    <tr>
    <tr>
        <td>
            Skor Nilai
        </td>
        <td>:
            <?= $total ?>
        </td>
    </tr>
    <tr>
        <td>
            Kategori
        </td>
        <td>:
            <?= $kategori ?>
        </td>
    </tr>
    </tr>
</table>
</fieldset>
</body>
</html>
