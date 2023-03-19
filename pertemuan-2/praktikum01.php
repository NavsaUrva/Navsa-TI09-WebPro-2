<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-8">
            <!-- ini form-->
            <form method="POST">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input id="customer" name="customer" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="Produk" id="Produk_0" type="radio" class="custom-control-input" value="tv"> 
                        <label for="Produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="Produk" id="Produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="Produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="Produk" id="Produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
                        <label for="Produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jmlh" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                    <input id="jmlh" name="jmlh" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-4">
                <!-- ini daftar harga -->
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <?php if(isset($_POST['submit']) && isset($_POST['Produk'])): ?>
    Nama Pemesan : <?= $_POST['customer']?> 
    <br>
    Produk pilihan : <?= $_POST['Produk']?>
    <br>
    Jumlah Beli : <?= $_POST['jmlh']?>
    
    <?php 
        if($_POST['Produk'] == "tv" && $_POST['jmlh'] >=1 ){
            $harga = 4200000 * $_POST['jmlh'];
            echo '<br> TOTAL BELANJA : ' . $harga;
        } elseif($_POST['Produk'] == "kulkas" && $_POST['jmlh'] >=1 ){
            $harga = 3100000 * $_POST['jmlh'];
            echo '<br> TOTAL BELANJA : ' . $harga;
        }elseif($_POST['Produk'] == "mesin cuci" && $_POST['jmlh'] >=1 ){
            $harga =3800000 * $_POST['jmlh'];
            echo '<br> TOTAL BELANJA : ' . $harga; 
        }
    ?>
    <?php
    endif;?>
</body>
</html>