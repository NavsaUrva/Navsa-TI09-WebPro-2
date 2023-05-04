<?php

//Class BMI PASIEN
class bmiPasien {
    //Property
    public $nama, $berat, $tinggi, $umur, $jk;

    //Construct : data diset sesuai user
    function __construct($nama, $berat, $tinggi, $umur, $jk) {
        //Masukan data
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    //Method (Fungsi)
    public function hasilBMI() {
        //Logic
        $tinggi_m = $this->tinggi / 100;
        //Rumus BMI
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi);
    }

    //Method 
    public function statusBMI(){
        $bmi = $this->hasilBMI();
        //Cek data menjadi status
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (Ideal)";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        } else {
            return "Obesitas";
        }
    }
}

//Buat Objek
// $pasien = new bmiPasien("Navsa", "52", "156", "18", "P");
// echo "Nama : " . $pasien->nama . "<br>";
// echo "BMI : " . $pasien->hasilBMI() . "<br>";
// echo "Status BMI : " . $pasien->statusBMI() . "<br>";
