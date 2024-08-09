<?php
include("baglanti.php");

if($_SERVER ["REQUEST_METHOD"]=="POST")
{
  $sefer_tarihi = $_POST["sefer_tarihi"];
  $yolcu_sayisi = $_POST["yolcu_sayisi"];
  $kalkis_yeri = $_POST["kalkis_yeri"];
  $varis_yeri = $_POST["varis_yeri"];

  $ekle = "INSERT INTO seferler (sefer_tarihi,yolcu_sayisi,kalkis_yeri,varis_yeri) VALUES ('$sefer_tarihi','$yolcu_sayisi','$kalkis_yeri','$varis_yeri')";


if ($baglan->query($ekle)===TRUE) {
    header("Location: seferler.php");
    }
else
{
  
  die;

}
$baglan->close();
}
?>