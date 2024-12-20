<?php
// footer.php
?>

<footer>
    <div class="footer-container">
        <div class="logo">
            <h1><a href="<?php echo home_url(); ?>">Logo</a></h1>
        </div>
        <div class="nav-links">
            <h3>Links</h3>
            <ul>
                <li><a href="<?php echo home_url('/nosotros'); ?>">Nosotros</a></li>
                <li><a href="<?php echo home_url('/vta-mayorista'); ?>">Vta. Mayorista</a></li>
                <li><a href="<?php echo home_url('/vta-empresas'); ?>">Vta. Empresas</a></li>
                <li><a href="<?php echo home_url('/contacto'); ?>">Contacto</a></li>
            </ul>
        </div>
        <div class="contact-info">
            <h3>Datos</h3>
            <div class="card-footer">
                <i class="fa-solid fa-map-pin"></i>
                <p>Cucha cucha 693, CABA.</p>
            </div>
            <div class="card-footer">
                <i class="fa-solid fa-phone"></i>
                <p>Tel.: 11-5148-5804</p>
            </div>
            <div class="card-footer">
                <i class="fa-solid fa-clock"></i>
                <p>Horario: Lun a Vie 10 a 17hs</p>
            </div>
            <div class="card-footer">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <section class="copyright-container">
        <p>&copy; <?php echo date('Y'); ?> Mi Tienda</p>
        <p>Diseñada por IMPULSA | MKT</p>
    </section>    
</footer>

<?php wp_footer(); ?>
</body>
</html>