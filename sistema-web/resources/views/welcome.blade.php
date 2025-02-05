<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsumoPredict - Predicción de Insumos con IA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f8fa;
            color: #333;
        }

        header {
            background: #1e3a8a;
            color: white;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #93c5fd;
        }

        .hero {
            background: url('https://images.unsplash.com/photo-1603791440384-56cd371ee9a7') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(30, 58, 138, 0.85);
        }

        .hero h2,
        .hero p,
        .hero a {
            position: relative;
            z-index: 1;
        }

        .hero h2 {
            font-size: 3rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 15px 0;
        }

        .hero a {
            background: #3b82f6;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .hero a:hover {
            background: #2563eb;
        }

        .about-us {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 50px;
            background: #f0f4f8;
            flex-wrap: wrap;
            gap: 20px;
        }

        .about-us img {
            width: 40%;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .about-us div {
            width: 50%;
        }

        .about-us h2 {
            font-size: 2.5rem;
            color: #1e3a8a;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
        }

        .features,
        .additional-content {
            display: flex;
            justify-content: space-around;
            padding: 50px;
            background: white;
            flex-wrap: wrap;
            gap: 20px;
        }

        .feature-box,
        .additional-box {
            width: 30%;
            background: #f0f4f8;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .feature-box:hover,
        .additional-box:hover {
            transform: translateY(-10px);
        }

        .feature-box img,
        .additional-box img {
            width: 80px;
            margin-bottom: 20px;
        }

        .feature-box h3,
        .additional-box h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .feature-box p,
        .additional-box p {
            font-size: 1rem;
        }

        footer {
            background: #1e3a8a;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>InsumoPredict</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div>
            <h2>Predicción Inteligente de Insumos</h2>
            <p>Optimiza tus recursos con la precisión de la inteligencia artificial.</p>
            <a href="{{ route('register') }}">Comenzar Ahora</a>
        </div>
    </section>

    <section class="about-us">
        <img src="{{ asset('images/jovas.webp') }}" alt="Equipo de trabajo">
        <div>
            <h2>Sobre Nosotros</h2>
            <p>En InsumoPredict, nos especializamos en la implementación de soluciones de inteligencia artificial para
                optimizar la gestión de insumos en diversas industrias. Nuestro equipo combina experiencia tecnológica y
                conocimiento del mercado para ofrecer predicciones precisas y estratégicas, ayudando a las empresas a
                reducir costos y mejorar la eficiencia operativa.</p>
        </div>
    </section>

    <section class="features">
        <div class="feature-box">
            <img src="https://img.icons8.com/color/96/000000/ai.png" alt="IA Predictiva">
            <h3>IA Predictiva</h3>
            <p>Utiliza algoritmos avanzados para predecir la demanda de insumos con precisión.</p>
        </div>
        <div class="feature-box">
            <img src="https://img.icons8.com/color/96/000000/data-configuration.png" alt="Análisis de Datos">
            <h3>Análisis de Datos</h3>
            <p>Transforma grandes volúmenes de datos en decisiones estratégicas.</p>
        </div>
        <div class="feature-box">
            <img src="https://img.icons8.com/color/96/000000/factory.png" alt="Optimización de Recursos">
            <h3>Optimización de Recursos</h3>
            <p>Reduce costos y maximiza la eficiencia operativa con nuestras soluciones.</p>
        </div>
    </section>

    <section class="additional-content">
        <div class="additional-box">
            <img src="https://img.icons8.com/color/96/000000/automation.png" alt="Automatización">
            <h3>Automatización Inteligente</h3>
            <p>Automatiza procesos críticos para ahorrar tiempo y recursos.</p>
        </div>
        <div class="additional-box">
            <img src="https://img.icons8.com/color/96/000000/statistics.png" alt="Informes Detallados">
            <h3>Informes Detallados</h3>
            <p>Obtén reportes visuales que facilitan la toma de decisiones estratégicas.</p>
        </div>
        <div class="additional-box">
            <img src="https://img.icons8.com/color/96/000000/teamwork.png" alt="Soporte Personalizado">
            <h3>Soporte Personalizado</h3>
            <p>Un equipo de expertos listos para ayudarte en cada paso del camino.</p>
        </div>
    </section>
    <section class="pricing-section" style="padding: 50px 0; background-color: #f5f8fa;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <div style="display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap;">
                <!-- Plan Individual -->
                <div class="pricing-card"
                    style="flex: 1; min-width: 300px; background-color: white; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <div
                        style="background-color: #ffcdd2; display: inline-block; padding: 4px 12px; border-radius: 4px; margin-bottom: 15px; color: #1e3a8a;">
                        USD 0 por 1 mes
                    </div>
                    <h3 style="font-size: 28px; margin: 10px 0; color: #1e3a8a;">Individual</h3>
                    <p style="color: #666; margin-bottom: 5px;">USD 0 por 1 mes</p>
                    <p style="color: #666; margin-bottom: 20px;">Después, USD 5.99 por mes</p>
                    <ul style="list-style: none; padding: 0; margin: 20px 0;">
                        <li style="margin: 10px 0; color: #333;">✓ 1 cuenta Premium</li>
                        <li style="margin: 10px 0; color: #333;">✓ Cancela cuando quieras</li>
                    </ul>
                    <button
                        style="width: 100%; padding: 15px; background-color: #1e3a8a; color: white; border: none; border-radius: 25px; font-weight: bold; cursor: pointer; transition: background-color 0.3s;">
                        Probar 1 mes por USD 0
                    </button>
                    <p style="font-size: 12px; color: #666; margin-top: 15px;">Se aplican Términos.</p>
                </div>

                <!-- Plan Estudiantes -->
                <div class="pricing-card"
                    style="flex: 1; min-width: 300px; background-color: white; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <div
                        style="background-color: #e6e6fa; display: inline-block; padding: 4px 12px; border-radius: 4px; margin-bottom: 15px; color: #1e3a8a;">
                        USD 0 por 1 mes
                    </div>
                    <h3 style="font-size: 28px; margin: 10px 0; color: #1e3a8a;">Estudiantes</h3>
                    <p style="color: #666; margin-bottom: 5px;">USD 0 por 1 mes</p>
                    <p style="color: #666; margin-bottom: 20px;">Después, USD 2.99 por mes</p>
                    <ul style="list-style: none; padding: 0; margin: 20px 0;">
                        <li style="margin: 10px 0; color: #333;">✓ 1 cuenta Premium verificada</li>
                        <li style="margin: 10px 0; color: #333;">✓ Descuento para estudiantes</li>
                        <li style="margin: 10px 0; color: #333;">✓ Cancela cuando quieras</li>
                    </ul>
                    <button
                        style="width: 100%; padding: 15px; background-color: #1e3a8a; color: white; border: none; border-radius: 25px; font-weight: bold; cursor: pointer; transition: background-color 0.3s;">
                        Probar 1 mes por USD 0
                    </button>
                    <p style="font-size: 12px; color: #666; margin-top: 15px;">Se aplican Términos.</p>
                </div>

                <!-- Plan Duo -->
                <div class="pricing-card"
                    style="flex: 1; min-width: 300px; background-color: white; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h3 style="font-size: 28px; margin: 10px 0; color: #1e3a8a;">Duo</h3>
                    <p style="color: #666; margin-bottom: 20px;">USD 7.99 al mes</p>
                    <ul style="list-style: none; padding: 0; margin: 20px 0;">
                        <li style="margin: 10px 0; color: #333;">✓ 2 cuentas Premium</li>
                        <li style="margin: 10px 0; color: #333;">✓ Cancela cuando quieras</li>
                    </ul>
                    <button
                        style="width: 100%; padding: 15px; background-color: #1e3a8a; color: white; border: none; border-radius: 25px; font-weight: bold; cursor: pointer; transition: background-color 0.3s;">
                        Obtener Premium Duo
                    </button>
                    <p style="font-size: 12px; color: #666; margin-top: 15px;">Para parejas que viven en el mismo
                        domicilio. Se aplican Términos.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 InsumoPredict. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
