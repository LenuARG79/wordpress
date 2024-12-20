<?php
// front-page.php
get_header(); 
?>

<!-- Seccion Imagen Principal-->
<section class="imagen-seccion">
    <img src="<?php echo get_template_directory_uri(); ?>/img/fondo.webp" alt="Descripción de la imagen" class="imagen-responsiva">
</section>
<!-- Fin Seccion Imagen Principal-->

<!-- Seccion widget main-->
<div class="contenedor-widget-main">
    <!-- Aquí pegas la sección widget main completa -->
    <div class="card-widget-main">
        <div class="card-widget-icon">
            <i class="fa-regular fa-credit-card"></i>
        </div>
        <div class="card-widget-texto">
            <h6>Medios de Pago</h6>
        </div>
    </div>
    <hr class=".separador">
    <!-- ... continúa con el resto de tus widgets ... -->
</div>
<!-- Fin Seccion widget main-->  

<!-- Seccion Categorias-->
<div class="categorias-container">
    <!-- Pega el contenido de las categorías -->
</div>
<!-- Fin Seccion Categorias-->   

<!-- Seccion Banners-->
<div class="banners-container">
    <!-- Pega las secciones de banners -->
</div>
<!-- Fin Seccion Banners -->

<!-- Seccion Novedades -->
<div class="novedades-container">
    <!-- Pega la sección de novedades y productos -->
    <a href="/pagina-de-productos" class="ver-mas">Ver más</a>
</div>
<!-- Fin Seccion Novedades -->

<?php get_footer(); ?>
