<?php 
$sayfa = "Uye Listesi";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
?>

<?php
$sayfa = "uyedetay";
$id = $_SESSION['kullanici_id'];

$sorgu = $baglanti->prepare("SELECT * FROM uyelist Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $adsoyad = $_POST['adsoyad']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $tckimlik = $_POST['tckimlik'];
               $il = $_POST['il'];
               $ilce = $_POST['ilce'];
			   $telefon = $_POST['telefon'];
			   $referans = $_POST['referans'];
               $aktif = 0;
               if (isset($_POST['aktif'])) $aktif = 1;
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
								<h3>Üye Bilgisi Görüntüle</h3>
							</div>
							<div class="module-body">
								<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									  <th>Adı Soyadı:</th>
									  <th><?= $sonuc["adsoyad"] ?></th>
									  <th></th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th>T.C Kimlik No:</th>
									  <th><?= $sonuc["tckimlik"] ?></th>
									    <td style="text-align: center;" rowspan="6"><img width="150" src="../images/uyeler/<?= $sonuc["foto"] ?>"> </td>
									</tr>
									<tr>
									   <th>İl:</th>
									  <th><?= $sonuc["il"] ?></th>
									   
									</tr>
									<tr>
									 <th>İlçe:</th>
									  <th><?= $sonuc["ilce"] ?></th>
									   
									</tr>
									<tr>
									  <th>Telefon No:</th>
									  <th><?= $sonuc["telefon"] ?></th>
									   
									</tr>
									<tr>
									 <th>Referans:</th>
									  <th><?= $sonuc["referans"] ?></th>
									 
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
