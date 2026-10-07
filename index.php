<body>
  <div class="container">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <?php 
    include 'header.php'; 
    include 'fungsi.php';
    ?>
    <!-- PAPAR DI RUANGAN MENU -->
    <div id="menu">
    <?php include 'signin.php'; ?>
    </div>
    <!-- PAPAR DIRUANGAN ISI -->
    <div id="isi">
    <h2 style="text-decoration: overline underline; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); font-family: 'Courier New', Courier, monospace; color: #000000; font-size: 40px; text-align: center;"><?php echo strtoupper ("SELAMAT DATANG KE ".$namasys1); ?></h2>
    <?php include 'list_produk.php'; ?>
</div>
  </div>
</body>
