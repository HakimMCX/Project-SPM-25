<?php include 'header.php'; ?>
<htm>
<!-- PANGGIL ISI -->
<div id= "isi">

<h2>PENDAFTARAN PELANGGAN BARU </H2>
<form method ="POST" action="signup_simpan.php">
<font color='red'>*Pastikan maklumat anda anda betul sebelum
membuat pendaftaran.</font> <br>
<strong style="font-size: 20px;">Nombor HP</strong><br>

<input style="width: 200px;" id="isimcx" type="text" name="nomhp" placeholder="Nombor HP 
tanpa tanda -"minlength='9' maxlength='11'
size="30" onkeypress='return event.charCode >= 48 &&
event.charCode <= 57' required autofokus><br>

<font color='red'>*Password adalah
4 digit di depan nombor HP anda yang dijana secara automatik
</font>
<br>
<strong style="font-size: 20px;">Nama</strong><br>
<input style="width: 200px;" id="isimcx" type="text" name="nama" placeholder="Nama Anda"
size="60" required></p>

<br>
<div>

<button name="hantar" type type="submit">DAFTAR</button>
<button type="reset">RESET</button>

</div>
</form>
</div>
</html>