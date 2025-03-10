var navbar = document.querySelector(".header .navbar");
var searchForm = document.querySelector(".header .search-form");
var loginForm = document.querySelector(".header .login-form");

var contactInfo = document.querySelector(".contact-info");
document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
};

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
};

document.querySelector("#login-btn").onclick = () => {
  loginForm.classList.toggle("active");
};
document.querySelector("#info-btn").onclick = () => {
  contactInfo.classList.add("active");
};

document.querySelector("#close-contact-info").onclick = () => {
  contactInfo.classList.remove("active");
};
window.onscroll = () => {
  navbar.classList.remove("active");
  searchForm.classList.remove("active");
  loginForm.classList.remove("active");
};

var swiper = new Swiper(".accueil-slider", {
  loop: true,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
document.querySelector(".scroll-top").addEventListener("click", (e) => {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  const windowHeight =
    window.innerHeight || document.documentElement.clientHeight;
  return rect.top >= -rect.height && rect.bottom <= windowHeight + rect.height;
}

function animateOnScroll() {
  const sections = document.querySelectorAll("section, .footer");
  sections.forEach((section) => {
    if (isInViewport(section)) {
      section.classList.add("visible");
    } else {
      section.classList.remove("visible");
    }

    const children = section.querySelectorAll(
      ".swiper-slide, .box, .member, .contact-form, .map, .footer-content"
    );
    children.forEach((child) => {
      if (isInViewport(child)) {
        child.classList.add("visible");
      } else {
        child.classList.remove("visible");
      }
    });
  });
}

window.addEventListener("scroll", animateOnScroll);
window.addEventListener("load", animateOnScroll);
