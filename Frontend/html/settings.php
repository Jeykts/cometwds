<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeCraft</title>
    <link rel="stylesheet" href="/cometwds/assets/css/login.css" />
    <link rel="stylesheet" href="/cometwds/assets/css/style.css"/>

    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="/cometwds/assets/js/script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900" />
    <script>
  function signIn() {
    
    window.location.href = 'login.php';
}
    </script>
    <script src="/cometwds/assets/js/dashboard.js"></script>
</head>
<body>
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
        <div class="container">
            <header class="header">
                <div class="header-left">
                    <div class="logo">
                        <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z" fill="currentColor"></path>
                            <path d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2>cometwds</h2>
                </div>
                <nav class="nav">
                    <a href="/cometwds/index.php">Home</a>
                    <a href="services.php">Services</a>
                    <a href="portafolio.php">Portfolio</a>

                </nav>
                
                <div id="profile-container">
                    <div id="profile-info" class="hidden">
                        <img src="/Frontend/imagenes/profile.jpg" alt="Profile Picture" id="profile-pic" onclick="toggleMenu()" >
                        <div id="dropdown-menu" class="hidden">
                        
                            <a href="#" onclick="redirectToBilling('Plus')">Facturación</a>
                            <a href="#">Ajustes</a>
                            <a href="dashboard.php">Dashboard</a>
                            <a href="/cometwds/DB/php/logout.php" onclick="signOut()">Cerrar sesión</a>
                        </div>
                    </div>
                <button class="cta-button2" id="sign-in-button" onclick="signIn()">Sign in</button>

                </div>
              
            </header>
  <div id="settings-container">
    <h2>Ajustes de Usuario</h2>
    <form id="settings-form" action="save_settings.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username">
      </div>
      <div class="form-group">
        <label for="profile-pic">Foto de Perfil:</label>
        <input type="file" id="profile-pic-input" name="profile-pic" accept="image/*">
        <img id="profile-pic-preview" src="#" alt="Vista Previa">
      </div>
      <button type="submit" class="cta-button3">Guardar Cambios</button>
    </form>
  </div>

  <script>
    document.getElementById('profile-pic-input').addEventListener('change', function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          document.getElementById('profile-pic-preview').src = e.target.result;
        }
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
