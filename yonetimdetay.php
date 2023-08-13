<?php
include('sgpnl/inc/vt.php');
$sorgu = $baglanti->prepare("SELECT * FROM yonetim Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
$title =$sonuc["ustBaslik"];
	include('header.php');	
	
	
    ?>
<style>
img {
  border-radius: 50%;
}
#left, #right {
 width: 800px; //change this to whatever required
 float: left;
}
</style>
<?php
$sayfa = "yonetimdetay";



       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $baslik = $_POST['baslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $icerik = $_POST['icerik'];
               $ustBaslik = $_POST['ustBaslik'];
               $sira = $_POST['sira'];
               $aktif = 0;
               if (isset($_POST['aktif'])) $aktif = 1;
               $hata = '';
	   }
?>
<main>
<div>
<div class="news-detail container-fluid bg-gray">
<div class="header-image narrow" style="background: linear-gradient(-90deg, rgba(77,170,212,0.00) 0%, rgba(35,66,89,0.70) 100%),url('images/yonetim/<?= $sonuc["foto"] ?>') no-repeat center center;">
<div class="container text-left">
<div class="col slider-text">
<h2><?= $sonuc["ustBaslik"] ?></h2>
<a href="mbgp.php" class="upperlink underline">GERİ DÖN</a>
</div>
</div>
</div>
<div class="container">
<div class="row">
<article class="col">
<header >
<img width="250" src="images/yonetim/<?= $sonuc["foto"] ?>" alt="">
</header>
</article>
<div id="right">
<h1><?= $sonuc["ustBaslik"] ?></h1>
<p><?= $sonuc["icerik"] ?></p>
</div>
<div>

</div>
</div>
</div>
</div>
</div>
</main>


<?php
include('footer.php');
?>
