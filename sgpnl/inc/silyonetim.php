﻿<?php
session_start(); //oturum başlattık

//eğer mevcut oturum varsa sayfayı yönlendiriyoruz.
if (!(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789")) {
    header("location:../login.php");
} //eğer önceden beni hatırla işaretlenmiş ise oturum oluşturup sayfayı yönlendiriyoruz.

if ($_GET) {

    include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.
    $sorgu = $baglanti->prepare("SELECT * FROM yonetim Where id=:id");
    $sorgu->execute(['id' => (int)$_GET["id"]]);
    $sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

    // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
    $where = ['id' => (int)$_GET['id']];
    $durum = $baglanti->prepare("DELETE FROM yonetim WHERE id=:id")->execute($where);
    if ($durum) {
        header("location:../yonetimliste.php"); // Eğer sorgu çalışırsa index.php sayfasına gönderiyoruz.
    }
}
?>