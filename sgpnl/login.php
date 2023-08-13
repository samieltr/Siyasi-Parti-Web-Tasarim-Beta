<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SG-Bilişim Yönetim Paneli v2 Beta</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  		<img width="100" src="images/logosg.png">
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
				
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
<?php
session_start(); //oturum başlattık
include("inc/vt.php"); //veri tabanına bağlandık 

//eğer mevcut oturum varsa sayfayı yönlendiriyoruz.
if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
    header("location:index.php");
} //eğer önceden beni hatırla işaretlenmiş ise oturum oluşturup sayfayı yönlendiriyoruz.
else if (isset($_COOKIE["cerez"])) {
    //Kullanıcı adlarını çeken sorgumuz

    $sorgu = $baglanti->prepare("select kadi from kullanicilar");
    $sorgu->execute();


    //Kullanıcı adlarını döngü yardımı ile tek tek elde ediyoruz
    while ($sonuc = $sorgu->fetch()) {
        //eğer bizim belirlediğimiz yapıya uygun kullanıcı var mı diye bakıyoruz.
        if ($_COOKIE["cerez"] == md5("aa" . $sonuc['kadi'] . "bb")) {

            //oturum oluşturma buradaki değerleri güvenlik açısından
            //farklı değerler yapabilirsiniz
            //aynı zamanda kullanıcı adınıda burada tuttum
            $_SESSION["Oturum"] = "6789";
            $_SESSION["kadi"] = $sonuc['kadi'];

            //sonrasında index sayfasına yönlendiriyorum
            header("location:index.php");
        }
    }
}
//Giriş formu doldurulmuşsa kontrol ediyoruz
if ($_POST) {
    $txtKadi = $_POST["txtKadi"]; //Kullanıcı adını değişkene atadık
    $txtParola = $_POST["txtParola"]; //Parolayı değişkene atadık
}
?>


	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form id="form1" method="post" class="form-vertical">
						<div class="module-head">
							<h3>Giriş</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text"name="txtKadi" value='<?php echo @$txtKadi ?>' id="inputKadi" placeholder="Kullanıcı Adı">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" name="txtParola"  placeholder="Şifreniz">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" ID="btnGiris" class="btn btn-primary pull-right">Giriş</button>
									<label class="checkbox">
										<input type="checkbox" ID="ckbHatirla" name="ckbHatirla"> Hatırla Beni
									</label>
									<?php
									
                        //Post varsa yani submit yapılmışsa veri tabanından kontrolü yapıyoruz.
                        if ($_POST) {
                            //sorguda kullanıcı adını alıp ona karşılık parola var mı diye bakıyoruz.
                            $sorgu = $baglanti->prepare("select parola from kullanicilar where kadi=:kadi");
                            $sorgu->execute(array('kadi' => htmlspecialchars($txtKadi)));
                            $sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $txtKadi)) {
echo "kullanıcı adınızda karakterler olmamalıdır. yalnızca harf, sayı ve boşluk olmalıdır.";
}

                            //parolaları md5 ile şifreledim ve başına sonuna kendimce eklemeler yaptım.
                            if (md5("56" . $txtParola . "23") == $sonuc["parola"]) {
                                $_SESSION["Oturum"] = "6789"; //oturum oluşturma
                                $_SESSION["kadi"] = $txtKadi;

                                //eğer beni hatırla seçilmiş ise cookie oluşturuyoruz.
                                //cookie de şifreleyerek kullanıcı adından oluşturdum
                                if (isset($_POST["ckbHatirla"])) {
                                    setcookie("cerez", md5("aa" . $txtKadi . "bb"), time() + (60 * 60 * 24 * 7));
                                }
                                header("location:index.php"); //sayfa yönlendirme
                            } else {
                                //eğer kullanıcı adı ve parola doğru girilmemiş ise
                                //hata mesajı verdiriyoruz
                                echo "Kullanıcı adı veya parola yanlış!";
                            }
                        }
                        ?>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2021 SG-Bilişim Yönetim Paneli Beta v2.0 <a href="https://sg-bilisim.com/">SG-Bilisim.Com</a></b> Tüm Hakları Saklıdır.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>