<?php
include('../../sgpnl/inc/vt.php');	
try {

    $sorgu = $baglanti->query("SELECT * FROM ilsiteleri where aktif=0 and sehir='adana'");

    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
       include('bakim.php');	
    }
	  $sorgu = $baglanti->query("SELECT * FROM ilsiteleri where aktif=1 and sehir='adana'");

    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
       include('anasayfa.php');	
    }

} catch (PDOException $e) {
    die($e->getMessage());
}

$baglanti = null;

?>