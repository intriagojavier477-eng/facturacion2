<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Facturación App - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para la imagen de fondo de toda la pantalla */
        body {
            background-image: url('<?= base_url("img/empresa.jpg") ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
        <div class="sidebar-brand">
    <img src="<?= base_url('public/images/logo.png'); ?>" alt="Logotipo del Sistema" class="brand-logo" width="120">
</div>
        
        /* Opcional: darle un fondo semitransparente a la tarjeta del formulario para que resalte sobre la imagen */
        .card-login {
            background-color: rgba(255, 255, 255, 0.90); 
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

    <div class="card card-login shadow-lg p-4 border-0 rounded-4" style="width: 100%; max-width: 400px;">
        <div class="text-center mb-3">
            <h3 class="fw-bold">Facturación App</h3>
            <p class="text-muted small">Ingresa tus credenciales para iniciar sesión</p>
        </div>

        <form action="<?= base_url('login/auth') ?>" method="post">
            <div class="mb-3">
                <label class="form-label text-muted small">Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="admin" required>
            </div>
            <div class="mb-3">
                <label class="form-label text-muted small">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="********" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2">Ingresar</button>
        </form>
        
        <div class="text-center mt-3">
            <small class="text-muted">&copy; 2026 Sistema de Facturación</small>
        </div>
    </div>

</body>
</html>