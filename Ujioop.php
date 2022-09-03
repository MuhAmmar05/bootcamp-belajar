<?php

class kalkulator{
    public float $daya = 0;

    public function isidaya($dayamasuk){
        $this->daya=$this->daya+$dayamasuk;
    }
    public function tambah($angka1,$angka2){
        echo $angka1 + $angka2."<br>";
    }
    public function kurang($angka1, $angka2){
        echo $angka1 - $angka2;
    }
    public function kali($angka1, $angka2){
        echo $angka1 * $angka2."<br>";
    }
    public function bagi($angka1, $angka2){
        if($angka2<=0){
            echo "tidak terhingga";
        }else{
            echo $angka1 / $angka2."<br>";
        }
    }
    public function cekdaya($konsumsidaya, $pesan){
        if($this->daya>=$konsumsidaya){
            $this->daya -= $konsumsidaya;
            echo "sisa daya".$this->daya;
            return true;
        }
            echo $pesan;
            return false;
        
    }
}
    $runkalkulator = new kalkulator();
    $runkalkulator->isidaya(80);
    $runkalkulator->tambah(10,5);
    $runkalkulator->cekdaya(10,"daya tidak cukup");
?>