// FAQ toggle functionality
document.querySelectorAll('.faq-item h3').forEach(question => {
    question.addEventListener('click', function() {
        const faqItem = this.parentElement;
        faqItem.classList.toggle('active');

        // Ocultar las respuestas de otros elementos FAQ
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== faqItem) {
                item.classList.remove('active');
            }
        });
    });
});

// Función para verificar el estado de sesión y redirigir si es necesario
function signIn() {
    const userData = JSON.parse(localStorage.getItem('userData')) || {};

    // Verifica si el usuario ya está logueado
    if (userData.loggedIn) {
        // Si está logueado, redirige a la página principal o área protegida
        window.location.href = '/dashboard.html'; // Cambia a la URL de la página protegida
    } else {
        // Si no está logueado, redirige a la página de login
        alert("Debes iniciar sesión para acceder a esta sección.");
        window.location.href = '/login.html'; // Cambia a la URL de la página de login
    }
}

// Función para cerrar sesión y redirigir al inicio
function signIn() {
    
    window.location.href = '/cometwds/Frontend/html/login.php';
}
