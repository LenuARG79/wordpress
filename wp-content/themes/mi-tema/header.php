<?php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="contenedor-widget-header">
        <div><span></span></div>
        <div>
            <p class="widget-header-texto">Tel.:1111-11111</p>
        </div>    
        <div>
            <a class="widget-header-enlace" href="#productos">Nosotros</a>
            <a class="widget-header-enlace" href="#contacto">Contacto</a>
        </div>
        <div><span></span></div>
    </div>
    <div class="contenedor_logo_buscador_accesor_carrito">
        <div class="logo">
            <!-- El logo puede ser un enlace a la página principal -->
            <h1><a href="<?php echo home_url(); ?>">Logo</a></h1>
        </div>
        <div class="contenedor-buscador">
            <form action="<?php echo home_url('/'); ?>" method="get" class="form-buscador">
                <input type="text" name="s" id="search-input" class="input-buscador" placeholder="Buscar productos..." required>
                <button type="submit" class="boton-buscador">Buscar</button>
            </form>
        </div>
        <div class="icon-container">
            <div class="user-icon">
                <i class="fas fa-user" onclick="toggleDropdown()"></i>
                <div class="dropdown-menu" id="userDropdown">
                    <a href="#" class="dropdown-link">Iniciar Sesión</a>
                    <a href="#" class="dropdown-link">Registrarse</a>
                </div>
            </div>
            <div class="cart-icon">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
    <div class="menu-contenedor-categorias">
        <!-- Aquí podrías usar wp_nav_menu si lo deseas -->
        <ul class="menu-categorias">
            <li><a href="#">Alcalinas</a></li>
            <li><a href="#">Litio</a></li>
            <li><a href="#">Botón</a></li>
            <li><a href="#">Telefonía fija</a></li>
            <li><a href="#">Especiales</a></li>
        </ul>
    </div>
    <div class="menu-contenedor-categorias-mobil">
        <i class="fas fa-bars menu-toggle" onclick="toggleMenu()"></i>
        <div class="menu-desplegable" id="menu">
            <i class="fas fa-times close-menu" onclick="toggleMenu()"></i>
            <div class="contenedor-buscador">
                <form action="<?php echo home_url('/'); ?>" method="get" class="form-buscador">
                    <input type="text" name="s" id="search-input" class="input-buscador" placeholder="Buscar productos..." required>
                    <button type="submit" class="boton-buscador">Buscar</button>
                </form>
            </div>
            <ul class="menu-categorias-mobil">
                <li><a href="#">Alcalinas</a></li>
                <li><a href="#">Litio</a></li>
                <li><a href="#">Botón</a></li>
                <li><a href="#">Telefonía fija</a></li>
                <li><a href="#">Especiales</a></li>
            </ul>
        </div>
    </div>
</header>
