<!DOCTYPE html>
<html ng-app="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM PAY</title>
    <link rel="stylesheet" href="styleform.css" type="text/css">
    <script src="js/javascript.js" type="text/javascript"></script>
    <script src="js/angular-1.7.5/angular.min.js" type="text/javascript"></script>
  </head>
  <body>
  <div class="container">
    <h1 style="margin:10px; text-align: center;" >PEMBAYARAN</h1>
    <form class="" action="index.html" method="post">
      <input required class="input-form laf" type="text" name="" value="" placeholder="Nama">
      <input required class="input-form laf" type="number" name="" value="" placeholder="Nomer HP">
      <input required class="input-form laf" type="text" name="" value="" placeholder="Lokasi">
        <input required class="input-form-number laf" type="number" name="" value="1" placeholder="Luas" ng-model="jumlah">
      
      <input required class="input-form-number laf" type="number" name="" value="1"placeholder="Harga" ng-model="harga">
      
      <input disabled required class="input-form-value" type="number" name="" value="{{jumlah*harga}}" placeholder="Total" ng-model="Hasil">
   
      <textarea class="input-form" cols="5" rows="5" name="comment" placeholder="Catatan" required></textarea>
      </textarea>

      <div style="overflow-x:auto;">
        <label>Pilih Metode Pembayaran</label>
        <table border=0 cellpadding="10">
          <tr>
            <th><input type="checkbox"  value=""><img src="img/bni.png" width="60px" height="20px"></th>
            <th><input type="checkbox"  value=""><img src="img/logo-bca.png" width="60px" height="20px"></th>
            <th><input type="checkbox"  value=""><img src="img/bri.png" width="60px" height="25px"></th>
        
            
            
          </tr>
          <tr>
        
            <th><input type="checkbox"  value=""><img src="img/alfa.jpg" width="70px" height="50px"></th>
            <th><input type="checkbox"  value=""><img src="img/indomaret.png" width="60px" height="20px"></th>
            <th><input type="checkbox"  value=""><img src="img/gopay.jpg" width="65px" height="40px"></th>
          </tr>
        </table>
      </div>
      <button class="btn-form-pay"><a href="konfirm_pembayaran.php"></a>Bayar</button>
      <button class="btn-form-change" id="myBtn">Batal</button>
    </form>
  </div>

  <footer>
    <div class="links">
      <a href="#">Beranda</a>
      <a href="swiper.html">Ciptakan Pekerjaan</a>
      <a href="#tukangkami">Tukang MyBuilder</a>
      <a href="#layanan">Layanan MyBuilder</a>
      <div class="credit">
        <p>Created by <a href="">MyBuilder</a> | &copy; 2023</p>
      </div>
    </div>
  </footer>

  </body>
</html>