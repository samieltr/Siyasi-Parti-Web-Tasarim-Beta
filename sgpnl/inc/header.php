<?php
session_start(); //oturum başlattık

//eğer mevcut oturum varsa sayfayı yönlendiriyoruz.
if (!(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "9899")) {
    header("location:login.php");
	exit();
} //eğer önceden beni hatırla işaretlenmiş ise oturum oluşturup sayfayı yönlendiriyoruz.
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SG-Bilişim Yönetim Paneli Beta v2.0</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'rel='stylesheet'>
		<script src="css/ck5/build/ckeditor.js"></script>
   </head>