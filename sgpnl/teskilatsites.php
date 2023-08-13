<?php 
$sayfa = "Uye Listesi";
include 'inc/vt.php';
include 'inc/header.php';
include 'inc/navbar.php';
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
								<h3>Teşkilat İl Siteleri</h3>
							</div>
							<br>
						
							 
							 
							<div class="module-body table">
							
								 <table border="1"  class="datatable-1 table table-bordered table-striped display" width="100%">
								 <thead>
								 <tr>
								 <th>Sehir Adı</th>
								 <th>Site Adı</th>
								 <th>Durumu</th>
								 <th>Görüntüle</th>
								 <th>Aktiflik</th>
								 </tr>
								 </thead>
								 <tbody>
								 	<?php

$sorgu = $baglanti->prepare("SELECT * FROM ilsiteleri");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
    <tr <?php echo $yon == 'sag' ? 'ml-auto' : 'mr-auto' ?>>
      <td><?= $sonuc['sehir'] ?></td>
      <td><?= $sonuc['altalanadi'] ?></td>
      <td><?php echo $sonuc['aktif'] == 1 ? '<button type="button" class="btn btn-success">Aktif</button>' : '' ?><?php echo $sonuc['aktif'] == 0 ? '<button type="button" class="btn btn-warning">Kapalı</button>' : '' ?></td>
	  <td><a href="https://<?= $sonuc["altalanadi"] ?>" class="btn btn-info">Görüntüle</a></td>
	<td>
	<a href="inc/siteac.php?id=<?= $sonuc["id"] ?>" class="btn btn-success">Aç</a>
	<a href="inc/sitekapat.php?id=<?= $sonuc["id"] ?>" class="btn btn-danger">Kapat</a></td>
	
    </tr> <?php
}
?>
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
<script>

$(document).ready(function() {
    $('#datatable-1').DataTable( {
        "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Şu anda _PAGE_ of _PAGES_ sayfa gösteriliyor",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    } );
} );
</script>