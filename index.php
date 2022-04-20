<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- título de página -->
    <title>Menú Restaurante</title>
    <!-- ícono de pàgina -->
    <link rel="shortcut icon" href="./img/apple-whole-solid.svg" type="image/x-icon">
    <!-- fuentes -->
    <!-- javascript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- javascript-->
</head>

<body background="./img/fondo2.png">
<?php
/* lectura del documento xml */
if (file_exists('xml/menu.xml')) {
    $menu = simplexml_load_file('xml/menu.xml');
} else {
    exit('Error abriendo menu.xml.');
}
?>
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand scaleHover" href="./">Menu</a>
    <button
      class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active scaleHover" aria-current="page" href="#car">Carnes y Pescados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scaleHover" href="#ens">Ensaladas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scaleHover" href="#arr">Arroces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scaleHover" href="#boc">Bocadillos y Hamburguesas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scaleHover" href="#tap">Tapas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scaleHover" href="#pos">Postres</a>
        </li>
        <li class="nav-item scaleHover">
          <a class="nav-link disabled"
            >Disabled</a
          >
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- carrusel (slider) -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/foto1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/foto2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/foto3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Platos -->
<div>
    <h1 class="center padding scaleHover">
        <u>Menú Restaurante David</u>
    </h1>
</div>
<div class="row-c">
    <div id='car' class="column-2 padding">
        <?php
        echo "<h1 class='scaleHover'><u>Carnes y Pescados</u></h1>";
        foreach($menu->platos as $platos){
            if ($platos['plato']=='Carnes y Pescados') {
                echo '<h3 class="scaleHover">'.$platos->nombre.'</h3>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>';
                echo '<h5 class="desc scaleHover">'.$platos->descripcion.'</h5>';
                foreach($platos->caracteristicas->item as $item) {
                    echo "<img class='alimentos scaleHover' src=".$item['src']." alt=''>";
                }
            }
            }
        ?>
    </div>
</div>
<div class="row-c">
    <div id='ens' class="column-2 padding">
        <?php
        echo "<h1 class='scaleHover'><u>Ensaladas</u></h1>";
        foreach($menu->platos as $platos){
            if ($platos['plato']=='Ensaladas') {
                echo '<h3 class="scaleHover">'.$platos->nombre.'</h3>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>';
                echo '<h5 class="desc scaleHover">'.$platos->descripcion.'</h5>';
                foreach($platos->caracteristicas->item as $item) {
                    echo "<img class='alimentos scaleHover' src=".$item['src']." alt=''>";
                }
            }
            }
        ?>
    </div>
</div>
<div class="row-c">
    <div id='arr' class="column-2 padding">
        <?php
        echo "<h1 class='scaleHover'><u>Arroces</u></h1>";
        foreach($menu->platos as $platos){
            if ($platos['plato']=='Arroces') {
                echo '<h3 class="scaleHover">'.$platos->nombre.'</h3>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>';
                echo '<h5 class="desc scaleHover">'.$platos->descripcion.'</h5>';
                foreach($platos->caracteristicas->item as $item) {
                    echo "<img class='alimentos scaleHover' src=".$item['src']." alt=''>";
                }
            }
            }
        ?>
    </div>
</div>
<div class="row-c">
    <div id='boc' class="column-2 padding">
        <?php
        echo "<h1 class='scaleHover'><u>Bocadillos y Hamburguesas</u></h1>";
        foreach($menu->platos as $platos){
            if ($platos['plato']=='Bocadillos y Hamburguesas') {
                echo '<h3 class="scaleHover">'.$platos->nombre.'</h3>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>';
                echo '<h5 class="desc scaleHover">'.$platos->descripcion.'</h5>';
                foreach($platos->caracteristicas->item as $item) {
                    echo "<img class='alimentos scaleHover' src=".$item['src']." alt=''>";
                }
            }
            }
        ?>
    </div>
</div>
<div class="row-c">
    <div id='tap' class="column-2 padding">
        <?php
        echo "<h1 class='scaleHover'><u>Tapas</u></h1>";
        foreach($menu->platos as $platos){
            if ($platos['plato']=='Tapas') {
                echo '<h3 class="scaleHover">'.$platos->nombre.'</h3>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>';
                echo '<h5 class="desc scaleHover">'.$platos->descripcion.'</h5>';
                foreach($platos->caracteristicas->item as $item) {
                    echo "<img class='alimentos scaleHover' src=".$item['src']." alt=''>";
                }
                
            }
            }
        ?>
    </div>
</div>
<div class="row-c">
    <div id='pos' class="column-2 padding">
        <?php
        echo "<h1 class='scaleHover'><u>Postres</u></h1>";
        foreach($menu->platos as $platos){
            if ($platos['plato']=='Postres') {
                echo '<h3 class="scaleHover">'.$platos->nombre.'</h3>'.'<span> ('.$platos->calorias.') </span>'."-----------------------------------".'<span>'.$platos->precio.'</span>';
                echo '<h5 class="desc scaleHover">'.$platos->descripcion.'</h5>';
                foreach($platos->caracteristicas->item as $item) {
                    echo "<img class='alimentos scaleHover' src=".$item['src']." alt=''>";
                }
            }
            }
        ?>
    </div>
</div>
<div class="et_pb_section et_pb_section_4 et_pb_with_background column-1 center">
	<div>
        <h2 class="et_pb_module_header padding scaleHover">HAZ TU RESERVA</h2>
        <div class="scaleHover"><p>¡Te estamos esperando!</p></div>
    </div>
	<div>
        <a class="et_pb_button et_pb_promo_button padding scaleHover" href="https://thesteakhouse.myrestoo.net/es/reservar">RESERVA AQUÍ</a>
    </div>
<div>
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.306112945396!2d2.1634482618692528!3d41.3891580806623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f3275cbf93%3A0xd21ab68683007905!2sRambla%20de%20Catalunya%2C%2027%2C%2008007%20Barcelona!5e0!3m2!1ses!2ses!4v1649019602358!5m2!1ses!2ses" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="footer">
    <p class="scaleHover">
        <strong>CONTACTO</strong>
    </p>
    <p class="scaleHover">
        <a href="davidhb2003@gmail.com">davidhb2003@gmail.com</a>
    </p>
    <p class="scaleHover">
        <span>+34 930 072 593</span>
    </p>
    <p class="scaleHover">
        <span>Rambla de Catalunya, 27</span>
    </p>
    <p class="scaleHover">
        <span>08007, Barcelona, España</span>
    </p>
</div>
</body>

</html>