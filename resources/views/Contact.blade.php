<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto - Préstamos de Recursos</title>
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

        /* Contact Section */
        .contact-section {
            padding: 100px 40px;
            text-align: center;
            margin-top: 80px; /* To avoid overlap with the navbar */
            opacity: 0;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .contact-section.active {
            opacity: 1;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 20px;
        }

        .contact-section p {
            font-size: 1.1rem;
            color: #fff;
            margin-bottom: 30px;
            line-height: 1.6;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Contact Form Styling */
        .contact-form {
            background: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 700px;
            margin: 0 auto;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .form-control {
            border-radius: 5px; /* Reduced border radius */
            border: 1px solid #ccc;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            background-color: #fff; /* Lightened the background to improve text visibility */
            color: #000000; /* White text color */
        }

        .form-control:focus {
            background-color: #fff; /* Slightly lighter background on focus */
            border-color: #FF4D00; /* Focus border color */
            box-shadow: 0 0 5px rgba(255, 77, 0, 0.6); /* Subtle shadow on focus */
        }

        .btn-primary {
            background: #FF4D00;
            border: none;
            padding: 12px 30px;
            font-size: 1.2rem;
            color: #FFFFFF;
            transition: transform 0.3s ease, background-color 0.3s ease;
            margin-top: 20px;
            border-radius: 30px;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            background-color: #FF3300;
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
    </style>
</head>
<body>

    @include('fragments.navbar')  <!-- Navbar inclusion -->

    <!-- Contact Section -->
    <div class="contact-section active">
        <h2>Contáctanos</h2>
        <p>Si tienes alguna pregunta o necesitas más información sobre nuestros préstamos de recursos, no dudes en ponerte en contacto con nosotros. Estaremos encantados de ayudarte.</p>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <form>
            <div class="mb-3">
                <label for="name" class="form-label text-white">Nombre</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label text-white">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label text-white">Mensaje</label>
                <textarea name="message" class="form-control" id="message" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
        </form>
    </div>

    <footer class="footer">
        &copy; 2025. Todos los derechos reservados.
    </footer>

    <script>
        // Scroll-based reveal animations
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.contact-section, .contact-form');
            sections.forEach(section => {
                if (section.getBoundingClientRect().top <= window.innerHeight * 0.8) {
                    section.classList.add('active');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
