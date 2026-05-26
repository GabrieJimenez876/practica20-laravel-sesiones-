# Sistema de Gestión - Práctica N°20

**Estudiante:** Jimenez Tarqui Gabriel Isaac

## Descripción

Sistema de gestión de usuarios desarrollado en Laravel con autenticación y control de acceso basado en roles. Incluye funcionalidades para administradores y usuarios regulares.

---

## Tabla de Contenidos

1. [Requisitos Previos](#requisitos-previos)
2. [Instalación Local](#instalación-local)
3. [Configuración de la Base de Datos](#configuración-de-la-base-de-datos)
4. [Ejecución Local](#ejecución-local)
5. [Usuarios de Prueba](#usuarios-de-prueba)
6. [Cómo Registrarse](#cómo-registrarse)
7. [Cómo Entrar al Sistema](#cómo-entrar-al-sistema)
8. [Funcionalidades por Rol](#funcionalidades-por-rol)
9. [Navegación de la Aplicación](#navegación-de-la-aplicación)

---

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- **PHP 8.2+** (incluido en XAMPP o similar)
- **Composer** para gestionar dependencias de PHP
- **Node.js y npm** para compilar recursos frontend
- **MySQL/MariaDB** para la base de datos
- **Git** para clonar el repositorio

---

## Instalación Local

### 1. Clonar el Repositorio

```bash
git clone <URL_DEL_REPOSITORIO>
cd practica20-laravel-sesiones-
```

### 2. Instalar Dependencias de PHP

```bash
composer install
```

### 3. Instalar Dependencias de Node.js

```bash
npm install
```

### 4. Compilar Recursos Frontend

```bash
npm run build
```

---

## Configuración de la Base de Datos

### 1. Crear archivo `.env`

Copia el archivo `.env.example` y configúralo:

```bash
cp .env.example .env
```

### 2. Generar Clave de Aplicación

```bash
php artisan key:generate
```

### 3. Configurar Credenciales de Base de Datos

Edita el archivo `.env` y configura:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=practica20_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Crear la Base de Datos

En phpMyAdmin o CLI:

```sql
CREATE DATABASE practica20_db;
```

### 5. Ejecutar Migraciones y Seeders

```bash
php artisan migrate:fresh --seed
```

Esto creará las tablas y poblará la base de datos con 5 usuarios de prueba.

---

## Ejecución Local

### Iniciar el Servidor Laravel

```bash
php artisan serve
```

La aplicación estará disponible en: **http://localhost:8000**

---

## Usuarios de Prueba

| Usuario | Email | Contraseña | Rol |
|---------|-------|-----------|-----|
| Omar Q M | omarqm@example.com | Omar411* | Admin |
| Gabriel Jimenez | gabriel@example.com | Gabriel123* | Admin |
| Maria Lopez | maria@example.com | Maria123* | Usuario |
| Carlos Perez | carlos@example.com | Carlos123* | Usuario |
| Ana Gutierrez | ana@example.com | Ana123* | Usuario |

---

## Cómo Registrarse

1. Accede a la página principal: **http://localhost:8000**
2. Haz clic en el enlace **"Registrarse"** (si está disponible)
3. Completa el formulario con:
   - Nombre completo
   - Correo electrónico
   - Contraseña (mínimo 8 caracteres)
4. Haz clic en **"Registrarse"**
5. Los nuevos usuarios se registran automáticamente con rol **"usuario"**

> **Nota:** Para pruebas rápidas, usa directamente los usuarios de prueba listados arriba.

---

## Cómo Entrar al Sistema

1. Accede a: **http://localhost:8000/login**
2. Ingresa tu correo electrónico
3. Ingresa tu contraseña
4. Haz clic en **"Iniciar Sesión"**
5. Si es tu primer acceso, marca la opción **"Recuérdame"** (opcional)
6. Serás redirigido al **Dashboard** automáticamente

---

## Funcionalidades por Rol

### Rol: Administrador

Los administradores tienen acceso completo al sistema:

- ✅ Ver Dashboard
- ✅ Ver Mi Perfil
- ✅ Acceder al **Panel de Administración**
- ✅ Gestionar usuarios (listar, crear, editar, eliminar)
- ✅ Cerrar sesión

### Rol: Usuario Regular

Los usuarios regulares tienen acceso limitado:

- ✅ Ver Dashboard
- ✅ Ver Mi Perfil
- ✅ Cerrar sesión
- ❌ No pueden acceder al Panel de Administración

---

## Navegación de la Aplicación

### 📍 Página de Inicio

**URL:** http://localhost:8000

- Página de bienvenida para usuarios no autenticados
- Enlaces para **Iniciar Sesión** o **Registrarse**

### 🔐 Iniciar Sesión

**URL:** http://localhost:8000/login

- Formulario para ingresar con correo y contraseña
- Opción de recordarme
- Enlace para recuperar contraseña

### 📊 Dashboard

**URL:** http://localhost:8000/dashboard

- Panel principal después de iniciar sesión
- Acceso a **Mi Perfil**
- Botón de **Panel de Administración** (solo administradores)
- Información del usuario autenticado

### 👤 Mi Perfil

**URL:** http://localhost:8000/profile

- Ver información personal:
  - Nombre
  - Correo electrónico
  - Rol asignado
- Botón para **Cerrar Sesión**

### 👥 Panel de Administración (Solo Administradores)

**URL:** http://localhost:8000/admin/users

- Listar todos los usuarios registrados
- Crear nuevos usuarios
- Editar información de usuarios
- Eliminar usuarios
- Ver detalles de usuario

#### Acciones en Panel de Administración:

- **Crear Usuario:** http://localhost:8000/admin/users/create
- **Editar Usuario:** http://localhost:8000/admin/users/{id}/edit
- **Ver Detalles:** http://localhost:8000/admin/users/{id}
- **Eliminar Usuario:** Acción desde la lista

### 🚪 Cerrar Sesión

Disponible en:
- Mi Perfil
- Cualquier página autenticada (menú superior)

**Acción:** POST a http://localhost:8000/logout

---

## Flujo de Uso Recomendado

### Para Pruebas de Administrador:

1. Accede a **http://localhost:8000/login**
2. Ingresa: `gabriel@example.com` / `Gabriel123*`
3. Accede al **Dashboard**
4. Haz clic en **Panel de Administrador**
5. Gestiona usuarios desde ahí

### Para Pruebas de Usuario Regular:

1. Accede a **http://localhost:8000/login**
2. Ingresa: `maria@example.com` / `Maria123*`
3. Verás el **Dashboard** sin acceso al panel de administración
4. Puedes ver tu perfil y cerrar sesión

---

## Estructura de Directorios Relevantes

```
practica20-laravel-sesiones-/
├── app/
│   ├── Http/
│   │   ├── Controllers/         # Controladores de la app
│   │   ├── Middleware/          # Middleware de roles
│   │   └── Kernel.php           # Configuración del kernel
│   └── Models/
│       └── User.php             # Modelo de usuario
├── database/
│   ├── migrations/              # Migraciones de BD
│   └── seeders/                 # Pobladores de BD
├── resources/
│   └── views/                   # Vistas Blade
│       ├── auth/                # Vistas de autenticación
│       ├── user/                # Vistas de usuario
│       └── dashboard.blade.php  # Dashboard
├── routes/
│   └── web.php                  # Definición de rutas
└── .env                         # Configuración del entorno
```

---

## Solución de Problemas

### Error: "SQLSTATE[HY000]: General error"

**Solución:**
```bash
php artisan migrate:fresh --seed
```

### Error: "No application encryption key has been specified"

**Solución:**
```bash
php artisan key:generate
```

### La aplicación no inicia

**Verifica:**
- PHP 8.2+ está instalado: `php -v`
- Composer está actualizado: `composer update`
- Node.js está instalado: `node -v`
- Ejecuta: `npm run build`

---

## Características Implementadas

✅ Autenticación con Laravel Breeze  
✅ Sistema de roles (Admin/Usuario)  
✅ Middleware de control de acceso  
✅ CRUD de usuarios para administradores  
✅ Perfiles de usuario  
✅ Dashboard personalizado por rol  
✅ Sesiones seguras  
✅ Base de datos con 5 usuarios de prueba  

---

## Licencia

Este proyecto es código educativo desarrollado para fines académicos.
