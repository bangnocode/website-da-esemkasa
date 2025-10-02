document.addEventListener("click", function (event) {
    const menu = document.getElementById("navbar-sticky");
    const button = document.querySelector("[data-collapse-toggle='navbar-sticky']");

    // kalau menu sedang terbuka dan klik bukan di menu & bukan di button
    if (menu.classList.contains("block") && !menu.contains(event.target) && !button.contains(event
        .target)) {
        menu.classList.add("hidden");
        menu.classList.remove("block");
    }
});

// toggle menu buka/tutup ketika tombol diklik
const button = document.querySelector("[data-collapse-toggle='navbar-sticky']");
const menu = document.getElementById("navbar-sticky");

button.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    menu.classList.toggle("block");
});