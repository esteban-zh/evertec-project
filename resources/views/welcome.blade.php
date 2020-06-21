<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/main.css" />
  <title>smartfeed</title>
</head>

<body>
  <header>
    <div>
      <!-- --------diseño de barra de navegacion ----------->
      <nav>
        <div class="brain-image">
          <img src="image/cerebro-musculoso.jpg" width="200px" height="80px" />
          <div class="title">smartfeed</div>
        </div>
        <div class="nav-options">
          <ul>
            <li><a href="#">store</a></li>
            <li><a href="#">tips</a></li>
            <li><a href="#">servicios</a></li>
            <li><a href="#">promos</a></li>
          </ul>
        </div>
        <div class="car-image">
          <img src="image/carrito.png" width="40px" height="40px" />
        </div>
      </nav>
    </div>
  </header>

  <!---------- termina barra de navegacion --------------->

  <!------ formulario de registro ---------->

  <section>
    <div class="formularios">
      <!---clase que abarca ambas secciones del formulario-->
      <div class="entrar">
        <!--seccion para iniciar sesion-->
        <form action="/datos/">
          <h2>iniciar sesion</h2>
          <label for="name">usuario</label>
          <br />
          <input type="text" placeholder="" name="name" />
          <br />
          <label for="contraseña">contraseña</label>
          <br />
          <input type="text" placeholder="" name="contraseña" />
          <br />
        </form>
      </div>
      <div class="registrar">
        <!---seccion para registrarse-->
        <form action="/datos/">
          <h2>registrate (si eres nuevo)</h2>
          <label for="e-mail">e-mail</label>
          <br />
          <input type="text" placeholder="" name="e-mail" />
          <br />
          <label for="contraseña">contraseña</label>
          <br />
          <input type="text" placeholder="" name="contraseña" />
          <br />
        </form>
      </div>
    </div>
  </section>
</body>

</html>