// Función para verificar el estado de inicio de sesión
async function checkLoginStatus() {
    try {
        const response = await fetch('/cometwds/DB/php/check_login_be.php', {
            method: 'GET',
            credentials: 'include'  // Incluye cookies para la sesión
        });

        // Verifica si la respuesta fue exitosa
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        // Lee el cuerpo de la respuesta como JSON
        const data = await response.json();

        // Procesa la respuesta JSON
        return data.loggedIn;  // Devuelve true si está logueado, false si no
    } catch (error) {
        console.error("Error al verificar el estado de login:", error);
        return false;  // Devuelve false en caso de error
    }
}

// Verifica el estado de inicio de sesión al cargar la página
document.addEventListener('DOMContentLoaded', async () => {
    const isLoggedIn = await checkLoginStatus();
    updateProfileUI(isLoggedIn);
});

// Actualiza la interfaz basada en el estado de inicio de sesión
function updateProfileUI(isLoggedIn) {
    const signInButton = document.getElementById('sign-in-button');
    const profileInfo = document.getElementById('profile-info');
    const profilePic = document.getElementById('profile-pic');

    if (isLoggedIn) {
        signInButton.classList.add('hidden');
        profileInfo.classList.remove('hidden');
        // Aquí puedes establecer la URL de la imagen de perfil del usuario
        profilePic.src = '/cometwds/assets/imagenes/profile.png';
    } else {
        signInButton.classList.remove('hidden');
        profileInfo.classList.add('hidden');
    }
}

// Alterna el menú desplegable al hacer clic en la foto de perfil
function toggleMenu() {
    const dropdownMenu = document.getElementById('dropdown-menu');
    dropdownMenu.classList.toggle('hidden');
}

// Oculta el menú desplegable si se hace clic fuera de él
document.addEventListener('click', (e) => {
    const profilePic = document.getElementById('profile-pic');
    const dropdownMenu = document.getElementById('dropdown-menu');

    if (!profilePic.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
    }
});

// Función para cargar datos desde la "API"
async function fetchData() {
    try {
        const response = await fetch('/backend/api/data.json');
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error al cargar los datos:', error);
    }
}

// Inicializa gráficos con datos de la API
async function initializeCharts() {
    const data = await fetchData();

    if (!data) return;  // Evita errores si no hay datos

    const ctxTraffic = document.getElementById('myChart').getContext('2d');
    new Chart(ctxTraffic, {
        type: 'polarArea',
        data: {
            labels: data.traffic.labels,
            datasets: [{
                label: 'Traffic Source',
                data: data.traffic.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ]
            }]
        },
        options: {
            responsive: true
        }
    });

    const ctxEarnings = document.getElementById('earning').getContext('2d');
    new Chart(ctxEarnings, {
        type: 'bar',
        data: {
            labels: data.earnings.labels,
            datasets: [{
                label: 'Earnings',
                data: data.earnings.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ]
            }]
        },
        options: {
            responsive: true
        }
    });
}

// Llama a la función para inicializar los gráficos cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', initializeCharts);
async function redirectToBilling(plan) {
    const isLoggedIn = await checkLoginStatus();  // Verifica si el usuario está logueado

    if (isLoggedIn) {
        // Redirige a billing.php con el plan seleccionado
        window.location.href = `/cometwds/Frontend/html/billing.php?plan=${plan}`;
    } else {
        // Si no está logueado, puedes mostrar un mensaje o redirigir a la página de login
        alert('Por favor, inicie sesión para acceder a esta página.');
        // Opcional: redirigir a la página de inicio de sesión
        // window.location.href = 'login.php';
    }
}
