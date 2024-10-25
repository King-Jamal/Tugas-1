<?php
function Persegi(){
    class Persegi{
        public $sisi;
        public function __construct($sisi){
            $this->sisi = $sisi;
        }
        public function menghitung_luas(){
            $luas = pow($this->sisi,2);
            return $luas;
        }
        public function menghitung_keliling(){
            $keliling=$this->sisi*4;
            return $keliling;
        }
    }
    $bangun_datar=new Persegi(20);
    $luas=$bangun_datar->menghitung_luas();
    $keliling=$bangun_datar->menghitung_keliling();
    $result_k="<br> Keliling Persegi dengan sisi $bangun_datar->sisi adalah $keliling";
    $result_l="<br> Luas Persegi dengan sisi $bangun_datar->sisi adalah $luas";
    echo $result_k;
    echo $result_l;
}

function Persegi_panjang(){
    class Persegi_Panjang{
        public $panjang;
        public $lebar;
        public function __construct($panjang,$lebar){
            $this->panjang=$panjang;
            $this->lebar=$lebar; 
        }
        public function menghitung_keliling(){
            $keliling=2*($this->panjang+$this->lebar);
            return $keliling;
        }
        public function menghitung_luas(){
            $luas=$this->panjang*$this->lebar;
            return $luas;
        }
        
    }
    $bangun_datar=new Persegi_Panjang(20,5);
    $luas=$bangun_datar->menghitung_luas();
    $keliling=$bangun_datar->menghitung_keliling();
    $result_k="<br> Keliling Persegi Panjang dengan panjang $bangun_datar->panjang dan lebar $bangun_datar->lebar adalah $keliling";
    $result_l= "<br> Luas Persegi Panjang dengan panjang $bangun_datar->panjang dan lebar $bangun_datar->lebar adalah $luas";
    echo $result_k;
    echo $result_l;
    
}
function Segitiga(){
    class Segitiga{
        public $alas;
        public $tinggi;
        public function __construct($alas,$tinggi){
            $this->alas=$alas;
            $this->tinggi=$tinggi;
        }
        public function menghitung_luas(){
            $luas=($this->alas*$this->tinggi)/2;
            return $luas;
        }
    }
    $bangun_datar=new Segitiga(20,10);
    $luas=$bangun_datar->menghitung_luas();
    $result_l="<br> Luas Segitiga dengan alas $bangun_datar->alas dan tinggi $bangun_datar->tinggi adalah $luas";
    echo $result_l;
}
function Lingkaran(){
    class Lingkaran{
        public $jari_jari;
        public function __construct($jari_jari){
            $this->jari_jari=$jari_jari;
        }
        public function menghitung_keliling(){
            $keliling=2*3.14*$this->jari_jari;
            return $keliling;
        }
        public function menghitung_luas(){
            $luas=3.14*pow($this->jari_jari,2);
            return $luas;
        }

    }
    $bangun_datar=new Lingkaran(14);
    $keliling=$bangun_datar->menghitung_keliling();
    $luas=$bangun_datar->menghitung_luas();
    $result_k="<br> Keliling Lingkaran dengan jari-jari $bangun_datar->jari_jari adalah $keliling ";
    $result_l="<br> Luas Lingkaran dengan jari-jari $bangun_datar->jari_jari adalah $luas";
    echo$result_k;
    echo $result_l;
}
Persegi();
Persegi_Panjang();
Segitiga();
Lingkaran();
?>