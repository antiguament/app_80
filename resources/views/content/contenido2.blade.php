<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escena Urbana Medellín</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes neonGlow {
            0% { text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #0073e6, 0 0 20px #0073e6; }
            50% { text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #ff0000, 0 0 40px #ff0000; }
            100% { text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #0073e6, 0 0 20px #0073e6; }
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        .neon-text {
            animation: neonGlow 3s infinite alternate;
        }
        .gold-gradient {
            background: linear-gradient(135deg, rgba(212,175,55,0.8) 0%, rgba(212,175,55,0.2) 100%);
        }
        .artist-card:hover .artist-image {
            transform: scale(1.05);
            filter: brightness(1.1) drop-shadow(0 0 10px rgba(255, 0, 0, 0.7));
        }
        .artist-card:hover .artist-name {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="bg-black text-white font-['Montserrat']">
    <!-- Hero Section -->
    <header class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-transparent to-black z-10"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')] bg-cover bg-center opacity-50"></div>
        </div>
        
        <div class="relative z-20 text-center px-4">
            <h1 class="text-6xl md:text-8xl font-['Bebas_Neue'] mb-6 neon-text">
                SANGRE DE RAICES
            </h1>
            <p class="text-xl md:text-2xl max-w-2xl mx-auto animate-fade-in" style="animation-delay: 0.5s">
                Donde el ritmo de las calles se convierte en arte y la cultura urbana late con energía propia.
            </p>
        </div>
        
        <div class="absolute bottom-10 left-0 right-0 flex justify-center z-20 animate-fade-in" style="animation-delay: 1s">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </header>





    @include('content.contenido1')




    <!-- Culture Section -->
    <section class="py-20 px-4 md:px-10 lg:px-20 bg-gradient-to-b from-black via-gray-900 to-black">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in" style="animation-delay: 0.3s">
                    <h2 class="text-4xl md:text-5xl font-['Bebas_Neue'] mb-8 gold-gradient bg-clip-text text-transparent">
                        LA CULTURA QUE NOS MUEVE
                    </h2>
                    <p class="text-lg mb-6 gold-gradient bg-clip-text text-transparent">
                        Medellín no es solo una ciudad, es un movimiento. Aquí, el rap y el hip-hop son más que música, son la voz de una generación que transformó el dolor en arte y las calles en escenarios.
                    </p>
                    <p class="text-lg mb-6 gold-gradient bg-clip-text text-transparent">
                        Desde los grafitis que adornan la Comuna 13 hasta los beats que resuenan en el centro, cada rincón cuenta una historia de resistencia, creatividad y orgullo paisa.
                    </p>
                    <div class="flex space-x-4">
                        <span class="px-4 py-2 bg-red-600 rounded-full text-sm font-bold">Hip-Hop</span>
                        <span class="px-4 py-2 bg-blue-600 rounded-full text-sm font-bold">Rap Consciente</span>

                    </div>
                </div>
                <div class="relative h-96 rounded-xl overflow-hidden animate-fade-in" style="animation-delay: 0.6s">
                    <div class="absolute inset-0 bg-[url('{{ asset('images/img5.png') }}')] bg-cover bg-center"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-black opacity-70"></div>
                    <div class="relative z-10 h-full flex items-center justify-center">
                        <p class="text-2xl md:text-3xl font-bold text-center max-w-md px-4 neon-text">
                            "En Medellín, el ritmo es nuestra resistencia"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 px-4 bg-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-3xl font-['Bebas_Neue'] mb-4">MEDELLÍN URBANO</h3>
                    <p class="text-gray-400">La escena musical que está cambiando el juego</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-white hover:text-red-500 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-blue-400 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-red-500 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-green-400 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                        </svg>
                    </a>
                </div>
            </div>
          
        </div>
    </footer>

    <script>
        // Animaciones al cargar la página
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.animate-fade-in');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
                setTimeout(() => {
                    el.style.opacity = '1';
                }, index * 200);
            });
        });
    </script>
</body>
</html>