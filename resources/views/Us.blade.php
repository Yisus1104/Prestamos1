<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - Préstamos de Recursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f7cac9, #6b5b95);
            color: #FFFFFF;
            height: 100%;
            overflow-x: hidden;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #000000;
            padding: 15px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999; /* Ensure navbar is on top */
        }

        .navbar-brand img {
            height: 50px;
            transition: transform 0.3s ease-in-out;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .nav-link {
            color: #FFFFFF;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 15px;
            position: relative;
            transition: color 0.3s ease-in-out;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #FF4D00;
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #FF4D00;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Page Section */
        .section {
            padding: 120px 40px;
            text-align: center;
            margin-top: 80px; /* To avoid overlap with the navbar */
            opacity: 0;
            transition: opacity 1s ease-in-out; /* Ensure smooth reveal of sections */
        }

        .section.active {
            opacity: 1;
        }

        .section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 1.2rem;
            color: #fff;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        /* Container for content */
        .container {
            max-width: 900px; /* Ensure content does not stretch too much */
            margin: 0 auto;
            padding: 0 15px;
        }

        .section img {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }

        .section img.visible {
            opacity: 1;
        }

        .btn-primary {
            background: #FF4D00;
            border: none;
            padding: 12px 30px;
            font-size: 1.2rem;
            color: #FFFFFF;
            transition: transform 0.3s ease, background-color 0.3s ease;
            margin-top: 30px;
            border-radius: 30px;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            background-color: #FF3300;
        }

        /* Simple fade-in animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Footer Styling */
        .footer {
            background-color: #000000;
            padding: 20px;
            text-align: center;
            color: #CCCCCC;
            font-size: 0.9rem;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    @include('fragments.navbar')  <!-- Navbar inclusion -->

    <!-- Page Sections -->
    <div class="section active" id="section1"> <!-- Now active by default -->
        <div class="container">
            <h2>¿Qué son los préstamos de recursos?</h2>
            <p>Los préstamos de recursos incluyen herramientas, libros y otros elementos esenciales para el trabajo y el aprendizaje. Nuestra misión es facilitar el acceso a estos materiales sin costo alguno para quienes lo necesiten.</p>
        </div>
    </div>

    <div class="section" id="section2">
        <div class="container">
            <h2>¿Por qué es importante?</h2>
            <p>Proveer recursos a la comunidad es crucial para fomentar el aprendizaje, la creatividad y la eficiencia en el trabajo. Con nuestros préstamos, contribuimos al desarrollo personal y profesional de quienes más lo necesitan.</p>
        </div>
        <img src="././img/yo.jpg" alt="Recursos disponibles" />
    </div>

    <div class="section" id="section3">
        <div class="container">
            <h2>¿Cómo funciona?</h2>
            <p>Solo tienes que registrarte, consultar los recursos disponibles y hacer tu solicitud. Nuestro sistema se asegura de que todo el proceso sea rápido y sencillo, ¡estamos aquí para ayudarte!</p>
        </div>
        <a href="#" class="btn btn-primary">Solicita ahora</a>
    </div>

    <footer class="footer">
        &copy; 2025. Todos los derechos reservados.
    </footer>

    <script>
        // Scroll-based reveal animations
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                if (section.getBoundingClientRect().top <= window.innerHeight * 0.8) {
                    section.classList.add('active');
                }
            });

            const images = document.querySelectorAll('.section img');
            images.forEach(image => {
                if (image.getBoundingClientRect().top <= window.innerHeight * 0.8) {
                    image.classList.add('visible');
                }
            });
        });

        // Immediately show the first section on load
        document.querySelector('#section1').classList.add('active');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
