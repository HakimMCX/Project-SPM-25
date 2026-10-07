<?php
#MULA SESI
session_start();
#SAMBUNG P.DATA
require 'database.php';
?>
<!-- UNTUK RESPONSIVE PAGE -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- PANGGIL CSS EXTERNAL -->
<link rel="icon" type="image/png" href="imej/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- NAMA SISTEM DI TITLE BAR BROWSER -->
<title><?php echo $namasys;?></title>
<!-- PAPAR MAKLUMAT SISTEM DI BANER -->
<div class="header">

<!-- PAPAR UTILITI BUTANG ZOOM IN OUT WARNA-->
<?php include 'utiliti.php'; ?>
</div>