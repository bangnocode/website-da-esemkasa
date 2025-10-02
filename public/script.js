
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.querySelector("[data-collapse-toggle]");
    const navbarMenu = document.getElementById("navbar-sticky");

    // buka/tutup navbar
    toggleBtn.addEventListener("click", () => {
        navbarMenu.classList.toggle("hidden");
    });

    // klik di luar navbar → close
    document.addEventListener("click", (e) => {
        if (!navbarMenu.classList.contains("hidden") &&
            !navbarMenu.contains(e.target) &&
            !toggleBtn.contains(e.target)) {
            navbarMenu.classList.add("hidden");
        }
    });
});