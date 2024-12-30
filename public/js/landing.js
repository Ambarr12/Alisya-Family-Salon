AOS.init();
const bars = document.querySelector(".bars");
const navbar = document.querySelector(".navbar-links");
bars.addEventListener("click", () => {
    if (navbar.style.display == "none") {
        navbar.style.display = "flex";
    } else {
        navbar.style.display = "none";
    }
});

// Array warna turunan ungu dan biru
const colors = ["#0a827f", "#2b9a8a", "#1e3a8a", "#3b82f6"];

// Pilih warna acak dari array
document.querySelectorAll(".wave-path").forEach((path) => {
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    path.setAttribute("fill", randomColor); // Terapkan warna acak ke elemen path
});

const checkAuth = async () => {
    try {
        showLoader();
        const authResponse = await axios.get("/check-auth");
        hideLoader();
        const authRes = authResponse.data;

        if (!authRes.auth) {
            window.location.href = "/admin/login";
            return false;
        } else {
            return true;
        }
    } catch (error) {
        console.log(error);
        return false;
    }
};

function showAlert(message) {
    const alert = document.getElementById("alert");
    alert.innerText = message;
    alert.style.animation = "alert-show 7s alternate";
    console.log(alert);
    setTimeout(() => {
        alert.innerHTML =
            '<button type="button" class="close"> <span aria-hidden="true">×</span> </button>';
        alert.style.animation = "";
    }, 7000);
}

function showLoader() {
    const loader = document.getElementById("loader");
    loader.style.display = "flex";
}

function hideLoader() {
    const loader = document.getElementById("loader");
    loader.style.display = "none";
}

const handleBooking = async (id) => {
    const check = await checkAuth();

    if (check) {
        // showAlert("Berhasil Booking");
        window.location.href = "/reservasi";
    }
};

function showSearch() {
    const container = document.querySelector(".search-container");
    const input = document.querySelector(".search-container input");

    container.style.display = "flex";
    input.focus();
    input.style.animation = "show-search 1s both";
}

function hideSearch() {
    const container = document.querySelector(".search-container");
    const input = document.querySelector(".search-container input");

    input.style.animation = "hide-search 1s both";

    setTimeout(() => {
        container.style.display = "none";
        input.style.animation = "";
    }, 1200);
}

function HandleMenuAdmin() {
    const menu = document.querySelector(".menu-user .container-menu-user");
    if (menu.style.display == "none") {
        menu.style.display = "flex";
    } else {
        menu.style.display = "none";
    }
}
