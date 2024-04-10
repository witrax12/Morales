<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Si Market</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
</head>
<body>

<?php include_once 'header.php'; ?>

<!-- Carrusel de prueba -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <a href="url-del-primer-video">
      <iframe width="1310" height="527" src="https://www.youtube.com/embed/YrVVXFMgXrw" title="Pagué Por Un Detector De Mentiras Para Investigar A Mis Amigos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5>Primer video</h5>
        <p>Algunos comentarios representativos para el primer video.</p>
      </div>  
    </div>
    <div class="carousel-item" data-interval="2000">
      <a href="url-del-segundo-video">
      <iframe width="1310" height="527"   src="https://www.youtube.com/embed/YrVVXFMgXrw" title="Pagué Por Un Detector De Mentiras Para Investigar A Mis Amigos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5>Segundo video</h5>
        <p>Algunos comentarios representativos para el segundo video.</p>
      </div>
    </div>
    <div class="carousel-item">
      <a href="url-del-tercer-video">
      <iframe width="1310" height="527" src="https://www.youtube.com/embed/YrVVXFMgXrw" title="Pagué Por Un Detector De Mentiras Para Investigar A Mis Amigos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5>Tercer video</h5>
        <p>Algunos comentarios representativos para el tercer video.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Fin del carrusel -->

<?php include_once 'footer.php'; ?>

<!-- Script personalizado para la animación del carrusel -->
<script>
  $(document).ready(function() {
    $('.carousel').carousel();
  });
</script>
<script>
    function playVideo(videoId) {
      // Obtener todos los videos del carrusel
      var videos = document.querySelectorAll('.carousel-item video');
  
      // Pausar todos los videos excepto el video actualmente en reproducción
      videos.forEach(function(video) {
        if (video.id !== videoId && !video.paused) {
          video.pause();
        }
      });
    }
  </script>
</body>
</html>
