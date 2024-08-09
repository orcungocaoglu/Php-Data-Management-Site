<?php
include("baglanti.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idno = $_POST["idno"];
    $yeniveri = $_POST["yeniveri"];
    $verisecim = $_POST["verisecim"];

    $guncelle = "";
    if ($verisecim === "adsoyad") {
        $guncelle = "UPDATE iletisim SET adsoyad = ? WHERE id = ?";
    } elseif ($verisecim === "telefon") {
        $guncelle = "UPDATE iletisim SET telefon = ? WHERE id = ?";
    } elseif ($verisecim === "email") {
        $guncelle = "UPDATE iletisim SET email = ? WHERE id = ?";
    } elseif ($verisecim === "konu") {
        $guncelle = "UPDATE iletisim SET konu = ? WHERE id = ?";
    } elseif ($verisecim === "mesaj") {
        $guncelle = "UPDATE iletisim SET mesaj = ? WHERE id = ?";
    } else {
        die;
    }

    if (!empty($guncelle)) {
        $stmt = $baglan->prepare($guncelle);
        $stmt->bind_param("si", $yeniveri, $idno);

        if ($stmt->execute()) {
            header("Location: panel.php");
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