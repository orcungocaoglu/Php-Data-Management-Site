<?php
include("baglanti.php");

if($_SERVER ["REQUEST_METHOD"]=="POST")
{
  $idno = $_POST["idno"];
  

  $sil = "DELETE FROM `seferler` WHERE sefer_id = '$idno'";


if ($baglan->query($sil)===TRUE) {
    header("Location: seferler.php");
    }
else
{
  
  die;

}
$baglan->close();
}
?>