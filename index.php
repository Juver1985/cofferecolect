<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Recolección de Café - CaféVerde</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1506619216599-9d16d0903dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="font-sans text-gray-800">
    <!-- Barra de Navegación -->
    <nav class="bg-green-800 text-white fixed w-full z-10 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">CaféVerde</a>
            <div class="space-x-6">
                <a href="#inicio" class="hover:text-green-200">Inicio</a>
                <a href="#nosotros" class="hover:text-green-200">Nosotros</a>
                <a href="#caracteristicas" class="hover:text-green-200">Características</a>
                <a href="#contacto" class="hover:text-green-200">Contacto</a>
                <a href="login.php" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full">Iniciar Sesión</a>
                
            </div>
        </div>
    </nav>

    <!-- Sección Hero -->
    <section id="inicio" class="hero-bg h-screen flex items-center text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-4">CaféVerde: Innovación en la Recolección de Café</h1>
            <p class="text-xl mb-8">Optimiza la producción y asegura la calidad del café con nuestro sistema integral de recolección.</p>
            <a href="#contacto" class="bg-green-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-700 transition">Contáctanos</a>
        </div>
    </section>

    <!-- Sección Nosotros -->
    <section id="nosotros" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Nuestra Misión</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="https://images.unsplash.com/photo-1512568400610-62da28bc8a13?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Café en grano" class="rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-8">
                    <p class="text-lg mb-4">En CaféVerde, nos dedicamos a revolucionar la industria del café mediante un sistema de recolección eficiente y sostenible. Nuestra tecnología conecta a productores, recolectores y distribuidores para garantizar un proceso transparente y de alta calidad.</p>
                    <p class="text-lg">Con años de experiencia en el sector, ofrecemos soluciones innovadoras que respetan el medio ambiente y potencian la economía local.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Características -->
    <section id="caracteristicas" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Características de Nuestro Sistema</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="text-xl font-semibold mb-2">Trazabilidad Completa</h3>
                    <p>Seguimiento en tiempo real desde la recolección hasta la distribución, garantizando transparencia.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <h3 class="text-xl font-semibold mb-2">Automatización</h3>
                    <p>Procesos optimizados con tecnología de punta para reducir tiempos y costos.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                    <h3 class="text-xl font-semibold mb-2">Sostenibilidad</h3>
                    <p>Prácticas ecológicas que protegen el medio ambiente y apoyan a las comunidades locales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Beneficios -->
    <section class="py-20 bg-green-800 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Beneficios de CaféVerde</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Calidad Garantizada</h3>
                    <p>Mejora la calidad del café con procesos estandarizados y monitoreo constante.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Mayor Eficiencia</h3>
                    <p>Reduce los tiempos de recolección y procesamiento, aumentando la productividad.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Impacto Social</h3>
                    <p>Apoya a los productores locales con mejores condiciones y precios justos.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Datos Accionables</h3>
                    <p>Obtén informes detallados para tomar decisiones estratégicas en tiempo real.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Contáctanos</h2>
            <div class="max-w-lg mx-auto">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                        <textarea id="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>
                    <button class="bg-green-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-700 transition w-full">Enviar Mensaje</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer class="bg-green-900 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 CaféVerde. Todos los derechos reservados.</p>
            <div class="mt-4">
                <a href="#" class="text-green-200 hover:text-white mx-2">Política de Privacidad</a>
                <a href="#" class="text-green-200 hover:text-white mx-2">Términos de Servicio</a>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling para los enlaces de navegación
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>