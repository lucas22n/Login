<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Inicia Sesion</h1>
      <form action="login.php" method="POST">
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <div class="txt_field">
          <input type="text" name="uname" >
          <span></span>
          <label>Usuario</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" >
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
        </div>
      </form>
    </div>
  </body>
</html>
