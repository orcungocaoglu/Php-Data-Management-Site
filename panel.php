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
  background-color: #045bb8;
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

button[type=submit] {
  background-color: #045bb8;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
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
  <a href="anasayfa.php">Anasayfa</a>
  <a href="seferler.php">Seferler Yönetim Paneli</a>
  <a href="rapor.php">Raporlar</a>
  <a href="indexh.php">Hizmetlerimiz</a>
  <a href="panel.php">İletişim Yönetim Paneli</a>
</div>

<span class="open" onclick="openNav()">&#9776; Open</span>
<main id="main">



<h2>Veri Tablosu</h2>

<table id="iletisim">
  <tr>
    <th>ID</th>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>
  <?php 

include("baglanti.php");
include("update.php");

$sec ="SELECT * FROM iletisim";
$sonuc=$baglan->query($sec);

if ($sonuc->num_rows>0)
{
  while ($cek=$sonuc->fetch_assoc())
  {
    echo "
      <tr>
        <td>".$cek['id']."</td>
        <td>".$cek['adsoyad']."</td>
        <td>".$cek['telefon']."</td>
        <td>".$cek['email']."</td>
        <td>".$cek['konu']."</td>
        <td>".$cek['mesaj']."</td>
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
  <form action="post.php" method="POST">
    <label for="adsoyad">Ad Soyad</label>
    <input type="text" name="adsoyad" placeholder="Ad Soyad.." required>

    <label for="telefon">Telefon Numarası</label>
    <input type="text" name="telefon" placeholder="Telefon Numarası.." required>
    
    <label for="email">E-Posta</label>
    <input type="email" name="email" placeholder="E-Posta Adresi.." required>
    
    <label for="konu">Konu</label>
    <input type="text" name="konu" placeholder="Konu.." required>

    <label for="mesaj">Mesaj</label>
    <textarea name="mesaj" placeholder="Mesaj.." style="height:200px" required></textarea>

    <button type="submit" value="Gönder">Gönder</button>
  </form>
</div>


<h2>Veri Güncelleme</h2>

<div id="yonetim">
  <form action="update.php" method="POST">
    <label for="idno">Seçeceğiniz ID Numarası</label>
    <input type="text" name="idno" placeholder="ID Numarası.." required>

    <label for="verisecim">Değiştirilecek Veri Alanı</label>
    <select name="verisecim" required>
      <option value="adsoyad">Ad soyad</option>
      <option value="telefon">Telefon</option>
      <option value="email">Email</option>
      <option value="konu">Konu</option>
      <option value="mesaj">Mesaj</option>
    </select>

    <label for="yeniveri">Yeni Veri</label>
    <input type="text" name="yeniveri" placeholder="Yeni girilecek veri.." required>

    <button type="submit" value="Güncelle">Güncelle</button>
  </form>
</div>

<h2>Veri Silme</h2>

<div id="yonetim">
  <form action="delete.php" method="POST">
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

