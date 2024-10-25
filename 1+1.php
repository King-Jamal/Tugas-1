<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
        font-family: Gevena;
        box-sizing: border-box;
      }
      .content{
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .main-content{
        display: inline-grid;
        grid-template-columns: auto auto ;
        row-gap: 20px;
        column-gap: 20px;
        padding: 20px;
        
      }
      .result{
        padding: 10px;
        border: 2px solid black;
        min-height: 50px;
        width: 400px;
        margin-top: 10px;
        border-radius: 8px;
      }
      h1{
        text-align: center;
      }
      h3{
        padding-top: 16px;
        text-align: center;
      }
      input{
        border-radius: 8px;
        width: 400px;
        height: 30px;
      }
      label{
        font-family: cursive;
        font-style: italic;
        font-size: 16px;
        display: inline-block;
      }
      form{
        padding: 8px;
      }
      button{
        margin-top: 10px;
        padding: 4px;
        width: 60px;
        font-size: 14px;
        border-radius: 8px;
      }
      .persegi,.persegi_panjang,.segitiga,.lingkaran{
        padding: 0 20px;
        width: 450px;
        min-height: 250px;
        border: 2px solid black;
        border-radius: 8px;
      }
    </style>
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
# target form melalui button 
if(isset($_POST['persegi_panjang'])){
  #target data
    if(isset($_POST['panjang'])&&isset($_POST['lebar'])){
      #deklarasikan data
        $panjang=$_POST["panjang"];
        $lebar=$_POST["lebar"];
        #buat class untuk bangun ruang
        class Persegi_panjang {
            #deklarasikan properti
            public $panjang;
            public $lebar;
            public function __construct($panjang,$lebar){
              #akses properti dari parameter
              $this->panjang = $panjang;
              $this->lebar = $lebar;
            }
            public function menghitung_luas(){  
              $luas=$this->panjang*$this->lebar;
              return $luas;
            }
            public function menghitung_keliling(){
              $keliling=2*($this->panjang+$this->lebar);
              return $keliling;
            }
            
        }
        $persegi_panjang=new Persegi_panjang($panjang,$lebar);
        $luas=$persegi_panjang->menghitung_luas();
        $keliling=$persegi_panjang->menghitung_keliling();
        echo "<script>document.getElementById('keliling_pp').innerHTML='Keliling Persegi Panjang dengan panjang $persegi_panjang->panjang dan lebar $persegi_panjang->lebar adalah $keliling'</script>";
        echo "<script>document.getElementById('luas_pp').innerHTML='Keliling Persegi Panjang dengan panjang $persegi_panjang->panjang dan lebar $persegi_panjang->lebar adalah $luas'</script>"; 
    }
    
}

if(isset($_POST['persegi'])){
    if(isset($_POST['sisi'])){
        $sisi=$_POST['sisi'];
    class Persegi{
        public $sisi;
        public function __construct($sisi){
          $this->sisi = $sisi;
      }
        public function menghitung_luas(){
            $luas=$this->sisi*$this->sisi;
            return $luas;
        }
        public function menghitung_keliling(){
            $keliling=$this->sisi*4;
            return $keliling;
        }
    }
    $persegi=new Persegi($sisi);
      $luas=$persegi->menghitung_luas();
      $keliling=$persegi->menghitung_keliling();
      echo "<script>document.getElementById('keliling_p').innerHTML='Keliling Persegi dengan sisi $sisi adalah $keliling'</script>";
      echo "<script>document.getElementById('luas_p').innerHTML='Luas Persegi dengan sisi $sisi adalah $luas'</script>";

    }
}
if(isset($_POST['segitiga'])){
    if(isset($_POST['alas'])&&isset($_POST['tinggi'])){
        $alas=$_POST['alas'];
        $tinggi=$_POST['tinggi'];
        class Segitiga{
            public $alas;
            public $tinggi;
            public function __construct($alas,$tinggi){
                $this->alas=$alas;
                $this->tinggi=$tinggi;
            }
            public function menghitung_luas(){
                $luas=$this->alas*$this->tinggi/2;
                return $luas;
            }
        }
        $segitiga=new Segitiga($alas,$tinggi);
        $luas=$segitiga->menghitung_luas();
        echo"<script>document.getElementById('luas_s').innerHTML='Luas Segitiga dengan alas $segitiga->alas dan tinggi $segitiga->tinggi adalah $luas'</script>";
    }
}
if(isset($_POST['lingkaran'])){
    if(isset($_POST['jari-jari'])){
        $jari_jari=$_POST['jari-jari'];
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
        $lingkaran=new Lingkaran($jari_jari);
        $keliling=$lingkaran->menghitung_keliling();
        $luas=$lingkaran->menghitung_luas();
        echo"<script>document.getElementById('keliling_l').innerHTML='Keliling Lingkaran dengan jari-jari $lingkaran->jari_jari adalah $keliling'</script>";
        echo"<script>document.getElementById('luas_l').innerHTML='Luas Lingkaran dengan jari-jari $lingkaran->jari_jari adalah $luas'</script>";

    }
}

?>