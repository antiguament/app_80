











<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escena Urbana Medellín</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-image: radial-gradient(circle at 10% 20%, rgba(255, 0, 0, 0.1) 0%, transparent 20%), 
                              radial-gradient(circle at 90% 80%, rgba(0, 102, 255, 0.1) 0%, transparent 20%);
        }

        @keyframes neon-glow {
            0% { text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #ff0000, 0 0 20px #ff0000; }
            50% { text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #0066ff, 0 0 40px #0066ff; }
            100% { text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #ff0000, 0 0 20px #ff0000; }
        }
        
        .neon-text {
            animation: neon-glow 3s infinite alternate;
        }
        
        .gold-text {
            color: #FFD700;
            text-shadow: 0 0 5px rgba(255, 215, 0, 0.7);
        }
        
        .artista-container {
            position: relative;
            overflow: visible;
            margin: 2rem;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
        
        .artista-container::before {
            content: "";
            position: absolute;
            inset: -5px;
            border-radius: 20px;
            background: linear-gradient(45deg, #ff0000, #0066ff, #ff00ff);
            z-index: -1;
            filter: blur(10px);
            opacity: 0.7;
            transition: all 0.5s ease;
        }
        
        .artista-container:hover::before {
            opacity: 1;
            transform: scale(1.02);
        }
        
        .img-frame {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 
                0 0 15px rgba(255, 0, 0, 0.6),
                0 0 30px rgba(0, 102, 255, 0.4);
            width: 100%;
            height: 100%;
        }
        
        .artista-img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
            transition: all 0.5s ease;
        }
        
        .group:hover .artista-img {
            opacity: 0.7;
            transform: scale(1.05);
        }
        
        .graffiti-tag {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-family: 'Arial Black', sans-serif;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 0 #000;
            transform: rotate(-15deg);
            opacity: 0.8;
            z-index: 20;
        }
        
        .street-light {
            position: absolute;
            width: 4px;
            height: 100px;
            background: linear-gradient(to bottom, #FFD700, transparent);
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
            filter: blur(1px);
        }
        
        .text-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 0 1rem;
            transition: transform 0.5s ease;
        }
        
        .group:hover .text-content {
            transform: scale(1.1);
        }
        
        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        }
    </style>
</head>
<body class="bg-black text-white font-sans overflow-x-hidden">
    <!-- Sección principal con grid de artistas -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        <!-- Artista 1 - ANDY DYSON -->
        <div class="artista-container group">
            <div class="relative h-screen flex items-center justify-center overflow-hidden">
                <div class="street-light"></div>
                
                    <!-- Cambia la ruta según tu estructura real -->
                    <img src="/images/sdr1/img1.jpg" alt="ANDY DYSON" class="artista-img">
                
                <div class="graffiti-tag">MEDELLÍN</div>
                <div class="overlay"></div>
                <div class="text-content">
                    <h2 class="text-7xl md:text-8xl font-bold mb-6 neon-text" style="color: #ff0000;">ANDY DYSON</h2>
                    <p class="text-xl md:text-2xl gold-text italic max-w-md mx-auto">"La calle es mi estudio, el barrio mi inspiración. Cada verso es un pedazo de mi ciudad."</p>
                </div>
            </div>
        </div>

        <!-- Artista 2 - sdrFARA -->
        <div class="artista-container group">
            <div class="relative h-screen flex items-center justify-center overflow-hidden">
            
                    <img src="/images/sdr1/img10.jpg" alt="sdrFARA" class="artista-img">
                    <!-- Prueba con una imagen online temporal -->

                
                <div class="graffiti-tag">MEDELLIN</div>
                <div class="overlay"></div>
                <div class="text-content">
                    <h2 class="text-7xl md:text-8xl font-bold mb-6 neon-text" style="color: #0066ff;">sdrFARA</h2>
                    <p class="text-xl md:text-2xl gold-text italic max-w-md mx-auto">"No canto por fama, rapeo por necesidad. Mi música es el eco de las calles que me vieron crecer."</p>
                </div>
            </div>
        </div>

        <!-- Artista 3 - sdrSAYA -->
        <div class="artista-container group">
            <div class="relative h-screen flex items-center justify-center overflow-hidden ">
                <div class="street-light"></div>
               
                    <img src="/images/sdr1/img15.png" alt="sdrSAYA" class="artista-img">
                  

               
                <div class="graffiti-tag">MEDELLIN</div>
                <div class="overlay"></div>
                <div class="text-content">
                    <h2 class="text-7xl md:text-8xl font-bold mb-6 neon-text" style="color: #ff0000;">sdrSAYA</h2>
                    <p class="text-xl md:text-2xl gold-text italic max-w-md mx-auto">"En un mundo de copias, mi autenticidad es mi poder. La calle no miente, y yo tampoco."</p>
                </div>
            </div>
        </div>
    </div>






















<!-- Sección de Artista Colaborador - JEY DC -->
<div class="relative h-screen flex flex-col items-center justify-center bg-black overflow-hidden group">
    <!-- Contenedor de imagen + texto (relativo para posicionamiento absoluto del texto) -->
    <div class="relative mb-4 group-hover:scale-105 transition-transform duration-700">
        <!-- Marco neón -->
        <div class="absolute inset-0 rounded-lg border-4 border-red-500 opacity-70 group-hover:border-blue-500 group-hover:opacity-100 transition-all duration-500 shadow-lg shadow-red-500/50 group-hover:shadow-blue-500/50"></div>
        <div class="absolute inset-0 rounded-lg border-4 border-blue-500 opacity-70 group-hover:border-red-500 group-hover:opacity-100 transition-all duration-500 shadow-lg shadow-blue-500/50 group-hover:shadow-red-500/50" style="transform: rotate(2deg);"></div>
        
        <!-- Imagen -->
        <img src="{{ asset('images/sdr1/img5.jpg') }}" alt="JEY DC - Artista Colaborador" class="relative z-10 w-full max-w-2xl h-auto rounded-lg object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-500">

        <!-- Texto superpuesto (absoluto dentro del contenedor relativo) -->
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-4 transform group-hover:scale-105 transition-transform duration-500">
            <span class="inline-block bg-gradient-to-r from-red-500 to-blue-500 text-white text-sm md:text-base font-bold px-4 py-2 rounded-full mb-3 animate-pulse">
                ARTISTA COLABORADOR
            </span>
            <h2 class="text-6xl md:text-7xl font-bold mb-4 gold-text">JEY DC</h2>
            <p class="text-xl md:text-2xl max-w-2xl mx-auto neon-text" style="animation-duration: 4s;">
                "Desde las calles de Medellín hasta el mundo, cada colaboración es un nuevo capítulo en nuestra historia urbana."
            </p>
            <div class="mt-6 flex justify-center space-x-4">
                <span class="inline-block w-3 h-3 bg-red-500 rounded-full animate-bounce"></span>
                <span class="inline-block w-3 h-3 bg-blue-500 rounded-full animate-bounce" style="animation-delay: 0.2s;"></span>
                <span class="inline-block w-3 h-3 bg-yellow-500 rounded-full animate-bounce" style="animation-delay: 0.4s;"></span>
            </div>
        </div>
    </div>

    <!-- Efectos de fondo decorativos (se mantienen igual) -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <div class="absolute top-0 left-1/4 w-32 h-32 bg-blue-500 rounded-full filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-40 h-40 bg-red-500 rounded-full filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
    </div>
</div>
















     <!-- Efectos de partículas para fondo (opcional) -->
     <div id="particles-js" class="fixed inset-0 -z-10 opacity-20"></div>
 
     <!-- Scripts para animaciones -->
     <script>
         // Efecto de escritura para algunos textos
         document.querySelectorAll('.typewriter').forEach((el) => {
             const text = el.textContent;
             el.textContent = '';
             let i = 0;
             const typing = setInterval(() => {
                 if (i < text.length) {
                     el.textContent += text.charAt(i);
                     i++;
                 } else {
                     clearInterval(typing);
                 }
             }, 100);
         });
     </script>
 </body>
 </html>