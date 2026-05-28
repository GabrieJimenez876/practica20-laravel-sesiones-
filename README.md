# Sistema de Gestión - Práctica N°20

**Estudiante:** Jimenez Tarqui Gabriel Isaac

## Descripción

Aplicación Laravel con autenticación y roles. Admin puede gestionar usuarios; usuarios regulares pueden ver dashboard y perfil.

## Requisitos

- PHP 8.2+
- Composer
- Node.js y npm
- MySQL/MariaDB
- Git

## Instalación local

1. Clona el repositorio:

```bash
git clone <URL_DEL_REPOSITORIO>
cd practica20-laravel-sesiones-
```

2. Instala dependencias:

```bash
composer install
npm install
```

3. Crea el archivo `.env`:

- Linux/Mac/Git Bash:

```bash
cp .env.example .env
```

- PowerShell:

```powershell
copy .env.example .env
```

4. Genera la clave de aplicación:

```bash
php artisan key:generate
```

5. Ajusta `.env` si es necesario:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=practica20_db
DB_USERNAME=root
DB_PASSWORD=
```

6. Crea la base de datos y ejecuta migraciones:

```sql
CREATE DATABASE practica20_db;
```

```bash
php artisan migrate:fresh --seed
```

7. Compila los recursos frontend:

```bash
npm run build
```

## Ejecutar local

```bash
php artisan serve
```

Abre: http://localhost:8000

## Usuarios de prueba

- Admin: gabriel@example.com / Gabriel123*
- Admin: omarqm@example.com / Omar411*
- Usuario: maria@example.com / Maria123*
- Usuario: carlos@example.com / Carlos123*
- Usuario: ana@example.com / Ana123*

## Qué funciona

- Registro y login
- Roles `admin` y `user`
- Dashboard
- Perfil
- CRUD de usuarios para administradores
- Cierre de sesión

## Notas rápidas

- Registro: `/register`
- Login: `/login`
- Dashboard: `/dashboard`
- Perfil: `/profile`
- Panel admin: `/admin/users` (solo admin)
- Logout: `/logout`

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
