<?php
include("baglanti.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idno = $_POST["idno"];
    $yeniveri = $_POST["yeniveri"];
    $verisecim = $_POST["verisecim"];

    $guncelle = "";
    if ($verisecim === "sefer_tarihi") {
        $guncelle = "UPDATE seferler SET sefer_tarihi = ? WHERE sefer_id = ?";
    } elseif ($verisecim === "yolcu_sayisi") {
        $guncelle = "UPDATE seferler SET yolcu_sayisi = ? WHERE sefer_id = ?";
    } elseif ($verisecim === "kalkis_yeri") {
        $guncelle = "UPDATE seferler SET kalkis_yeri = ? WHERE sefer_id = ?";
    } elseif ($verisecim === "varis_yeri") {
        $guncelle = "UPDATE seferler SET varis_yeri = ? WHERE sefer_id = ?";
    } else {
        die;
    }

    if (!empty($guncelle)) {
        $stmt = $baglan->prepare($guncelle);
        $stmt->bind_param("si", $yeniveri, $idno);

        if ($stmt->execute()) {
            header("Location: seferler.php");
            exit;
        } else {
            echo "Hata: " . $baglan->error;
        }

        $stmt->close();
    } else {
        echo "Gerekli alanlar eksik.";
    }

    $baglan->close();
}
?>