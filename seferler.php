<!DOCTYPE html>
<html>
<head>
<style>
h2{
  font-family: Arial, Helvetica, sans-serif;
  padding-left: 15px;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#yonetim {
  font-family: Arial, Helvetica, sans-serif;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

#verisecim{
  padding: 16px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}

#iletisim {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#iletisim td, #iletisim th {
  border: 1px solid #ddd;
  padding: 8px;
}

#iletisim tr:nth-child(even){background-color: #f2f2f2;}

#iletisim tr:hover {background-color: #ddd;}

#iletisim th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #033f80;
  color: white;
}








body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.container input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.container input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.container button[type=submit] {
  background-color: #045bb8;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.container button[type=submit]:hover {
  background-color: #033f80;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}



.sidenav {
    height: 100vh; width: 0px; position: fixed; top: 0; left: 0; padding-top: 60px; background-color: #003666; z-index: 999; transition: 0.5s; overflow-x:hidden ;}
.sidenav a{display:block; text-decoration:none; font-size:20px; color:#aaa; padding: 8px 8px 8px 35px; transition:0.3s; }
.sidenav a:hover {color: #f1f1f1;}
.sidenav .closeBtn{position: absolute; top: 0; right: 20px; font-size: 36px;}
.open {font-size: 30px; cursor: pointer;}




</style>
<?php $verisecim = "" ?>

</head>
<body>


<div class="sidenav" id="sidebarNav">
  <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">&times;</a>
  <a href="anasayfa.html">Anasayfa</a>
  <a href="seferler.php">Seferler</a>
  <a href="rapor.html">Raporlar</a>
  <a href="indexh.html">Hizmetlerimiz</a>
  <a href="iletisim.php">İletişim</a>
</div>

<span class="open" onclick="openNav()">&#9776; Open</span>
<main id="main">



<h2>Veri Tablosu</h2>

<table id="iletisim">
  <tr>
    <th>ID</th>
    <th>Sefer Tarihi</th>
    <th>Yolcu Sayısı</th>
    <th>Kalkış Yeri</th>
    <th>Varış Yeri</th>
  </tr>
  <?php 

include("baglanti.php");
include("update.php");

$sec ="SELECT * FROM seferler";
$sonuc=$baglan->query($sec);

if ($sonuc->num_rows>0)
{
  while ($cek=$sonuc->fetch_assoc())
  {
    echo "
      <tr>
        <td>".$cek['sefer_id']."</td>
        <td>".$cek['sefer_tarihi']."</td>
        <td>".$cek['yolcu_sayisi']."</td>
        <td>".$cek['kalkis_yeri']."</td>
        <td>".$cek['varis_yeri']."</td>
      </tr>";

  }
  
}
else
{
  echo "Veritabanında Hiçbir Veri Bulunamamıştır.";
}
 ?>
  
</table>


<h2>Veri Ekle</h2>

<div class="container">
  <form action="postseferler.php" method="POST">
    <label for="sefer_tarihi">Sefer Tarihi</label>
    <br>
    <input type="date" name="sefer_tarihi" placeholder="Sefer Tarihi.." required>
    <br>
    <br>
    <label for="yolcu_sayisi">Yolcu Sayısı</label>
    <input type="text" name="yolcu_sayisi" placeholder="Yolcu Sayısı.." required>
    
    <label for="kalkis_yeri">Kalkış Yeri</label>
    <input type="text" name="kalkis_yeri" placeholder="Kalkış Yeri.." required>
    
    <label for="varis_yeri">Varış Yeri</label>
    <input type="text" name="varis_yeri" placeholder="Varış Yeri.." required>

    <button type="submit" value="Gönder">Kaydet</button>
  </form>
</div>


<h2>Veri Güncelleme</h2>

<div class="container">
  <form action="updateseferler.php" method="POST">
    <label for="idno">Seçeceğiniz ID Numarası</label>
    <input type="text" name="idno" placeholder="ID Numarası.." required>

    <label for="verisecim">Değiştirilecek Veri Alanı</label>
    <select name="verisecim" required>
      <option value="yolcu_sayisi">Yolcu Sayısı</option>
      <option value="kalkis_yeri">Kalkış Yeri</option>
      <option value="varis_yeri">Varış Yeri</option>
    </select>

    <label for="yeniveri">Yeni Veri</label>
    <input type="text" name="yeniveri" placeholder="Yeni girilecek veri.." required>

    <button type="submit" value="Güncelle">Güncelle</button>
  </form>
</div>

<h2>Veri Silme</h2>

<div class="container">
  <form action="deleteseferler.php" method="POST">
    <label for="idno">Seçeceğiniz ID Numarası</label>
    <input type="text" name="idno" placeholder="ID Numarası.." required>
    <button type="submit" value="Veri Sil">Veri Sil</button>
  </form>
</div>


<script type="text/javascript">
        // JavaScript fonksiyonlarını buraya ekleyin
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

