// Menu desplegable Inicio Sesion
function toggleDropdown() {
    const dropdown = document.getElementById("userDropdown");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

// Cierra el menú desplegable si se hace clic fuera de él
document.addEventListener("click", function (event) {
    const dropdown = document.getElementById("userDropdown");
    const userIcon = document.querySelector(".user-icon i");
    if (!userIcon.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.style.display = "none";
    }
});
// Fin Menu Inicio Sesion

// Menú Móvil
function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
}
// Fin Menú Móvil

// Novedades Aleatorias 
function shuffleProducts() {
    const container = document.querySelector('.novedades-container');
    const rows = container.querySelectorAll('.productos-row');

    rows.forEach(row => {
        const items = Array.from(row.children);
        items.sort(() => Math.random() - 0.5); // Orden aleatorio
        items.forEach(item => row.appendChild(item)); // Reorganizar los elementos
    });
}

// Ejecutar la función de aleatorización cuando se cargue la página
window.onload = shuffleProducts;
// Fin Novedades Aleatorias
