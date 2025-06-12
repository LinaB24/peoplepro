<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/peoplepro/public/css/landingHeader.css">
    <link rel="stylesheet" href="/peoplepro/public/css/landing.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="landing-header">
        <p class="logo">peoplepro</p>
        <nav class="landing-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#sobre-nosotros">Sobre nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">contactanos</a></li>
            </ul>
        </nav>
        <a href="" class="login">iniciar sesión</a>
    </header>
    <main>
        <section id="home" class="contenedor">
            <div class="contenedor-texto">
                <h1 class="titulo-landing">Centraliza tu gestión humana con <span>PeoplePro</span></h1>
                <p class="parrafo-landing">
                La solución web pensada para empresas con grandes equipos. Administra beneficios, áreas de trabajo, capacitaciones, documentación de empleados y permisos desde un solo lugar.
                </p>
            </div>
            <img src="/peoplepro/public/img/home.png" alt="">
            <button class="boton-home">Conoce Más</button>
        </section>
        <section id="sobre-nosotros" class="contenedor">
            <img src="/peoplepro/public/img/nosotros.png" alt="">
            <div class="contenedor-texto">
                <h2 class="titulo-landing">Sobre Nosotros</h2>
                <p class="parrafo-landing">
                En PeoplePro desarrollamos soluciones tecnológicas para facilitar la gestión del talento humano en empresas con grandes equipos de trabajo. Nuestro objetivo es simplificar procesos, optimizar la administración del personal y mejorar la experiencia tanto para empleados como para departamentos de recursos humanos.
                </p>
            </div>
        </section>
        <section id="servicios" class="p-5 bg-light">
            <div class="container">
                <h2>Nuestros Servicios</h2>
                <div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-folder2-open display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Gestión Documental</h5>
                        <p class="card-text">Organiza y accede fácilmente a la documentación de tus empleados desde cualquier lugar.</p>
                    </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-calendar-event display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Permisos y Vacaciones</h5>
                        <p class="card-text">Administra las ausencias, vacaciones y permisos de tu personal de forma clara y controlada.</p>
                    </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-megaphone display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Anuncios de Capacitación</h5>
                        <p class="card-text">Informa fácilmente sobre nuevas capacitaciones y actualizaciones internas importantes.</p>
                    </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-diagram-3 display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Estructura Organizacional</h5>
                        <p class="card-text">Visualiza las áreas de trabajo y la estructura interna de tu empresa de forma ordenada.</p>
                    </div>
                    </div>
                </div>

                </div>
            </div>
        </section>
        <section id="contacto" class="p-5 bg-white">
            <div class="container">
                <h2 class="text-center mb-4">Contáctanos</h2>
                
                <div class="row g-4">
                <!-- Información de contacto -->
                <div class="col-md-6">
                    <h5><i class="bi bi-envelope-fill text-primary"></i> Correo</h5>
                    <p>contacto@peoplepro.com</p>

                    <h5><i class="bi bi-telephone-fill text-primary"></i> Teléfono</h5>
                    <p>+57 300 000 0000</p>

                    <h5><i class="bi bi-geo-alt-fill text-primary"></i> Dirección</h5>
                    <p>Calle Ficticia #123, Bogotá, Colombia</p>
                </div>

                <!-- Formulario -->
                <div class="col-md-6">
                    <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre completo">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" placeholder="tunombre@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                </div>
            </div>
        </section>


    </main>
    <footer class="landing-footer">

    </footer>
</body>
</html>