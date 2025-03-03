<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link rel="stylesheet" href="/cometwds/assets/css/style.css">
<link rel="stylesheet" href="/cometwds/assets/css/login.css">
<script src="/cometwds/assets/js/dashboard.js"></script>
    <script>
        function showRegisterForm() {
            document.getElementById('register-form').style.display = 'block';
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('recover-form').style.display = 'none';
        }
    
        function showLoginForm() {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('register-form').style.display = 'none';
            document.getElementById('recover-form').style.display = 'none';
        }
    
        function showRecoverForm() {
            document.getElementById('recover-form').style.display = 'block';
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('register-form').style.display = 'none';
        }
    </script>
</head>
<body>
    <section class="bg-stars">
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
        <span class="star"></span>
    </section>

    <div id="form-container">
        <!-- Formulario de Registro -->
        <form class="login-background" id="register-form" action="/cometwds/DB/php/registro_usuario_be.php" method="POST">
            <div class="logo">
                <img src="/cometwds/assets/imagenes/logo.png" alt="Logo" class="logo-img">
            </div>
            <h2 class="login-title">Crear Cuenta</h2>
            <div class="form-group">
                <input type="text" id="name" name="nombre_completo" class="form-input" placeholder="Nombre y Apellido" required />
            </div>
            <div class="form-group">
                <input type="text" id="user" name="usuario" class="form-input" placeholder="Nombre de Usuario" required />
            </div>            
            <div class="form-group">
                <input type="email" id="password" name="correo" class="form-input" placeholder="Mail" required />
                </div>
            <div class="form-group">
                <input type="password" id="password" name="contrasena" class="form-input" placeholder="Contraseña" required />
            </div>

            
            <div class="form-group">
                <input type="password" id="rep_password" name="repetir_contrasena" class="form-input" placeholder="Repetir contraseña" required />
            </div>
            <button class="btn-login">Registrarse</button>
            <div class="signup-link">
                <a href="javascript:void(0);" onclick="showLoginForm()">¿Ya tienes una cuenta?  <br> Inicia sesión</a>
            </div>
        </form>
    
        <!-- Formulario de Iniciar Sesión -->
        <form class="login-background" id="login-form" style="display: none;" action="/cometwds/DB/php/login_be.php" method="POST">
            <div class="logo">
                <img src="/Frontend/imagenes/logo.png" alt="Logo" class="logo-img">
            </div>
            <h2 class="login-title">Iniciar Sesión</h2>
            <div class="form-group">
                <input type="text" name="correo_o_usuario" class="form-input" placeholder="Correo Electronico" required>
            </div>
            <div class="form-group">
                <input type="password" name="contrasena" class="form-input" placeholder="Contraseña" required>
            </div>
            <button class="btn-login">Iniciar Sesión</button>
            <div class="forgot-password">
                <a href="javascript:void(0);" onclick="showRecoverForm()">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="signup-link">
                <a href="javascript:void(0);" onclick="showRegisterForm()">Registrarse</a>
            </div>
        </form>
    
        <!-- Formulario de Recuperar Contraseña -->
        <div class="login-background" id="recover-form" style="display: none;">
            <div class="logo">
                <img src="/Frontend/imagenes/logo.png" alt="Logo" class="logo-img">
            </div>
            <h2 class="login-title">Restablecer Contraseña</h2>
            <div class="form-group">
                <input type="email" class="form-input" placeholder="Ingrese su correo electrónico" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" placeholder="Contraseña actual" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" placeholder="Nueva contraseña" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" placeholder="Confirmar nueva contraseña" required>
            </div>
            <button class="btn-login">Restablecer Contraseña</button>
            <div class="signup-link">
                <a href="javascript:void(0);" onclick="showLoginForm()">Volver al inicio de sesión</a>
            </div>
        </div>
    </div>
</body>
</html>
