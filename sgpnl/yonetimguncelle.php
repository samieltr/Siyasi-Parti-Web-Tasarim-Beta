<?php 
$sayfa = "Yönetim Güncelle";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
$sorgu = $baglanti->prepare("SELECT * FROM yonetim Where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

       if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
               $resmifatura = $_POST['resmifatura']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
               $hata = '';



               if ($_FILES["foto"]["name"] != "") {
                $foto = strtolower($_FILES['foto']['name']);
                if (file_exists('images/' . $foto)) {
                    $hata = "$foto diye bir dosya var";
                } else {
                    $boyut = $_FILES['foto']['size'];
                    if ($boyut > (1024 * 1024 * 2)) {
                        $hata = 'Dosya boyutu 2MB den büyük olamaz.';
                    } else {
                        $dosya_tipi = $_FILES['foto']['type'];
                        $dosya_uzanti = explode('.', $foto);
                        $dosya_uzanti = $dosya_uzanti[count($dosya_uzanti) - 1];

                         if (!in_array($dosya_tipi, ['application/pdf']) || !in_array($dosya_uzanti, ['pdf'])) {
                            //if (($dosya_tipi != 'image/png' || $dosya_uzanti != 'png' )&&( $dosya_tipi != 'image/jpeg' || $dosya_uzanti != 'jpg')) {
                            $hata = 'Hata, dosya türü pdf olmalı.';
                        } else {
                            $dosya = $_FILES["foto"]["tmp_name"];
                            copy($dosya, "../dosya/fatura/" . $foto);
                        }
                    }
                }
            } else {
                //Eğer kullanıcı fotoğraf seçmedi ise veri tabanındaki resimi değiştirmiyoruz
                $foto = $sonuc["foto"];
            }

            if ($resmifatura <> "" && $hata == "") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
                //Değişecek veriler
                $satir = [
                 'id' => $_GET['id'],
                 'foto' => $foto,
                 'resmifatura' => $resmifatura,
             ];
                // Veri güncelleme sorgumuzu yazıyoruz.
             $sql = "UPDATE tblinvoices SET foto=:foto, resmifatura=:resmifatura WHERE id=:id;";             
             $durum = $baglanti->prepare($sql)->execute($satir);

             if ($durum)
             {
                 echo  '<div class="alert alert-success" role="alert">Resmi Fatura Başarıyla Güncellendi.</div>';
				
            } else {
                      echo  '<div class="alert alert-danger" role="alert">Resmi Fatura   Güncellenemedi.</div>'; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
                }
            } else {
                  echo  '<div class="alert alert-danger" role="alert">Resmi Fatura  güncellenemedi.</div>' . $hata; // dosya hatası ve form elemanlarının boş olma durumunua göre hata döndürüyoruz.
            }
            if ($hata != "") {
          echo  '<div class="alert alert-danger" role="alert">Resmi Fatura  güncellenemedi.</div>' . $hata;
    }
        }










?>


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
								<h3>Resmi Fatura Güncelle</h3>
							</div>
							<div class="module-body">
					<form method="post" action="" enctype="multipart/form-data" class="form-horizontal row-fluid">
					<div class="control-group">
							<center>
							<div class="control-group">
											
											 <label for="foto">Resmi Fatura :</label>
											 <a target="_blank" href="../dosya/fatura/<?= $sonuc["foto"] ?>">Tıklayın</a>
										<br><input  type="file" name="foto" class="form-control-file" id="foto">
										</div>	
								</center>
											<div class="control-group">
											<label class="control-label" for="basicinput">Görevi :</label>
											<div class="controls">
												<input type="text" name="resmifatura"  id="resmifatura" value="<?= $sonuc["resmifatura"] ?>" class="span8">
											</div>
										</div>

										<div class="control-group">

											<div class="controls">
												<button type="submit" class="btn">Resmi Fatura Güncelle</button>
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
