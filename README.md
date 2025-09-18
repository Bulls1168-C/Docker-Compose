# 📦 Curso: Despliegue de Aplicaciones con Docker  

## 🎓 Información del Curso  
- **Curso:** Despliegue de Aplicaciones con Docker  
- **Proyecto:** Práctica de Docker Compose  
- **Profesor:** Ing. Edison Naranjo (CEC-EPN)  
- **Fecha:** 17 de Septiembre de 2025  

---

## 📑 Proyecto – Docker Compose - Grupo 1 – Tarea 2  

### 📋 Descripción del Proyecto  
Este proyecto implementa una aplicación web utilizando **Docker Compose** para gestionar múltiples contenedores que trabajan conjuntamente.  

La solución incluye:  
- Un **servidor web Apache con PHP**  
- Una **base de datos MariaDB**  

Esto proporciona un entorno completo para el desarrollo y despliegue de aplicaciones web.  

---

## 👥 Integrantes - Grupo 1 (Municipio de Quito)  

| Integrante | Repositorio GitHub |
|------------|--------------------|
| Carpio Zaquinaula Byron Orlando | https://github.com/bcarpio16/Docker-Compose.git |
| Villarroel Vera Milton Orlando | https://github.com/movillarroel/Docker-Compose.git |
| Mena Segura Edison Fabián | https://github.com/Bulls1168-C/Docker-Compose.git |
| Benavides Freire Alex Vicente | https://github.com/abenavides86/Docker-Compose.git |
| Gallardo Nicolalde Marcelo Iván | https://github.com/panivinux/Docker-Compose.git |

---

## 🏗 Clonar el proyecto  

```
git clone https://github.com/movillarroel/Docker-Compose.git
```

Salida esperada:
Clonando en 'Docker-Compose'...
remote: Enumerating objects: 26, done.
remote: Counting objects: 100% (26/26), done.
remote: Compressing objects: 100% (24/24), done.
remote: Total 26 (delta 5), reused 0 (delta 0), pack-reused 0 (from 0)
Recibiendo objetos: 100% (26/26), 14.06 KiB | 625.00 KiB/s, listo.
Resolviendo deltas: 100% (5/5), listo.

🏗 Arquitectura del Proyecto

tree

│── app

│   └── index.php

│── docker-compose.yml

└── README.md

📦 Configuración Docker Compose
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

🔧 Construir y Levantar los Contenedores
```
cd Docker-Compose
docker-compose up -d
```

Salida esperada:
Creating network "docker-compose_default" with the default driver
Creating volume "docker-compose_db_data" with default driver
Creating mysql_server ... done
Creating apache_server ... done

✅ Validar los contenedores creados
```
docker ps -a
```

Ejemplo de salida:
CONTAINER ID   IMAGE                     COMMAND                  CREATED          STATUS          PORTS                    NAMES
029ca0fd335d   php:8.5.0beta3-apache     "docker-php-entrypoi…"   23 seconds ago   Up 22 seconds   0.0.0.0:8080->80/tcp     apache_server
88ada3171a49   mariadb:10.11             "docker-entrypoint.s…"   28 seconds ago   Up 27 seconds   3306/tcp                 mysql_server

🌐 Acceder a la aplicación

Abrir el navegador y navegar a:

👉 http://localhost:8080






