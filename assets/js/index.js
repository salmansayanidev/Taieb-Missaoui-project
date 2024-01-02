const currentPath = window.location.href.split("/");
const path = currentPath[currentPath.length - 1];

const navLinks = document.querySelectorAll(".header-link");

navLinks.forEach((link) => {
  link.classList.remove("active");

  if (link.getAttribute("href") === path) {
    link.classList.add("active");
  }
});

const opnMenuBtn = document.querySelector(".menu-opn-btn");
const clsMenuBtn = document.querySelector(".menu-cls-btn");
const resMenu = document.querySelector(".header-navigation");

opnMenuBtn.addEventListener("click", () => {
  resMenu.classList.add("active");
});

clsMenuBtn.addEventListener("click", () => {
  resMenu.classList.remove("active");
});

// banner slider
$(".banner-slider-area").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2500,
  dots: true,
  arrows: true,
  prevArrow: $(".bnner-pre-btn"),
  nextArrow: $(".bnner-next-btn"),
});

// people-are-saying-slider-area
$(".people-are-saying-slider-area").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2500,
  dots: false,
  arrows: true,
  prevArrow: $(".peo-say-slidr-btn.pre-btn"),
  nextArrow: $(".peo-say-slidr-btn.next-btn"),
});



const eyeBtns = document.querySelectorAll(".eye-btn");

eyeBtns.forEach((eyeBtn) => {
  eyeBtn.addEventListener("click", () => {
    const myInput = eyeBtn.previousElementSibling; // Get the specific input related to the clicked button
    const icon = eyeBtn.querySelector("i"); // Get the specific icon related to the clicked button

    if (myInput.type === "password") {
      myInput.type = "text";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    } else {
      myInput.type = "password";
      icon.classList.add("fa-eye-slash");
      icon.classList.remove("fa-eye");
    }
  });
});


