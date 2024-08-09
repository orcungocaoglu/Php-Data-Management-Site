


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Rexco Airlines</title>
    <link rel="stylesheet" type="text/css" href="styleh.css">
<style type="text/css">
  body{font-family: "Roboto",sans-serif ;}
  .sidenav {
    height: 100vh; width: 0px; position: fixed; top: 0; left: 0; padding-top: 60px; background-color: #003666; z-index: 999; transition: 0.5s; overflow-x:hidden ;}
.sidenav a{display:block; text-decoration:none; font-size:20px; color:#aaa; padding: 8px 8px 8px 35px; transition:0.3s; }
.sidenav a:hover {color: #f1f1f1;}
.sidenav .closeBtn{position: absolute; top: 0; right: 20px; font-size: 36px;}
.open {font-size: 30px; cursor: pointer;}

</style>

</head>
  <body>
<div class="sidenav" id="sidebarNav">
  <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">&times;</a>
  <a href="anasayfa.php">Anasayfa</a>
  <a href="seferler.php">Seferler</a>
  <a href="rapor.php">Raporlar</a>
  <a href="index.php">Hizmetlerimiz</a>
  


</div>

<span class="open" onclick="openNav()">&#9776; Open</span>
<main id="main">

<section id="hizmet">
<div class="container">
  
<h2 id="anabaslik" style="text-align: center; color: #003666; font-size: 30px; padding: 20px; border-bottom: 2px solid #003666; color: #003666;">Hizmetlerimiz</h2>

<div>

<div class="card">
  <img src="img/hkm2.jpg" alt="" class="img-fluid">
  <h3 class="baslikcard">Ulaşım Kolaylığı</h3>
  <p class="cardp">Türkiye'nin 56 ilinde bulunan havaalanı ile istediğiniz yere ulaşım kolaylığı sağlar. Bu havaalanlarının bir kısmı sadece iç hatlarda, bazıları ise iç hatlar ve dış hatlar için kullanılmaktadır.</p>
</div>

<div class="card">
  <img src="img/room.jpg" alt="" class="img-fluid">
  <h3 class="baslikcard" id="srn">Lounge Erişimi</h3>
  <p class="cardp">Yolcuların uçuşları öncesinde veya sonrasında kullanabilecekleri havalimanı salonlarına erişim imkanı sunulması.</p>
</div>

<div class="card">
  <img src="img/spc.jpg" alt="" class="img-fluid">
  <h3 class="baslikcard">Özel Hizmetler</h3>
  <p class="cardp"> Engelli yolculara yönelik yardım, çocuklar için ebeveynlerin yardımı, özel yemek talepleri gibi özel hizmetler.</p>
</div>

<div class="card">
  <img src="img/hkmy.jpg" alt="" class="img-fluid">
  <h3 class="baslikcard">Yiyecek ve İçecek</h3>
  <p class="cardp">Uzun mesafeli uçuşlarda yemek servisi, atıştırmalıklar, alkollü ve alkolsüz içecekler gibi yiyecek ve içecek hizmetleri.</p>
</div>

<div class="card">
  <img src="img/bgj.jpg" alt="" class="img-fluid">
  <h3 class="baslikcard">Bagaj Hizmetleri</h3>
  <p class="cardp">Bagajın kolaylıkla teslim alınabileceği ve hızlı işlem yapılabilen bagaj hizmetleri.</p>
</div>

<div class="card">
  <img src="img/imggg.jpg" alt="" class="img-fluid">
  <h3 class="baslikcard">Konforlu Bir Yolculuk Deneyimi</h3>
  <p class="cardp">Konforlu koltuklar, yeterli bacak mesafesi, ayarlanabilir koltuk başlıkları, geniş iç mekan ile yolcuların uçuş sırasında keyifli vakit geçirmesini sağlar.</p>
</div>

</section>






























</main>

<script type="text/javascript">
  
  function openNav(){
    document.getElementById("sidebarNav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
   function closeNav(){
    document.getElementById("sidebarNav").style.width = "0";
     document.getElementById("main").style.marginLeft = "0";
  }

</script>



  </body>
  </html>
