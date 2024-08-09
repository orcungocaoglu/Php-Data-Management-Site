<?php
include("baglanti.php");

if($_SERVER ["REQUEST_METHOD"]=="POST")
{
  $idno = $_POST["idno"];
  

  $sil = "DELETE FROM `iletisim` WHERE id = '$idno'";


if ($baglan->query($sil)===TRUE) {
    header("Location: panel.php");
    }
else
{
  
  die;

}
$baglan->close();
}
?>