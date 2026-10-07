<h3 style="text-align: center; font-size: 25px; margin: 40px 0px 0px 0px;">LOG MASUK</h3>
    <p style="text-align: center; font-size: 14px;">Untuk ruangan pelanggan sedia ada</p>
    <form style="text-align: center; margin-bottom: 0px;" method="post" action="signin_semak.php">
    <strong>Nombor HP:</strong><br>
    <input type="text" id='isimcx' name="user" placeholder="TAIP DI SINI" size="11%" minlength="10" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required autofocus />

    <br>

    <strong>Kata Laluan:</strong><br>
    <input id='isimcx' type="password" name="pass" placeholder="******" size="11%" minlength="4" maxlength="4" required />
    <br><br>
    <button id="butemcx" type="submit" name="hantar">SIGN IN</button>
    <button id="butemcx" type="reset">RESET</button>
    </form>

    <br>
    <h3 style="text-align: center; font-size: 25px; margin: 0px;">DAFTAR BARU</h3>
    <p style="text-align: center; font-size: 14px;">Sila daftar sebagai pelanggan baru jika masih tidak mempunyai akaun</p>
    <a href="signup.php" id="signup"><button id="butemcx">SIGN UP</button></a>
	