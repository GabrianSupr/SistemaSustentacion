<header id="header">
    <div class="top-header">
        <!-- Contenedor del logo -->
        <div class="logo"></div>
    </div>

    <div class="sidebar">
        <!-- Contenedor de la información del usuario -->
        <div class="user-info">
            <div class="user">
            <p>Diego Carmon Zalar</p> <!-- Aquí puedes dinamizar el nombre del usuario -->
            <p>diegozalar123@gmail.com</p>
            
            <button class="dropdown-toggle"></button>

                <!-- Menú desplegable -->
                <div class="dropdown-menu">
                    <a href="#profile">Perfil</a>
                    <a href="#logout">Desconectar</a>
                </div>
        </div>
        </div>

        <ul>
            <li><a href="<?=$ruta?>/"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
            <li><a href="<?=$ruta?>/Clientes"><i class="fa-solid fa-user"></i> Clientes</a></li>
            <li>
                <a class="accordion-toggle"><i class="fa-solid fa-paint-roller"></i> Gestion de Productos</a>
                <ul class="accordion-content">
                    <li><a href="<?=$ruta?>/Productos">Productos</a></li>
                    <li><a href="#categorias">Categorías</a></li>
                    <li><a href="#proveedores">Proveedores</a></li>
                </ul>
            </li>
            <li><a href="#about"><i class="fa-solid fa-box-open"></i> Gestion de Existencia</a></li>
            <li><a href="#contact"><i class="fa-solid fa-users"></i> Gestion de Usuarios</a></li>
            <li><a href="#contact"><i class="fa-solid fa-chart-line"></i> Reportes</a></li>
            <li><a href="#config"><i class="fa-solid fa-gear"></i> Configuración</a></li>
        </ul>
    </div>
</header>
