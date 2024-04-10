
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Si Market</title>
  <?php include_once 'header.php'; ?>
</head>
<body>

    <!-- HÉROE -->
  <section class="hero">
    <div class="container flex flex-column align-center center">
      <h1>Incrementa tu marca</h1>
      <h2>20% Descuento</h2>
      <p>¡Crece ahora!</p>
    </div>
  </section>

  <!-- CONTENEDOR PRINCIPAL -->
  <div class="container">

    <!-- BANNER DE VENTA -->
    <section>
      <div class="flex align-center center banner">
        <img alt="Botas marrones" src="img/brown-boots.jpg">
        <div class="banner-text">
          <div class="text-light">Creamos por ti</div>
          <div class="text-secondary">Dibujamos tus ideas</div>
          <div class="text-primary">Somos una herramienta</div>
        </div>
        <img alt="Botas grises" src="img/grey-boots.jpg">
      </div>
    </section>

    <!-- CATEGORÍAS -->
    <section>
      <div class="category">
        <a href="#">
          <img alt="Splash Chic" src="img/category-1.jpg" />
          <div class="category-text">
            <h3> ¿Marketing?</h3>
            <div>Te damos 3 señales</div>
          </div>
        </a>
      </div>
      <div class="category">
        <a href="#">
          <img alt="Kid Klimbers" src="img/category-2.jpg" />
          <div class="category-text">
            <h3>Competencia</h3>
            <div>Diferencia</div>
          </div>
        </a>
      </div>
      <div class="category">
        <a href="#">
          <img alt="Pack It In" src="img/category-3.jpg" />
          <div class="category-text">
            <h3> Servicios</h3>
            <div>Productos</div>
          </div>
        </a>
      </div>
      <div class="category">
        <a href="#">
          <img alt="Nature's AC" src="img/category-4.jpg" />
          <div class="category-text">
            <h3>Reinvencion</h3>
            <div>Tiempo</div>
          </div>
        </a>
      </div>
    </section>

    <!-- BANNER COMPLETO -->
    <section class="full-banner">
      <div class="full-banner-image"></div>
      <div class="flex flex-column align-center center full-banner-sidebar">
        <h4>Un verdadero equipo</h4>
        <div>SI Market</div>
        <div>Posicionamiento e incremento en ventas</div>
        <a class="btn btn-default" href="#">Mandar a un video promocional</a>
      </div>
    </section>

  </div>
</body>
<?php include_once 'footer.php'; ?>
</html>
