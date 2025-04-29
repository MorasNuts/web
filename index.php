<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoraNuts</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="Menú">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Planes</a></li>
                    <li><a href="#">Agendar Cita</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="header-content container">
            <h1>Planes MoraNuts</h1>
            <p>
                La nutrióloga Sauri Zareth Nava Mora te dará los mejores planes tanto de dietas como de ejercicios para que inicies tu camino de vida saludable.
            </p>
        </div>
    </header>

    <!-- NUEVA SECCIÓN AGENDA TU CITA -->
    <section class="general">
        <div class="general-1">
            <h2>Agenda tu Cita</h2>
            <p>
                "¡Cuida tu cuerpo, nutre tu vida! Da el primer paso hacia una alimentación saludable y equilibrada. Agenda tu cita hoy y comienza tu transformación." 🥦✨
            </p>

            <form class="form-cita" action="guardar_cita.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre completo" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Número Telefónico:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="10 dígitos" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                    <label for="plan">Selecciona tu Plan:</label>
                    <select id="plan" name="plan" required>
                        <option value="">-- Elige una opción --</option>
                        <option value="dietas">Dietas</option>
                        <option value="ejercicios">Ejercicios</option>
                        <option value="dietas-ejercicios">Dietas y Ejercicios</option>
                    </select>
                </div>

                <div class="form-btn">
                    <button type="submit" class="btn-1">Agendar Cita</button>
                </div>
            </form>
        </div>

        <div class="general-2"></div>
    </section>

</body>
</html>
