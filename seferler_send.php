<?php include ('baglanti.php'); ?>
<?php

if ($baglan->connect_error) {
    die("Veritabanı Bağlantısı Başarısız: " . $baglan->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["flight_data"]=="save") {
        $sefer_tarihi = $_POST["sefer_tarihi"];
        $yolcu_sayisi = $_POST["yolcu_sayisi"];
        $kalkis_yeri = $_POST["kalkis_yeri"];
        $varis_yeri = $_POST["varis_yeri"];

        $ekle = "INSERT INTO seferler (sefer_tarihi, yolcu_sayisi, kalkis_yeri, varis_yeri) VALUES ('$sefer_tarihi', '$yolcu_sayisi', '$kalkis_yeri', '$varis_yeri')";

        if ($baglan->query($ekle) === TRUE) {
            header("Location: seferler.php");
        } else {
            die("Hata: " . $ekle . "<br>" . $baglan->error);
        }
    } elseif ($_POST["flight_data"]=="delete") {
        $delete_id = $_POST["delete_id"];
        $sil = "DELETE FROM seferler WHERE id=$delete_id";

        if ($baglan->query($sil) === TRUE) {
            echo "Veri başarıyla silindi";
        } else {
            echo "Hata: " . $sil . "<br>" . $baglan->error;
        }
    } elseif ($_POST["flight_data"]=="edit") {
        $idno = $_POST["update_id"];
        $sefer_tarihi = $_POST["sefer_tarihi"];
        $yolcu_sayisi = $_POST["yolcu_sayisi"];
        $kalkis_yeri = $_POST["kalkis_yeri"];
        $varis_yeri = $_POST["varis_yeri"];

        $guncelle = "UPDATE seferler SET sefer_tarihi='$sefer_tarihi', yolcu_sayisi='$yolcu_sayisi', kalkis_yeri='$kalkis_yeri', varis_yeri='$varis_yeri' WHERE id=$update_id";

        if ($baglan->query($guncelle) === TRUE) {
            echo "Veri başarıyla güncellendi";
        } else {
            echo "Hata: " . $guncelle . "<br>" . $baglan->error;
        }
    }
}

$baglan->close();
?>