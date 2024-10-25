<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Kalkulasi Tanah Orang Tua</h1>
    <div class="content">
        <div class="main-content">
          <div class="persegi">
             <h3>Luas & Keliling Tanah (Persegi)</h3>
             <form action="" method="post" >
                  <label for="sisi">Sisi: </label>
                  <br>
                  <input type="number" name="sisi" />
                  <br>
                  <button type="submit" name="persegi">Submit</button>
                  <p>Hasil: </p>
                    <div class="result">
                      <p id="keliling_p"></p>
                      <p id="luas_p"></p>
                  </div>
            </form>
          </div>
        <div class="persegi_panjang">
            <h3>Luas & Keliling Tanah (Persegi Panjang)</h3>
            <form action="" method="post">
                <label for="panjang">Panjang: </label>
                <br>
                <input type="number" name="panjang" />
                <br>
                <label for="lebar">Lebar: </label>
                <br>
                <input type="number" name="lebar">
                <br>
                <button type="submit" name="persegi_panjang">Submit</button>
                <p>Hasil: </p>
                    <div class="result">
                      <p id="keliling_pp"></p>
                      <p id="luas_pp"></p>
                    </div>
            </form>
        </div>
        <div class="segitiga">
            <h3>Luas Tanah (Segitiga)</h3>
            <form action="" method="post">
              <label for="alas">Alas: </label>
              <br>
              <input type="number" name="alas" />
              <br>
              <label for="tinggi">Tinggi: </label>
              <br>
              <input type="number" name="tinggi">
              <br>
              <button type="submit" name="segitiga">Submit</button>
              <p>Hasil: </p>
                  <div class="result">
                    <p id="luas_s"></p>
                  </div>
            </form>
        </div>
        <div class="lingkaran">
            <h3>Luas & Keliling Tanah (Lingkaran)</h3>
            <form action="" method="post">
              <label for="jari-jari">Jari-Jari: </label>
              <br>
              <input type="number" name="jari-jari" />
              <br>
              <button type="submit" name="lingkaran">Submit</button>
              <p>Hasil: </p>
                  <div class="result">
                    <p id="keliling_l"></p>
                    <p id="luas_l"></p>
                  </div>
            </form>
        </div>
      </div>
    </div>
</body>
</html>
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