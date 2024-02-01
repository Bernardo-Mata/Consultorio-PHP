<x-body></x-body>

<!-- Navbar -->

@include('layouts.navigation')

    <!-- Hero Section -->
    <section class="bg-blue-900 text-white text-center py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold mb-4">Tu sonrisa, nuestra prioridad</h1>
            <p class="text-lg">Ofrecemos servicios de imagen dental de alta calidad</p>
            <!-- Agrega un llamado a la acción, botones u otros elementos según tus necesidades -->
        </div>
    </section>

    <!-- Información del Consultorio -->
    <section class="container mx-auto my-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

<!-- Detalles del Servicio -->
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold text-blue-700 mb-4">Servicios</h2>

    <!-- Tarjeta de Servicio 1 -->
    <div class="mb-4">
        <h3 class="text-lg font-semibold text-blue-700 mb-2">Rayos X Dentales</h3>
        <p class="text-gray-700">Realizamos rayos X dentales de alta precisión para un diagnóstico preciso.</p>
        <a href="#" class="text-blue-500">Más información</a>
    </div>

    <!-- Tarjeta de Servicio 2 -->
    <div class="mb-4">
        <h3 class="text-lg font-semibold text-blue-700 mb-2">Tomografía Dental</h3>
        <p class="text-gray-700">Tomografías dentales avanzadas para una visualización detallada de la estructura dental.</p>
        <a href="#" class="text-blue-500">Más información</a>
    </div>

    <!-- Tarjeta de Servicio 3 -->
    <div>
        <h3 class="text-lg font-semibold text-blue-700 mb-2">Diagnóstico Digital</h3>
        <p class="text-gray-700">Utilizamos tecnología de diagnóstico digital para obtener imágenes de alta calidad.</p>
        <a href="#" class="text-blue-500">Más información</a>
    </div>

</div>

            <!-- Horario de Atención -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-blue-700 mb-4">Horario</h2>
                <p class="text-gray-700 mb-2">Lunes a Viernes: 8:00 AM - 6:00 PM</p>
                <p class="text-gray-700">Sábado: 9:00 AM - 2:00 PM</p>
                <x-button>Reserva Ahora</x-button>
            </div>

            <!-- Contacto -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-blue-700 mb-4">Contacto</h2>
                <p class="text-gray-700 mb-2">Teléfono: (123) 456-7890</p>
                <p class="text-gray-700 mb-2">Correo: info@imagendental.com</p>
                <p class="text-gray-700">Dirección: Calle Dental #123</p>
            </div>

        </div>
    </section>

  <x-footer></x-footer>

</body>
</html>