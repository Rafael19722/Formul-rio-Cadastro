<?php require_once "login-usuario.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="style_login.css">
</head>
<body>
  <div class="container">
    <div class="input-group">
      <form action="" method="post">
        <div class="input-box">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="input-box">
          <label for="password">senha</label>
          <input type="password" id="password" name="password" placeholder="senha" required>
        </div>
        <div class="cadastre-se">
          <button><a href="./index.html">cadastre-se</a></button>
        </div>
        <div class="continue-button">
          <button type="submit" name="acessar"><a>continuar</a></button>
        </div>
      </form>
      <?php 
        if(isset($_POST['acessar'])) {
          login($conn);
        }
      ?>
    </div>
  </div>
</body>
</html>