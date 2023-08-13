<?php include 'inc/vt.php';?>
<?php include 'inc/header.php';?>
<?php include 'inc/navbar.php';?>



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<?php include 'inc/sidebar.php';?>
					<!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Güncel SG-Bilişim Duyurular</h3>
							</div>
							<div class="module-body">
							

								<div class="stream-list">
								
								<?php include 'inc/vt2.php';?>
											<?php

$sorgu = $baglanti->prepare("SELECT * FROM duyuru");
$sorgu->execute();
$yon = 'sag';

while ($sonuc = $sorgu->fetch()) {
    ?>
                                            <div class="stream-respond">
												<div class="media stream">
													<a href="#" class="media-avatar small pull-left">
														<img src="images/user.png">
													</a>
													<div class="media-body">
														<div class="stream-headline">
															<h5 class="stream-author">
																<?= $sonuc['gonderen'] ?>
																<small><?= $sonuc['tarih'] ?></small>
															</h5>
															<div class="stream-text">
																<?= $sonuc['erisim'] ?>
															</div>
														</div><!--/.stream-headline-->
													</div>
												</div><!--/.media .stream-->

								</div>
								<?php
}
?>
<!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<?php include 'inc/footer.php';?>