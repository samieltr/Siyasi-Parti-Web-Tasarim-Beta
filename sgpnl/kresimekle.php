<?php 
$sayfa = "Kayan Resim Ekle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    $ustBaslik = $_POST['ustBaslik']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $baslik = $_POST['baslik'];
    $hata = "";

    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
    if ($ustBaslik <> "" && isset($_FILES['foto'])) {

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
                        copy($foto, '../images/kayan/' . $dosya_adi);


                        //Eklencek veriler diziye ekleniyor
                        $satir = [
                            'foto' => $dosya_adi,
                            'ustBaslik' => $ustBaslik,
                            'baslik' => $baslik,

                        ];

                        // Veri ekleme sorgumuzu yazıyoruz.
                        $sql = "INSERT INTO kayan SET foto=:foto,ustBaslik=:ustBaslik,baslik=:baslik;";
                        $durum = $baglanti->prepare($sql)->execute($satir);

                        if ($durum) {
                            echo  '<div class="alert alert-success" role="alert">Kayan Resim Başarıyla Eklendi.</div>';
                        }


                    }
                }
            }
        }
    }
    if($hata!=""){
		 echo '<div class="alert alert-danger" role="alert">Kayan Resim eklenemedi.</div> '.$hata.'';
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
								<h3>Kayan Resim Ekle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="kresimekle.php" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
								
							<div class="control-group">
											<label class="control-label" for="basicinput">Üst Basklik :</label>
											<div class="controls">
												<input type="text" name="ustBaslik" id="basicinput" placeholder="Resim Hakkında Baslik" class="span8">
											</div>
										</div>

											
											<div class="control-group">
											<label class="control-label" for="basicinput">Açıklama :</label>
											<div class="controls">
												<input type="text" name="baslik"  placeholder="Görsel Hakkında Açıklama" class="span8">
											</div>
										</div>

											 <label for="foto">Kayan Resim Görseli</label>
										<input required type="file" name="foto" class="form-control-file" id="foto">
										</div>

										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Kayan Resim Ekle</button>
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
