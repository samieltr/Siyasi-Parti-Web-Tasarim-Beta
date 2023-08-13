<?php
include('sgpnl/inc/vt.php');
$title = "Haberler";
	include('header.php');	
	
?>
<main>
<div>
<div class="news">
<div class="header-image" style="background: linear-gradient(-90deg, rgba(77,170,212,0.00) 0%, rgba(35,66,89,0.70) 100%),url('assets/img/sayfalar/haberler.jpg') no-repeat center center;">
<div class="container text-left">
<div class="col-xl-6 slider-text">
<h1 class="big-title">Haberler</h1>
</div>
</div>
</div>
<div class="container-fluid logobar">
<img src="assets/img/logo.png" width="300" alt="">
</div>
<div class="container mx-auto mt-4" >
  <div class="row">
  <?php

$sorgu = $baglanti->prepare("SELECT * FROM haberler");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
    <div class="col-md-4" <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
      <div class="card" style="width: 18rem;">
  <img src="images/haber/<?= $sonuc['foto'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title"><?= $sonuc['ustBaslik'] ?></h4>
	<h6 class="card-title"><font color="#30D5C8"><?= $sonuc['tarih'] ?></font></h6>
    <p class="card-text"><?= $sonuc['baslik'] ?></p>
   <a href="haberdetay.php?id=<?= $sonuc["id"] ?>" class="btn  mr-2"><button type="button" class="btn btn-outline-primary"><font color="black">Devamını Oku</font></button></a>
  </div>
  </div>
    </div>  <br>  
      <?php
}
?>
       
    
</div>
  </div> 
<!-- haber kısmı -->
 
</div>
</div>
</main>


<?php
	include('footer.php');	
?>