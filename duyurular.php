<?php
include('sgpnl/inc/vt.php');
	$title = "Duyurular";
	include('header.php');	
	
?>
<main>
<div>
<div class="news">
<div class="header-image" style="background: linear-gradient(-90deg, rgba(77,170,212,0.00) 0%, rgba(35,66,89,0.70) 100%),url('assets/img/sayfalar/duyuru.jpg') no-repeat center center;">
<div class="container text-left">
<div class="col-xl-6 slider-text">
<h1 class="big-title">Güncel Duyurular</h1>
</div>
</div>
</div>
<div class="container-fluid logobar">
<img src="assets/img/logo.png" width="290" alt="">
</div>
<br>
<!-- Duyuru kısmı -->
<table class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col">Sıra</th>
      <th scope="col">Duyuru</th>
      <th scope="col">Konu</th>
      <th scope="col">Eklenme Tarihi</th>
	  <th scope="col">Oku</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sorgu = $baglanti->prepare("SELECT * FROM duyurular");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
    <tr <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
      <th scope="row"><?= $sonuc['id'] ?></th>
      <td><?= $sonuc['baslik'] ?></td>
      <td><?= $sonuc['ustBaslik'] ?></td>
      <td><?= $sonuc['tarih'] ?></td>
	   <td><a href="duyurudetay.php?id=<?= $sonuc["id"] ?>" class="btn btn-danger text-uppercase w-100 mb-4">OKU</a></td>
    </tr> <?php
}
?>
        
  </tbody>
</table>
<!-- Duyuru kısmı sonu -->
</div>
</div>
</main>


<?php
	include('footer.php');	
?>