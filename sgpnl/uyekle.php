<?php 
$sayfa = "Uye Listesi";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $adsoyad = $_POST['adsoyad']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $tckimlik = $_POST['tckimlik'];
   $il = $_POST['il'];
  $ilce = $_POST['ilce'];
   $telefon = $_POST['telefon'];
 $referans = $_POST['referans'];
    $aktif = 0;
    if (isset($_POST['aktif'])) $aktif = 1;
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    if ($adsoyad <> "" && isset($_FILES['foto'])) {

        if ($_FILES['foto']['error'] != 0) {
            $hata .= 'Dosya yüklenirken hata gerçekleşti lütfen daha sonra tekrar deneyiniz.';
        } else {

         $dosya_adi = strtolower($_FILES['foto']['name']);
            if (file_exists('images/' . $dosya_adi)) {
                $hata .= " $dosya_adi diye bir dosya var";
            } else {
                $boyut = $_FILES['foto']['size'];
                if ($boyut > (1024 * 1024 * 2)) {
                    $hata .= ' Dosya boyutu 2MB den büyük olamaz.';
                } else {
                    $dosya_tipi = $_FILES['foto']['type'];
                    $dosya_uzanti = explode('.', $dosya_adi);
                    $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];

                    if (!in_array($dosya_tipi, ['image/png', 'image/jpeg']) || !in_array($dosya_uzanti, ['png', 'jpg'])) {
                        //if (($dosya_tipi != 'image/png' || $dosya_uzanti != 'png' )&&( $dosya_tipi != 'image/jpeg' || $dosya_uzanti != 'jpg')) {
                        $hata .= ' Hata, dosya türü JPEG veya PNG olmalı.';
                    } else {
                        $foto = $_FILES['foto']['tmp_name'];
                        copy($foto, '../images/uyeler/' . $dosya_adi);


                        //Eklencek veriler diziye ekleniyor
                        $satir = [
                            'foto' => $dosya_adi,
                            'adsoyad' => $adsoyad,
                            'tckimlik' => $tckimlik,
						    'il' => $il,
							'ilce' => $ilce,
							 'telefon' => $telefon,
				  'referans' => $referans,
                            'aktif' => $aktif,
                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "INSERT INTO uyelist SET foto=:foto, adsoyad=:adsoyad,aktif=:aktif,tckimlik=:tckimlik,il=:il,ilce=:ilce,telefon=:telefon,referans=:referans;";
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum) {
                            echo  '<div class="alert alert-success" role="alert">Üye Başarıyla Eklendi.</div>';
                        }


                    }
                }
            }
        }
    }
    if($hata!=""){
		 echo '<div class="alert alert-danger" role="alert">Üye eklenemedi.</div> '.$hata.'';
    }
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
                           
						   
						   <div class="module">
							<div class="module-head">
								<h3>Üye Ekle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="uyekle.php" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
								
							<div class="control-group">
											<label class="control-label" for="basicinput">Adı ve Soyadı :</label>
											<div class="controls">
												<input type="text" name="adsoyad" id="basicinput" placeholder="Samet Erten" class="span8">
											</div>
										</div>

											
											<div class="control-group">
											<label class="control-label" for="basicinput">T.C Kimlik No :</label>
											<div class="controls">
												<input type="text" name="tckimlik" minlength="11" maxlength="11" id="basicinput" placeholder="12345678901" class="span8">
											</div>
										</div>

								<div class="control-group">
											<label class="control-label" for="basicinput">İl :</label>
											<div class="controls">
												<input type="text" name="il" id="basicinput" placeholder="Ankara" class="span8">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">İlçe :</label>
											<div class="controls">
												<input type="text" name="ilce" id="basicinput" placeholder="Çankaya" class="span8">
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Telen No :</label>
											<div class="controls">
												<input type="text" name="telefon" minlength="11" maxlength="11" id="basicinput" placeholder="05554541213" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Referans :</label>
											<div class="controls">
												<input type="text"  name="referans" id="basicinput" placeholder="Samet Erten" class="span8">
											</div>
										</div>
										
											<div class="control-group">
											<label class="control-label">Üye Onaylımı ?</label>
											<div class="controls">
												 <input type="checkbox" class="form-check-input" name="aktif" id="aktif">
												 <span><font color ="red">Eğer Islak İmza Alındıysa İşaretleyiniz</font></span>
											</div>
										</div>
										<div class="control-group">
											
											 <label for="foto">Üyenin Fotoğrafı</label>
										<input required type="file" name="foto" class="form-control-file" id="foto">
										</div>

										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Üye Kaydı Yap</button>
											</div>
										</div>
									</form>
							
							</div>
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
