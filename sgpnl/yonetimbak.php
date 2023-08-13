<?php 
$sayfa = "Yönetim Özgeçmiş";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
?>

<?php
$sayfa = "uyedetay";

$sorgu = $baglanti->prepare("SELECT * FROM yonetim Where id=:id");
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
								<h3>Özgeçmiş Görüntüle</h3>
							</div>
							<p><a href="yonetimliste.php" class="btn btn-info">Geri Dön</a></p>
							<div class="module-body">
								<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									  <th>Adı Soyadı:</th>
									  <th><?= $sonuc["ustBaslik"] ?></th>
									  <td style="text-align: center;" ><img width="150" src="../images/yonetim/<?= $sonuc["foto"] ?>"> </td>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th>Özgeçmiş:</th>
									  <th></th>
									  <th><center><?= $sonuc["baslik"] ?></center></th>
									</tr>
									<tr>
									   <th colspan="2" ><?= $sonuc["icerik"] ?></th>
									  <th ></th>
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
