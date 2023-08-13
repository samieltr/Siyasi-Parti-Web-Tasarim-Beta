<?php
include('sgpnl/inc/vt.php');
$title = "MBGP - Yönetim Kurulu";
include('header.php');	
?>
<style type="text/css">
h2. .strong {
    color:#30D5C8;
}
</style>
<link href="assets/site/css/kisisel2.css" rel="stylesheet">
<link href="assets/site/css/kisisel3.css" rel="stylesheet">
<main>
<div>
<div class="about">
<div class="header-image" style="background: linear-gradient(-90deg, rgba(77,170,212,0.00) 0%, rgba(35,66,89,0.70) 100%),url('assets/img/sayfalar/mbgp.jpg') no-repeat center center;">
<div class="container text-left">
<div class="col-xl-6 slider-text">
<h1 class="small-title">Biz bu yola;</h1>
<h2>Hakka,Halka,Vatana <strong>hizmet anlayışıyla çıktık.</strong></h2>
</div>
</div>
</div>
<div class="container-fluid logobar">
<img src="assets/img/logo.png" width="300" alt="">
</div>

<!-- Kurul Listesi -->
<div class="py-5 team2">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-md-7 text-center">
        <h3 class="mb-3">Yönetim Kurulu</h3>
      </div>
    </div>
    <div class="row">
      <!-- column  -->
	   <?php

$sorgu = $baglanti->prepare("SELECT * FROM yonetim order by sira");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
      <div class="col-lg-3 mb-4" <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
        <!-- Row -->
       <div class="card" style="width: 18rem;">
  <img src="images/yonetim/<?= $sonuc['foto'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $sonuc['ustBaslik'] ?></h5>
    <p class="card-text"><?= $sonuc['baslik'] ?></p>
    <a href="yonetimdetay.php?id=<?= $sonuc["id"] ?>" class="btn btn-primary">Özgeçmiş</a>
  </div>
</div>
        <!-- Row -->
      </div>&nbsp <?php
}
?>
     
      <!-- column  -->
      <!-- column  -->
  
      <!-- column  -->
      <!-- column  -->
 
      <!-- column  -->
      <!-- column  -->
   
      <!-- column  -->
    </div>
  </div>
</div>
<!-- Kurul Liste Sonu -->


</div>

</div>
</main>

<?php
	include('footer.php');	
?>
