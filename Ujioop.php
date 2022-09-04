<?php

class kalkulator{
    public float $daya = 0;

    public function isidaya($dayamasuk){
        $this->daya=$this->daya+$dayamasuk;
    }
    public function tambah($angka1,$angka2){
        if($this->cekdaya(10)==true){
            echo "<br>"."hasil: ".$angka1 + $angka2."<br>";
        }
    }
    public function kurang($angka1, $angka2){
        if($this->cekdaya(10) == true){
            echo "<br>"."hasil: ".$angka1 - $angka2."<br>";
        }
    }
    public function kali($angka1, $angka2){
        if($this->cekdaya(10) == true){
            echo "<br>"."hasil: ".$angka1 * $angka2."<br>";
        }
    }
    public function bagi($angka1, $angka2){
        if($this->cekdaya(10) == true){
            if($angka2<=0){
                echo "tidak terhingga";
            }else{
                echo "<br>"."hasil: ".$angka1 / $angka2."<br>";
            }
        }
    }
    public function pangkat($angka1,$angka2,$hasil){
        if($this->cekdaya(10) == true){
            $hasil=pow($angka1,$angka2);
            if($hasil>=1000000){
                echo "nilai diluar batas yang ditentukan";
            }else{
                echo "<br>"."hasil: ".$hasil;
            }
        }
    }
    public function cekdaya($konsumsidaya){
        if($this->daya>=$konsumsidaya){
            $this->daya -= $konsumsidaya;
            echo "sisa daya".$this->daya;
            return true;
        } else{
            echo "daya tidak cukup";
            return false;
        }
        
    }
}

class kalkulatorHemat extends kalkulator{
    public function tambahhemat($angka1, $angka2)
    {
        if ($this->cekdaya(5) == true) {
            echo "<br>" . "hasil: " . $angka1 + $angka2 . "<br>";
        }
    }
    public function kuranghemat($angka1, $angka2)
    {
        if ($this->cekdaya(5) == true) {
            echo "<br>" . "hasil: " . $angka1 - $angka2 . "<br>";
        }
    }
    public function kalihemat($angka1, $angka2)
    {
        if ($this->cekdaya(5) == true) {
            echo "<br>" . "hasil: " . $angka1 * $angka2 . "<br>";
        }
    }
    public function bagihemat($angka1, $angka2)
    {
        if ($this->cekdaya(5) == true) {
            if ($angka2 <= 0) {
                echo "tidak terhingga";
            } else {
                echo "<br>" . "hasil: " . $angka1 / $angka2 . "<br>";
            }
        }
    }
    public function pangkathemat($angka1, $angka2, $hasil)
    {
        if ($this->cekdaya(5) == true) {
            $hasil = pow($angka1, $angka2);
            if ($hasil >= 1000000) {
                echo "nilai diluar batas yang ditentukan";
            } else {
                echo "<br>" . "hasil: " . $hasil;
            }
        }
    }
}

    $runhemat = new kalkulatorHemat();
    $runhemat->isidaya(80);
    $runhemat->tambah(3,4);
    $runhemat->kurang(3,4);
    $runhemat->kali(3,4);
    $runhemat->bagi(3,4);
    $runhemat->pangkat(3,4,0);
    $runhemat->tambahhemat(3,4);
    $runhemat->kuranghemat(3,4);
    $runhemat->kalihemat(3,4);
    $runhemat->bagihemat(3,4);
    $runhemat->pangkathemat(3,4,0);
?>