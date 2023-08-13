<?php 
$sayfa = "Haber Önizleme";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
?>

<?php
$sayfa = "gonulludetay";

$sorgu = $baglanti->prepare("SELECT * FROM haberler Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $ustBaslik = $_POST['ustBaslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $baslik = $_POST['baslik'];
               $icerik = $_POST['icerik'];
               $hata = '';
	   }
?>
<style>
p
   {
      position: relative;

      right: -20px;
   }
							</style>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                     <?php include 'inc/sidebar.php';?>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                           
						   
						  
							<div class="module-head">
								<h3>Haber Önizleme</h3>
							</div>
							<div class="module-body">
							<p><a href="haberliste.php" class="btn btn-info">Geri Dön</a></p>
								<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									  <th>Haber Başlığı :</th>
									  <td><?= $sonuc["ustBaslik"] ?></td>
									  <th>Haber Resmi :</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									   <th colspan="2">Haber Özet:</th>
									 
									    <td style="text-align: center;" rowspan="3"><img width="150" src="../images/haber/<?= $sonuc["foto"] ?>"> </td>
									</tr>
									<tr>
									   <td colspan="2"><?= $sonuc["baslik"] ?></td>
									  <th></th>
									   
									</tr>
									<tr>
									 <th colspan="2">Haber:</th>
									 <th></th>
									 <th></th>
									   
									</tr>
									<tr>
									 <th colspan="2"><?= $sonuc["icerik"] ?></th>
									</tr>
									
								  </tbody>
								</table>
					</div>
							
						</div><!--/.module-->

							<!-- Modül Sonu-->
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
 <?php include 'inc/footer.php';?>
