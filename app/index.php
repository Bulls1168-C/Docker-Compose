<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Docker Compose - Grupo 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: white;
            padding: 30px 0;
            text-align: center;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .info-box {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        
        .info-box h2 {
            color: #0d6efd;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .team-member {
            background: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        
        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        
        .member-name {
            font-weight: bold;
            color: #0d6efd;
            margin-bottom: 10px;
        }
        
        .github-link {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.85rem;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
        
        .github-link:hover {
            background-color: #0d6efd;
        }
        
        .server-info {
            background-color: #e9f7ff;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .docker-logo {
            width: 150px;
            margin: 20px auto;
            display: block;
        }
        
        .command-box {
            background-color: #2b303b;
            color: #dee2e6;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            font-family: monospace;
            overflow-x: auto;
            white-space: pre-wrap;
            line-height: 1.5;
        }
        
        .php-info {
            background-color: #8993be;
            color: white;
            padding: 10px 15px;
            border-radius: 20px;
            font-weight: bold;
            margin-top: 15px;
            display: inline-block;
        }
        
        .system-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        
        .system-table th, .system-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .system-table th {
            background-color: #f8f9fa;
        }
        
        .compose-config {
            background-color: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 5px 5px 0;
        }
        
        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Despliegue de Aplicaciones con Docker</h1>
            <p class="subtitle">Práctica de Docker Compose - Grupo 1 (Municipio de Quito)</p>
            <div class="php-info">
                <?php echo "PHP " . phpversion() . " ejecutándose correctamente"; ?>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="info-box">
            <h2>📦 Información del Curso</h2>
            <p><strong>Profesor:</strong> Ing. Edison Naranjo (CEC-EPN)</p>
            <p><strong>Fecha:</strong> 
                <?php
                // Mostrar la fecha actual con formato en español
                setlocale(LC_TIME, 'es_ES.UTF-8');
                echo '15 de Septiembre de 2025';
                ?>
            </p>
            <p><strong>Proyecto:</strong> Práctica de Docker Compose</p>
        </div>
        
        <div class="info-box">
            <h2>👨‍👩‍👦 Integrantes - Grupo 1</h2>
            <div class="team-grid">
                <?php
                // Array con la información de los integrantes
                $integrantes = array(
                    array(
                        "nombre" => "Carpio Zaquinaula Byron Orlando",
                        "comando" => "git clone https://github.com/bcarpio16/Docker-Compose.git",
                        "url" => "https://github.com/bcarpio16/Docker-Compose.git"
                    ),
                    array(
                        "nombre" => "Villarroel Vera Milton Orlando",
                        "comando" => "git clone https://github.com/movillarroel/Docker-Compose.git",
                        "url" => "https://github.com/movillarroel/Docker-Compose.git"
                    ),
                    array(
                        "nombre" => "Mena Segura Edison Fabián",
                        "comando" => "git clone https://github.com/Bulls1168-C/Docker-Compose.git",
                        "url" => "https://github.com/Bulls1168-C/Docker-Compose.git"
                    ),
                    array(
                        "nombre" => "Benavides Freire Alex Vicente",
                        "comando" => "git clone https://github.com/abenavides86/Docker-Compose.git",
                        "url" => "https://github.com/abenavides86/Docker-Compose.git"
                    ),
                    array(
                        "nombre" => "Gallardo Nicolalde Marcelo Iván",
                        "comando" => "git clone https://github.com/panivinux/Docker-Compose.git",
                        "url" => "https://github.com/panivinux/Docker-Compose.git"
                    )
                );
                
                // Generar las tarjetas de integrantes usando PHP
                foreach ($integrantes as $integrante) {
                    echo '<div class="team-member">';
                    echo '<div class="member-name">' . $integrante["nombre"] . '</div>';
                    echo '<div class="command-box">' . $integrante["comando"] . '</div>';
                    echo '<a href="' . $integrante["url"] . '" class="github-link" target="_blank">Ver en GitHub</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        
        <div class="info-box">
            <h2>🐳 Configuración Docker Compose Actualizada</h2>
            <p>Esta es la configuración de Docker Compose que se ha subido al proyecto:</p>
            
            <div class="compose-config">
                <h3>📝 docker-compose.yml</h3>
                <div class="command-box">services:
  db:
    image: mariadb:10.11
    container_name: mysql_server
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: appdb
    volumes:
      - db_data:/var/lib/mysql

  web:
    image: php:8.5.0beta3-apache
    container_name: apache_server
    volumes:
      - ./app:/var/www/html
    ports:
      - "8080:80"
    depends_on:
      - db

volumes:
  db_data:</div>
            </div>
            
            <h3>🔍 Explicación de la configuración</h3>
            <p>Esta configuración de Docker Compose define dos servicios:</p>
            
            <div class="system-table">
                <table class="system-table">
                    <tr>
                        <th>Servicio</th>
                        <th>Función</th>
                        <th>Configuración</th>
                    </tr>
                    <tr>
                        <td><strong>db</strong></td>
                        <td>Base de datos MariaDB</td>
                        <td>
                            <ul>
                                <li>Imagen: mariadb:10.11</li>
                                <li>Contenedor: mysql_server</li>
                                <li>Volumen persistente: db_data</li>
                                <li>Variables de entorno: root password y base de datos "appdb"</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>web</strong></td>
                        <td>Servidor web Apache con PHP</td>
                        <td>
                            <ul>
                                <li>Imagen: php:8.5.0beta3-apache</li>
                                <li>Contenedor: apache_server</li>
                                <li>Puerto: 8080:80</li>
                                <li>Volumen: ./app montado en /var/www/html</li>
                                <li>Depende del servicio db</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            
            <p class="server-info">
                <strong>💡 Nota:</strong> La configuración utiliza <code>depends_on</code> para garantizar que la base de datos esté disponible antes de que se inicie el servidor web.
            </p>
        </div>
        
        <div class="info-box">
            <h2>📊 Información del Servidor</h2>
            <div class="server-info">
                <?php
                // Mostrar información del servidor usando PHP
                echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";
                echo "<p><strong>Servidor:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
                echo "<p><strong>Host:</strong> " . $_SERVER['HTTP_HOST'] . "</p>";
                echo "<p><strong>Tiempo de ejecución:</strong> " . date('Y-m-d H:i:s') . "</p>";
                
                // Mostrar información adicional del sistema
                echo "<h3>Más información del sistema:</h3>";
                echo "<table class='system-table'>";
                echo "<tr><th>Variable</th><th>Valor</th></tr>";
                echo "<tr><td>Sistema Operativo</td><td>" . php_uname('s') . " " . php_uname('r') . "</td></tr>";
                echo "<tr><td>Arquitectura</td><td>" . php_uname('m') . "</td></tr>";
                echo "<tr><td>Zona horaria</td><td>" . date_default_timezone_get() . "</td></tr>";
                echo "<tr><td>Memoria límite</td><td>" . ini_get('memory_limit') . "</td></tr>";
                echo "</table>";
                ?>
            </div>
        </div>
        
        <svg class="docker-logo" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M349.9 236.3h-66.1v-59.4h66.1v59.4zm0-204.3h-66.1v60.7h66.1V32zm78.2 144.8H362v59.4h66.1v-59.4zm-156.3-72.1h-66.1v60.1h66.1v-60.1zm78.1 0h-66.1v60.1h66.1v-60.1zm276.8 100c-14.4-9.7-47.6-13.2-73.1-8.4-3.3-24-16.7-44.9-41.1-63.7l-14-9.3-9.3 14c-18.4 27.8-23.4 73.6-3.7 103.8-8.7 4.7-25.8 11.1-48.4 10.7H2.4c-8.7 50.8 5.8 116.8 44 162.1 37.1 43.9 92.7 66.2 165.4 66.2 157.4 0 273.9-72.5 328.4-204.2 21.4.4 67.6.1 91.3-45.2 1.5-2.5 6.6-13.2 8.5-17.1l-13.3-8.9zm-511.1-27.9h-66v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm-78.1-72.1h-66.1v60.1h66.1v-60.1z"/>
        </svg>
    </div>
    
    <footer>
        <div class="container">
            <p>© 2025 - Curso de Despliegue de Aplicaciones con Docker - CEC-EPN</p>
            <p>Página generada con PHP <?php echo phpversion(); ?> el <?php echo date('d/m/Y H:i:s'); ?></p>
        </div>
    </footer>
</body>
</html>
