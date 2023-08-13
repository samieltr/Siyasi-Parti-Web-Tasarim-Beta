<?php
include('sgpnl/inc/vt.php');
$sorgu = $baglanti->prepare("SELECT * FROM duyurular Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
$title =$sonuc["baslik"];
	include('header.php');	
	
	
    ?>

<?php
$sayfa = "duyurudetay";



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
<div class="header-image narrow" style="background: linear-gradient(-90deg, rgba(77,170,212,0.00) 0%, rgba(35,66,89,0.70) 100%),url('dosya/duyuru/duyuru.jpg') no-repeat center center;">
<div class="container text-left">
<div class="col slider-text">
<h2><?= $sonuc["baslik"] ?></h2>
<a href="duyurular.php" class="upperlink underline">GERİ DÖN</a>
</div>
</div>
</div>
<div class="container">
<div class="row">
<article class="offset-xl-3 col-xl-6">
<header>
<h1><?= $sonuc["ustBaslik"] ?></h1>
<time><?= $sonuc["tarih"] ?></time>
</header>
<div>
<p><?= $sonuc["icerik"] ?></p>
<iframe
  src="dosya/duyuru/<?= $sonuc["foto"] ?>"
  width="900" height="1000"
  frameborder="0"
></iframe>
</div>

</article>
</div>
</div>
</div>
</div>
</main>


<?php
include('footer.php');
?>
