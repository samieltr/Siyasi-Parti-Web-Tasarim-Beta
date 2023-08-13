<?php
include('sgpnl/inc/vt.php');
	$title = "Gönüllü Ol";
	include('header.php');	
	
?>

<main>
<div>
<div class="news">
<div class="header-image" style="background: linear-gradient(-90deg, rgba(77,170,212,0.00) 0%, rgba(35,66,89,0.70) 100%),url('assets/img/sayfalar/duyuru.jpg') no-repeat center center;">
<div class="container text-left">
<div class="col-xl-6 slider-text">
<h1 class="big-title">Gönüllü Başvuru Formu</h1>
</div>
</div>
</div>
<div class="container-fluid logobar">
<img src="assets/img/logo.png" width="290" alt="">
</div>
<br>
<!-- Üye Başvuru Form Alanı -->
<div class="alert alert-danger" role="alert">
  Şuanda online üyelik ve gönüllülük başvuruları alınmamaktadır. En kısa süre zarfında online üyelik sistemi aktif edilecektir. Dökümanlar kısmından üyelik formunu indirip başvuru yapabilirsiniz.
  Doldurduğunuz evrakı İlçe teşkilatımıza teslim ederek üyeliğinizi başlatabilirsiniz. <a href="kurumsal.php" target="_blank">Dökümanlara gitmek için tıklayın.</a> <a href="iletisim.php" target="_blank">İletişim bilgilerimiz için Tıklayın.</a>
</div>
<br> <div class="alert alert-primary" role="alert">
  Gönüllü başvurusu sizleri siyasi parti üyesi yapmaz!!
</div>
<div class="container">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Adınız : </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Adınız">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Soyadınız :</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Soyadınız">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">T.C. Kimlik No : </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="12345678901">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telefon No : </label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="0500 000 00 00">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">İl : </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Ankara">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">İlçe : </label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Çankaya">
    </div>
  </div>
     <div class="form-group">
  <label for="birthday">Doğum Tarihiniz:</label>
  <input type="date" class="form-control"  name="birthday">
  </div>
  <div class="form-group">
    <label for="inputAddress">Adres :</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Detaylı açık adres">
  </div>

  <div class="form-group">
	<label for="exampleInputEmail1">E-Posta Adresiniz :</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="xxxxx@gmail.com">
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">Fotoğraf Yükleyin :</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-row">
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Seçim Süreçlerinde Sandık Görevlisi Olurum. &nbsp;

  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
   Telefon ve e-Posta adresim üzerinden iletişim kurulmasına izin veriyorum. 
  </label>
</div>

  </div>
  <div class="form-row">
   <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
   Paylaşacağım kişisel verilere ilişkin <a href="/kvkk/">aydınlatma metnini</a> okudum. &nbsp;
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
   Paylaşacağım kişisel verilerimin işlenmesine rıza gösteriyorum.
  </label>
</div>
  </div>
 <br>
  <button type="submit" class="btn btn-primary">Gonullu Başvurusunu Tamamla</button>
  <br>
</form>
<br>
</div>
<!-- Üye Başvuru Form Alanı Sonu -->
</div>
</div>
</main>


<?php
	include('footer.php');	
?>