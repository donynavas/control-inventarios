<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>SEDE INA</title>
    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="js/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
  
<div class="login-container">
  <section class="login" id="login">
    <header>
      <h2>SEDE INA, APOPA</h2>
      <h4>Login</h4>
    </header>
    <form class="login-form" action="validar.php" method="post">
      <input type="text" class="login-input" name ="username" placeholder="User" required autofocus/>
      <input type="password" class="login-input" name="password" placeholder="Password" required/>
      <div class="submit-container">
        <button type="submit" class="login-button">ENTRAR</button>
      </div>
    </form>
  </section>
  <p>2022 - <a href="https://www.twitter.com/isacfadoni">Sede Instituto Nacional Apopa </a></p>
</div>

</body>
</html>
