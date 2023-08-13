<?php
include('sgpnl/inc/vt.php');
	$title = "Kurumsal";
	include('header.php');	
	
?>

<main>
<div>
<div class="news">
<div class="header-image" style="background: linear-gradient(-90deg, rgba(77,170,212,0.00) 0%, rgba(35,66,89,0.70) 100%),url('http://avisualglitch.com/wp-content/uploads/2017/11/icon-banner.png') no-repeat center center;">
<div class="container text-left">
<div class="col-xl-12 slider-text">
<h1 class="big-title">Evraklar,Logo,Medya</h1>
</div>
</div>
</div>

<!-- Buraya dökümanlar gelecek -->
<table width="100%" class="table table-hover table-dark">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">Dosya Adı</th>
      <th scope="col">Dosya Türü</th>
      <th scope="col">İndir</th>
    </tr>
  </thead>
  <tbody >
    <tr >
      <th scope="row">1</th>
      <td>Logo</td>
      <td>PDF</td>
      <td><a href="evraklar/logo.pdf" class="btn btn-danger text-uppercase  mb-4">İndir</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Logo</td>
      <td>PNG</td>
      <td><a href="evraklar/logo.png" class="btn btn-danger text-uppercase  mb-4">İndir</a></td>
    </tr>
	 <tr>
      <th scope="row">3</th>
      <td>MBGP üyelik formu</td>
      <td>PDF</td>
      <td><a href="evraklar/uyelikbasvuru.pdf" class="btn btn-danger text-uppercase  mb-4">İndir</a></td>
    </tr>
	 <tr>
      <th scope="row">4</th>
      <td>MBGP Parti Tüzüğü</td>
      <td>PDF</td>
      <td><a href="evraklar/tuzuk.pdf" class="btn btn-danger text-uppercase  mb-4">İndir</a></td>
    </tr>
	 <tr>
      <th scope="row">5</th>
      <td>MBGP Parti Programı</td>
      <td>PDF</td>
      <td><a href="evraklar/mbgprogram.pdf" class="btn btn-danger text-uppercase  mb-4">İndir</a></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</form>
<nav class="simple-nav files-nav container display-block clearfix">
<ul></ul>
</nav>
<nav class="container text-center w-100">
<ul class="pagination text-center"></ul>
</nav>
</div>
</div>
</div>
</main>


<?php
	include('footer.php');	
?>