<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon"><!--? Agregamos la imagen de la pagina-->
  <link href="./css/style.css" rel="stylesheet">


  <!--Sweet Alert 2-->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <title>Supermercados Megaplus</title>

</head>

<body>

  <header>
    <img src="./Img/logo.png" alt="logo" class="logo_img">
    <h1 class="logo"> SUPERMERCADOS MEGAPLUS </h1>
    <nav class="nav">
      <button class="btn_login">Iniciar Sesión</button>
    </nav>
  </header>

  <main>
    <section class="container">
      <div class="container_container">
        <div class="container_texts">
          <h2 class="container_subtitle">Bienvenid@s <br></h2>
          <p class="container_paragraph">Por favor Inicia Sesión.</p>
        </div>

        <div class="container_login">
          <h2 class="login_title">Iniciar Sesión</h2>
          <form action="" method="post" class="form_login">
            <div class="login-form">
              <input type="varchar" name="usuario" id="name"><span class="barra"></span>
              <label for="">Usuario</label>
            </div>

            <div class="login-form">
              <input type="password" name="clave" id="password"><span class="barra"></span>
              <label for="">Password</label>
            </div>

            <div class="login-form">
              <input type="text" name="rol" id="rol"><span class="barra"></span>
              <label for="">Rol</label>
            </div>

            <button id="boton" name="btn_Ingresar" type="submit" class="btn_link">Ingresar</button>

            <p name="olvidar" class="forget"><a>¿Olvidastes tu Contraseña?</a></p>

            <?php include 'controlador/ingresar.php'; ?>
            
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <hr>
    <img class="logos" src="Img/logo.png">
    <p class="copy">&copy Supermercados Megaplus 2022 || Todos los derechos reservados ❤ <br> <span class="ela">Claudia Padilla // Joan Horta // Yecid Leyes</span></p>
  </footer>

  <!--? Aqui van los script de JS-->
  <script src="./js/login.js"></script>
</body>

</html>