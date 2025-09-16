📚 README.md - Proyecto Docker Compose
# 🐳 Proyecto Docker Compose - Grupo 1

## 📋 Descripción del Proyecto
Este proyecto implementa una aplicación web utilizando Docker Compose para gestionar múltiples contenedores que trabajan conjuntamente. La solución incluye un servidor web Apache con PHP y una base de datos MariaDB, proporcionando un entorno completo para el desarrollo y despliegue de aplicaciones web.

## 👥 Integrantes - Grupo 1 (Municipio de Quito)
| Nombre | Repositorio GitHub |
|--------|-------------------|
| **Carpio Zaquinaula Byron Orlando** | `https://github.com/bcarpio16/Docker-Compose.git` |
| **Villarroel Vera Milton Orlando** | `https://github.com/movillarroel/Docker-Compose.git` |
| **Mena Segura Edison Fabián** | `https://github.com/Bulls1168-C/Docker-Compose.git` |
| **Benavides Freire Alex Vicente** | `https://github.com/abenavides86/Docker-Compose.git` |
| **Gallardo Nicolalde Marcelo Iván** | `https://github.com/panivinux/Docker-Compose.git` |

## 🎓 Información del Curso
- **Curso**: Despliegue de Aplicaciones con Docker
- **Proyecto**: Práctica de Docker Compose
- **Profesor**: Ing. Edison Naranjo (CEC-EPN)
- **Fecha**: 15 de Septiembre de 2025

## 🏗️ Arquitectura del Proyecto

Docker-Compose/
│
├── app/
│ └── index.php
│
├── docker-compose.yml
└── README.md

## 📦 Configuración Docker Compose

```yaml
services:
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
  db_data:

🔧 Servicios Configurados
🗄️ Servicio de Base de Datos (db)

    Imagen: mariadb:10.11

    Nombre del contenedor: mysql_server

    Variables de entorno:

        MYSQL_ROOT_PASSWORD=root

        MYSQL_DATABASE=appdb

    Volumen persistente: db_data montado en /var/lib/mysql

🌐 Servicio Web (web)

    Imagen: php:8.5.0beta3-apache

    Nombre del contenedor: apache_server

    Volúmenes: Directorio ./app montado en /var/www/html

    Puertos: Puerto 8080 del host mapeado al puerto 80 del contenedor

    Dependencias: Depende del servicio db

🚀 Instalación y Uso
Prerrequisitos

    Docker instalado en el sistema

    Docker Compose instalado
Pasos de instalación

    Clonar el repositorio
    bash

git clone [URL_DEL_REPOSITORIO]
cd Docker-Compose

Iniciar los contenedores
bash

docker-compose up -d

Verificar el estado de los contenedores
bash

docker-compose ps

    Acceder a la aplicación
    Abrir el navegador y navegar a: http://localhost:8080

Comandos útiles

    Detener los contenedores:
    bash

docker-compose down

Ver logs en tiempo real:
bash

docker-compose logs -f

Ejecutar comandos en los contenedores:
bash

docker-compose exec web [comando]
docker-compose exec db [comando]

📁 Estructura de Directorios

    app/: Contiene los archivos de la aplicación web

        index.php: Página principal de la aplicación

    docker-compose.yml: Archivo de configuración de Docker Compose

🌟 Características

    ✅ Entorno de desarrollo aislado con contenedores Docker

    ✅ Servidor web Apache con soporte para PHP 8.5

    ✅ Base de datos MariaDB 10.11 persistente

    ✅ Configuración simplificada con Docker Compose

    ✅ Aplicación accesible en el puerto 8080

🔍 Troubleshooting
Problemas comunes y soluciones:

    Error de puerto en uso:
    bash

# Cambiar el puerto en docker-compose.yml
ports:
  - "8081:80"

Permisos de volumen:
bash

# Asegurarse de que el directorio app tenga permisos adecuados
chmod -R 755 app/

Reconstruir contenedores:
bash

docker-compose up -d --build

📞 Soporte

Para reportar issues o solicitar ayuda, contactar a los integrantes del grupo a través de los repositorios de GitHub listados anteriormente.
📄 Licencia

Este proyecto es para fines educativos como parte del curso de Despliegue de Aplicaciones con Docker del CEC-EPN.

¡Desarrollado con ❤️ por el Grupo 1 - Municipio de Quito!
text


Este archivo README.md contiene toda la información del proyecto con un formato organizado y visualmente atractivo. Incluye:

1. **Cabecera informativa** con emojis y títulos claros
2. **Tabla de integrantes** con enlaces a GitHub
3. **Información del curso** y fecha actualizada
4. **Diagrama de estructura** de archivos
5. **Configuración Docker Compose** exacta con sintaxis YAML resaltada
6. **Descripción detallada** de cada servicio
7. **Guía de instalación** con comandos prácticos
8. **Solución de problemas** comunes
9. **Información de contacto** y licencia

El formato utiliza emojis para hacer la documentación más visual y amigable, manteniendo un estilo profesional y organizado.


