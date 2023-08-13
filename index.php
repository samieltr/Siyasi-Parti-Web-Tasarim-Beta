<?php
	include('sgpnl/inc/vt.php');
	$title = "Ana Sayfa";
	include('header.php');	
    ?>

<main>
<div>
<!-- Kayan Resim Alani -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner"> 
    <div class="carousel-item active " > 
 <?php

$sorgu = $baglanti->prepare("SELECT * FROM kayan where id=1");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
      <img class="d-block w-100" src="images/kayan/<?= $sonuc['foto'] ?>" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h2><?= $sonuc['ustBaslik'] ?></h2>
    <p><?= $sonuc['baslik'] ?></p>
	  <?php
}
?>
    </div></div> 
	  <div class="carousel-item " > 
	  <?php

$sorgu = $baglanti->prepare("SELECT * FROM kayan where id=2");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
      <img class="d-block w-100" src="images/kayan/<?= $sonuc['foto'] ?>" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h2><?= $sonuc['ustBaslik'] ?></h2>
    <p><?= $sonuc['baslik'] ?></p>
	  <?php
}
?>
    </div></div> 
	  <div class="carousel-item " > 
	    <?php

$sorgu = $baglanti->prepare("SELECT * FROM kayan where id=3");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
      <img class="d-block w-100" src="images/kayan/<?= $sonuc['foto'] ?>" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h2><?= $sonuc['ustBaslik'] ?></h2>
    <p><?= $sonuc['baslik'] ?></p>
	<?php
}
?>
    </div></div> 


     
  </div> 
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Kayan Resim Alani Sonu -->

<div class="cg-box">
<div class="container">
<div class="row">
<div class="col-xl-9">
<div>
<h1>Sen olmadan <span>olmaz...</span></h1>
<p>Milli Birlik ile gelişen Türkiye hedefimize sende katıl.</p>
</div>
</div>
<div class="col-xl-3 text-center">
<a href="basvuru.php" class="btn btn-danger text-uppercase w-100 mb-4">Hemen üye ol</a>
</div>
</div>
</div>
</div>
<div class="container-fluid logobar">
<img src="assets/img/logo.png" width="285" alt="MBGP Logo">
</div>
<!-- haber kısmı -->

<div class="container mx-auto mt-4" >
  <div class="row">
  <?php

$sorgu = $baglanti->prepare("SELECT * FROM haberler order by id DESC LIMIT 3");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
    <div class="col-md-4" <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
      <div class="card" style="width: 18rem;">
  <img src="images/haber/<?= $sonuc['foto'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $sonuc['ustBaslik'] ?></h5>
		<h6 class="card-title"><font color="#30D5C8"><?= $sonuc['tarih'] ?></font></h6>
    <p class="card-text"><?= $sonuc['baslik'] ?></p>
   <a href="haberdetay.php?id=<?= $sonuc["id"] ?>" class="btn  mr-2"><button type="button" class="btn btn-outline-info"><font color="black">Devamını Oku</font></button></a>
  </div>
  </div>
    </div>    
      <?php
}
?>
       
    
</div>
  </div> 
     
<!-- haber kısmı sonu -->
<br>
<div class="container text-center pb-5">
<a href="haberler.php" class="btn btn-outline-secondary px-5">Tüm Haberler</a>
</div>
<div class="hp-hero-buttons">
<a href="#" class="btn btn-danger w-100 mb-2">TEŞKİLATLARIMIZ</a>
</div>
<div class="hp-hero container-fluid">
<div class="container">

<?php
	include('turkiyeharitasi.php');	
	
    ?>


</div>
</div>
<div class="container-fluid contact-form-container">
<div class="container">
<div class="contact-form-left pr-5">
<h4 class="mb-4">Yeniliklerden ve duyurulardan <strong>haberdar olmak istiyorum</strong></h4>
</div>
<form action="sgpnl/inc/ebulten.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-8">
      <form action="inc/ebulten.php" method="post"><br>
<div class="row">
    <div class="col">
      Ad:<br><input type="text" name="firstname" class="form-control"><br>
    </div>
    <div class="col">
     Soyad: <input type="text" name="lastname" class="form-control"><br>
    </div>
    </div>
	<div class="form-group">
	E-mail: <input type="email" name="email" class="form-control"><br>
<input type="submit" class="btn btn-danger text-uppercase ">
	 </div>
  </div>


</form>


  
</form>
</div>
</div>
</div>
</main>

<?php
include('footer.php');
?>
