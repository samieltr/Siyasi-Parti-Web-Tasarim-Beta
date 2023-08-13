<div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Ana Sayfa</a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>Panel Sistem Bildirimleri </a></li>
                                <li><a href="onayliuyelist.php"><i class="menu-icon icon-inbox"></i>Onaylı Üye Listesi <b class="label green pull-right">
                                          		  <?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM uyelist where aktif=1");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b> </a></li>
                                <li><a href="onaysizuyelist.php"><i class="menu-icon icon-tasks"></i>Onay Bekleyen Üye Listesi <b class="label orange pull-right">
                                   		  <?php
$sorgu = $baglanti->prepare("SELECT count(*) FROM uyelist where aktif=0");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo $say;
?></b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#haberler"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Haberler</a>
                                    <ul id="haberler" class="collapse unstyled">
                                        <li><a href="haberekle.php"><i class="icon-inbox"></i>Haber Ekle </a></li>
                                        <li><a href="haberliste.php"><i class="icon-inbox"></i>Haberleri Listele</a></li>
                                    </ul>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#duyurular"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Duyurular</a>
                                    <ul id="duyurular" class="collapse unstyled">
                                        <li><a href="duyuruekle.php"><i class="icon-inbox"></i>Duyuru Ekle</a></li>
                                        <li><a href="duyuruliste.php"><i class="icon-inbox"></i>Duyuruları Listele</a></li>
                                    </ul>
                                </li>
								<li><a class="collapsed" data-toggle="collapse" href="#yonetim"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Yönetim</a>
                                    <ul id="yonetim" class="collapse unstyled">
                                        <li><a href="yonetimliste.php"><i class="icon-inbox"></i>Yönetim Listele</a></li>
										 <li><a href="yonetimekle.php"><i class="icon-inbox"></i>Yönetim Ekle</a></li>
                                    </ul>
                                </li>
                                <li><a href="kresimliste.php"><i class="menu-icon icon-table"></i>Kayan Resimler </a></li>
                                <li><a href="teskilatsites.php"><i class="menu-icon icon-bar-chart"></i>Teşkilat İl Siteleri</a></li>
                            </ul>
                            <!--/.widget-nav-->
							
                            <ul class="widget widget-menu unstyled">
								<li><a href="#"><i class="menu-icon icon-envelope"></i>SMS Sistemi</a></li>
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Çıkış</a></li>
                            </ul>
                        </div>