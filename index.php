
<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login és regisztráció in HTML és CSS </title>-->
    <link rel="stylesheet" href="style/style.css">
    <!-- CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalória Kalkulátor</title>
   </head>
<body>
  <div class="container">
    
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="img/frontImg.jpg" alt="">-->
        <div class="text">
          <span class="text-2">Kezd el te is </span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Kövesd nyomon a kalóriákat <br> velünk együtt </span>
          <span class="text-2">Kezd el</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Bejelentkezés</div>



            

          <form action="login.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="E-mail címed" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="jelszo" placeholder="Jelszavad" required>
              </div>
              <div class="text"><a href="#">Nincs meg a jelszó??</a></div>
              <div class="button input-box">
              <input type="submit" name="submit">
              </div>
              <div class="text sign-up-text">Nincs fiókod? <label for="flip">Fiók készítése</label></div>
            </div>
        </form>
      </div>





        <div class="signup-form" >
          <div class="title">Regisztráció</div>

        <form action="regisztracio.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="nev" placeholder="Add meg a neved" required>
              </div>

              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Add meg az E-mail címed" required>
              </div>

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name ="jelszo" id="pass" placeholder="Add meg a jelszavad" required>
              </div>

              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="jelszo_megerosites" id="repass"placeholder="Jelszavad megerősítése" required>
              </div>

              <div class="button input-box">
                
                <input type="submit" name="submit">
              </div>

              <div class="text sign-up-text">Már van fiókod?? <label for="flip">Jelentkezz be</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
