<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CodeCraft</title>
    <link rel="stylesheet" href="/cometwds/assets/css/plans.css" />
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
            <main>
                <h1>Pricing & Plans</h1>
                <section class="plans">
    <div class="plan plus">
        <h2 class="plan-title">Plus</h2>
        <p class="price">$500/month</p>
        <ul>
            <li>For small projects</li>
            <li>2 developers</li>
            <li>Unlimited revisions</li>
            <li>1 year of free hosting</li>
            <li>7-day money-back guarantee</li>
        </ul>
        <button class="plan-button" onclick="redirectToBilling('plus')">Get Started</button>
    </div>
    <div class="plan premium">
        <h2 class="plan-title">Premium</h2>
        <p class="price">$1000/month</p>
        <ul>
            <li class="premium-feature">For medium projects</li>
            <li class="premium-feature">5 developers</li>
            <li class="premium-feature">Unlimited revisions</li>
            <li class="premium-feature">2 years of free hosting</li>
            <li class="premium-feature">30-day money-back guarantee</li>
        </ul>
        <button class="plan-button" onclick="redirectToBilling('premium')">Get Started</button>
    </div>
    <div class="plan ultra">
        <h2 class="ultra-title">Ultra</h2>
        <p class="price-ultra">$6000/month</p>
        <ul>
            <li class="ultra-text">For large projects</li>
            <li class="ultra-text">10 developers</li>
            <li class="ultra-text">Unlimited revisions</li>
            <li class="ultra-text">Lifetime free hosting</li>
            <li class="ultra-text">60-day money-back guarantee</li>
        </ul>
        <button class="plan-button" onclick="redirectToBilling('ultra')">Get Started</button>
    </div>              
</section>

            </main>
            <div class="faq-section">
                <h2>Frequently Asked Questions (FAQ)</h2>
                <div class="faq-wrapper">
                    <div class="faq-item">
                        <h3>¿Qué métodos de pago aceptan?</h3>
                        <p>Aceptamos tarjetas de crédito, PayPal y transferencias bancarias.</p>
                    </div>
                    <div class="faq-item">
                        <h3>¿Puedo cambiar mi plan más tarde?</h3>
                        <p>Sí, puedes actualizar o degradar tu plan en cualquier momento desde tu panel de control.</p>
                    </div>
                    <div class="faq-item">
                        <h3>¿Ofrecen garantía de devolución de dinero?</h3>
                        <p>Sí, ofrecemos una garantía de devolución de dinero de 30 días en todos nuestros planes.</p>
                    </div>
                    <div class="faq-item">
                        <h3>¿Hay algún costo adicional?</h3>
                        <p>No hay costos ocultos. Todos los precios son transparentes y se indican claramente al momento de la compra.</p>
                    </div>
                    <div class="faq-item">
                        <h3>¿Cómo puedo contactar al soporte?</h3>
                        <p>Puedes contactar al soporte a través de nuestro formulario en línea, chat en vivo o por correo electrónico.</p>
                    </div>
                    <div class="faq-item">
                        <h3>¿Cómo puedo contactar al soporte?</h3>
                        <p>Puedes contactar al soporte a través de nuestro formulario en línea, chat en vivo o por correo electrónico.</p>
                    </div>
                    <div class="faq-item">
                        <h3>¿Cómo puedo contactar al soporte?</h3>
                        <p>Puedes contactar al soporte a través de nuestro formulario en línea, chat en vivo o por correo electrónico.</p>
                    </div>
                </div>
            </div>
            <a href="https://wa.me/message/OXCFVRJ2RLKAN1" class="whatsapp-button" target="_blank" rel="noopener noreferrer">
                <img src="/cometwds/assets/imagenes/whatsapp.png" alt="WhatsApp">
            </a>
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