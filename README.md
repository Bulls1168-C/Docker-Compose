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

│── app   
│ └── index.php  
│── docker-compose.yml

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

```

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
```
git clone https://github.com/panivinux/Docker-Compose.git
cd Docker-Compose
docker-compose up -d
```
Verificar el estado de los contenedores

```
docker-compose ps
```
    Acceder a la aplicación
    Abrir el navegador y navegar a: http://localhost:8080



