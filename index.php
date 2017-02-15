<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Carga de fuentes de Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Carga de fuentes de Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Roboto:400,500,700,900" rel="stylesheet">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <section class="bienvenidos">
      <div class="container">
        <header class="encabezado">
          <nav class="navbar  navbar-toggleable-md navbar-inverse bg-inverse fixed-top justify-content-end">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">MD  MegaDesing</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nosotros">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portafolio">Portafolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
      </div>
    </nav>
      </header>
      <div class="texto-bienvenido">
          <p class="h5">Bienvenido a nuestro estudio</p>
          <h1 class="display4 mb-3">Soluciones Digitales</h1>
          <a href="#contacto" class="btn btn-primary btn-lg">Contactanos</a>
        </div>
      </div>
    </section>
    <section class="quienes-somos text-center" id="nosotros">
      <div class="container">
        <figure class="img-fluid mx-auto mb-3">
          <img src="images/nosotros.svg" alt="Nosotros">
        </figure>
        <h2 class="h3 py-3">¿Quienes Somos?</h2>
        <p class="py-3">Ponemos a tu alcance un servicio adaptado a tus necesidades, desde una consultoria integral hasta con supervisión de todos y cada uno de los pasos que has de seguir para crear un negocio actual (comunicación, diseño corporarivo, tecnologías...) a productos adaptados a metodologías ágiles de creación de apps diseñandas por nosotros y avaladas por nuestros años de experiencia. </p>
        <a href="#" class="btn btn-secondary btn-lg py-3">Más información</a>
      </div>
    </section>
    <section class="servicios text-center" id="servicios">
      <div class="container">
        <h2 class="h3 py-3">Nuestros Servicios</h2>
        <div class="row">
          <div class="col-md-4 py-3">
            <i class="fa fa-mobile py-3" aria-hidden="true"></i>
            <h3 class="py-3">Modernizate</h3>
            <p>Creamos para ti las mas modernas paginas web para que tus clientes te puedan ver desde cualquier dispositivo</p>
          </div>
          <div class="col-md-4 py-3">
            <i class="fa fa-bullhorn py-3" aria-hidden="true"></i>
            <h3 class="py-3">Haz que te vean</h3>
            <p>Ya que para triunfar no solo necesitas estar ahí, utilizamos las mejores herramientas SEO para que 
            llegues a donde quieras llegar.</p>
          </div>
          <div class="col-md-4 py-3">
            <i class="fa fa-check-square-o py-3" aria-hidden="true"></i>
            <h3 class="py-3">Diseño personalizado</h3>
            <p>Te escuchamos para crear no solo lo que quieres, si no lo que necesitas</p>
          </div>
          
        </div>
      </div>
      
    </section>
    <section class="ultimos-proyectos py-2 text-center" id="portafolio">
      <div class="container">
        <h2 class="h3 spaciado">Últimos proyectos</h2>
        <div class="row">
          <div class="col-md-4">
              <a href="#"><img src="images/trabajos/1.png" alt="Proyecto1" class="img-fluid mx-auto"></a>
          </div>
          <div class="col-md-4">
              <a href="#"><img src="images/trabajos/2.png" alt="Proyecto2" class="img-fluid mx-auto"></a>
          </div>
          <div class="col-md-4">
              <a href="#"><img src="images/trabajos/3.png" alt="Proyecto3" class="img-fluid mx-auto"></a>
          </div>
          <div class="col-md-4">
              <a href="#"><img src="images/trabajos/4.png" alt="Proyecto4" class="img-fluid mx-auto"></a>
          </div>
          <div class="col-md-4">
              <a href="#"><img src="images/trabajos/5.png" alt="Proyecto5" class="img-fluid mx-auto"></a>
          </div>
          <div class="col-md-4">
              <a href="#"><img src="images/trabajos/6.png" alt="Proyecto6" class="img-fluid mx-auto"></a>
          </div>
        </div>

      </div>
    </section>
    <section class="contacto py-2" id="contacto">
      <div class="container">
        <h2 class="h3 spaciado text-center">Contactanos</h2>
        <form>
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" id="telefono" placeholder="Telefono">
  </div>
  <div class="form-group">
    <label for="comentario">Duda/Comentario</label>
    <textarea class="form-control" id="comentario" rows="3"></textarea>
  </div>
  
  </fieldset>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
      </div>
    </section>
    <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; MEGA DESING 2017 </span>
        </div>  
        <div class="col-md-4">
          <ul>
            <li class="d-inline iconos"><a href="#"><i class="fa fa-twitter imagen"></i></a></li>
            <li class="d-inline iconos"><a href="#"><i class="fa fa-facebook imagen"></i></a></li>
            <li class="d-inline iconos"><a href="#"><i class="fa fa-youtube-play imagen"></i></a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="d-inline"><a href="#">Politicas de privacidad</a></li>
            <li class="d-inline"><a href="#">Terminos de uso</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer><!-- Fin Footer -->


    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js""></script>
  </body>
</html>