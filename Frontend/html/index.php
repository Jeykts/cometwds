<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeCraft</title>
    <link rel="stylesheet" href="/cometwds/assets/css/style.css"/>
    <link rel="stylesheet" href="/cometwds/assets/css/imghome.css">

    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="/cometwds/assets/js/script.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900" />
    <link  href="/cometwds/src/output.css">
    <link>
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
                    <a href="index.php">Home</a>
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
      <main>
        <section class="hero-section">
          <div class="hero-content">
            <div class="left">
              <h1 class="titulo">Desarrollo Web</h1>
              <p class="text home">Nos apasiona crear soluciones web innovadoras, enfocándonos en el diseño, la funcionalidad y la experiencia del usuario. Trabajamos con tecnologías modernas para hacer que tus ideas cobren vida en la web.</p>
              
              <br>
            </div>
            <div class="right">
              <img src="/cometwds/assets/imagenes/image.jpg" alt="Imagen principal" class="main-image">
            </div>
          </div>
        </section>
        
        <section id="como-trabajamos" class="how-we-work-section">
          <h2 class="titlehome">¿Cómo trabajamos?</h2>
          <p class="text Home">Nuestro proceso está centrado en el cliente y se compone de varias etapas. Empezamos con un análisis detallado de tus objetivos, seguido por un diseño personalizado y la implementación del proyecto. Finalmente, ofrecemos soporte continuo para asegurar su éxito a largo plazo.</p>
        
          <div class="faq-container">
            <div class="faq-item">
              <h3>1. Planificación</h3>
              <p>Analizamos tus necesidades y objetivos para definir el alcance del proyecto y establecer un plan de acción claro.</p>
            </div>
            <div class="faq-item">
              <h3>2. Diseño</h3>
              <p>Desarrollamos un diseño visual y funcional que refleje tu identidad y garantice una experiencia de usuario óptima.</p>
            </div>
            <div class="faq-item">
              <h3>3. Desarrollo</h3>
              <p>Implementamos el proyecto utilizando tecnologías modernas para garantizar una solución eficiente y escalable.</p>
            </div>
            <div class="faq-item">
              <h3>4. Soporte Continuo</h3>
              <p>Ofrecemos mantenimiento y soporte para asegurar que tu proyecto se mantenga actualizado y funcione correctamente.</p>
            </div>
          </div>
        </section>        
        <div class="about-us-section">
          <h2>¿Quiénes somos?</h2>
          <p>
              Somos un equipo de profesionales apasionados por el desarrollo web y la tecnología. Nos dedicamos a crear soluciones digitales que mejoren la experiencia del usuario y ayuden a las empresas a crecer. Nuestra misión es ofrecer un servicio personalizado y de alta calidad que se adapte a las necesidades de cada cliente.
          </p>
          <a href="https://wa.me/message/OXCFVRJ2RLKAN1" class="whatsapp-button" target="_blank" rel="noopener noreferrer">
            <img src="/cometwds/assets/imagenes/whatsapp.png" alt="WhatsApp">
        </a>
      </div>
      </main>
      
      </div>

    </div>
    <footer class="footer">
    <div class="footer-container">
      <p>&copy; 2024 CodeCraft. All rights reserved.</p>
      <ul class="footer-links">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Contact Us</a></li>
      </ul>
      <div class="social-media">
          <a href="#" target="_blank">Facebook</a>
          <a href="#" target="_blank">Twitter</a>
          <a href="#" target="_blank">Instagram</a>
      </div>
  </div>
</footer>
  </body>
</html>
