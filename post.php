<?php
include("baglanti.php");

if($_SERVER ["REQUEST_METHOD"]=="POST")
{
  $adsoyad = $_POST["adsoyad"];
  $telefon = $_POST["telefon"];
  $email = $_POST["email"];
  $konu = $_POST["konu"];
  $mesaj = $_POST["mesaj"];

  $ekle = "INSERT INTO iletisim (adsoyad,telefon,email,konu,mesaj) VALUES ('$adsoyad','$telefon','$email','$konu','$mesaj')";


if ($baglan->query($ekle)===TRUE) {
    header("Location: panel.php");
    }
else
{
  
  die;

}
$baglan->close();
}
?>