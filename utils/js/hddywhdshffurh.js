let box = document.querySelector("#preloader"),
    btn = document.querySelector("#skip");

function fadeOut() {
    box.classList.add("visuallyhidden");
    box.addEventListener(
        "transitionend",
        function(e) {
            box.classList.add("hidden");
        }, {
            capture: false,
            once: true,
            passive: false
        }
    );
}
btn.addEventListener("click", fadeOut, false);
setTimeout(fadeOut, 4000);



const possibleVideos = [
    "https://res.cloudinary.com/dicmh7cfa/image/upload/v1657899948/logos%20monfu%202022/sidebar/Group_8_2_b9zxey.png",
    "https://res.cloudinary.com/dicmh7cfa/image/upload/v1657899877/logos%20monfu%202022/sidebar/Group_8_1_ceeesm.png",
    "https://res.cloudinary.com/dicmh7cfa/image/upload/v1657899792/logos%20monfu%202022/sidebar/Group_8_xlv30t.png",
    "https://res.cloudinary.com/dicmh7cfa/image/upload/v1657899948/logos%20monfu%202022/sidebar/Group_8_2_b9zxey.png",
    "https://res.cloudinary.com/dicmh7cfa/image/upload/v1657899877/logos%20monfu%202022/sidebar/Group_8_1_ceeesm.png",
    "https://res.cloudinary.com/dicmh7cfa/image/upload/v1657899792/logos%20monfu%202022/sidebar/Group_8_xlv30t.png"
];
const randomVideo =
    possibleVideos[Math.floor(Math.random() * possibleVideos.length)];
document.getElementById("home").style.backgroundImage = "url('" + randomVideo + "')";


//funcion del top: 

var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
var rootElement = document.documentElement;

function handleScroll() {
    // Do something on scroll
    var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
    if (rootElement.scrollTop / scrollTotal > 0.1) {
        // Show button
        scrollToTopBtn.classList.add("showBtn");
    } else {
        // Hide button
        scrollToTopBtn.classList.remove("showBtn");
    }
}

function scrollToTop() {
    // Scroll to top logic
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
scrollToTopBtn.addEventListener("click", scrollToTop);
document.addEventListener("scroll", handleScroll);