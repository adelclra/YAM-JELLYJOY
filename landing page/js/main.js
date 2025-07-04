/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navClose = document.getElementById("nav-close");

/*=============== MENU SHOW ===============*/
/* Validate if constant exists */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

/*=============== MENU HIDDEN ===============*/
/* Validate if constant exists */
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll(".nav__link");

const linkAction = () => {
  const navMenu = document.getElementById("nav-menu");
  navMenu.classList.remove("show-menu");
};
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*=============== CHANGE BACKGROUND HEADER ===============*/
const scrollHeader = () => {
  const header = document.getElementById("header");
  // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
  this.scrollY >= 50
    ? header.classList.add("bg-header")
    : header.classList.remove("bg-header");
};
window;

/*=============== SHOW SCROLL UP ===============*/
const scrollUp = () => {
  const scrollUp = document.getElementById("scroll-up");
  // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scroll-top class
  this.scrollY >= 350
    ? scrollUp.classList.add("show-scroll")
    : scrollUp.classList.remove("show-scroll");
};
window.addEventListener("scroll", scrollUp);

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const scrollActive = () => {
  const scrollY = window.pageYOffset;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight,
      sectionTop = current.offsetTop - 58,
      sectionId = current.getAttribute("id"),
      sectionsClass = document.querySelector(
        ".nav__menu a[href*=" + sectionId + "]"
      );

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      sectionsClass.classList.add("active-link");
    } else {
      sectionsClass.classList.remove("active-link");
    }
  });
};
window.addEventListener("scroll", scrollActive);

/*=============== DARK LIGHT THEME ===============*/
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "ri-sun-line";

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
  themeButton.classList.contains(iconTheme) ? "ri-moon-line" : "ri-sun-line";

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === "dark" ? "add" : "remove"](
    darkTheme
  );
  themeButton.classList[selectedIcon === "ri-moon-line" ? "add" : "remove"](
    iconTheme
  );
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener("click", () => {
  // Add or remove the dark / icon theme
  document.body.classList.toggle(darkTheme);
  themeButton.classList.toggle(iconTheme);
  // We save the theme and the current icon that the user chose
  localStorage.setItem("selected-theme", getCurrentTheme());
  localStorage.setItem("selected-icon", getCurrentIcon());
});

/*=============== ENHANCED THEME TOGGLE FUNCTIONALITY ===============*/
// Tambahkan ini di akhir file main.js yang sudah ada

// Enhanced theme toggle dengan animation
const enhancedThemeToggle = () => {
  const themeButton = document.getElementById("theme-button");

  if (themeButton) {
    // Add rotation animation saat diklik
    themeButton.addEventListener("click", () => {
      themeButton.classList.add("rotating");

      // Remove animation class setelah selesai
      setTimeout(() => {
        themeButton.classList.remove("rotating");
      }, 500);
    });

    // Enhanced hover effects untuk semua nav elements
    const navElements = document.querySelectorAll(
      ".nav__link, .nav__toggle, .change-theme"
    );

    navElements.forEach((element) => {
      element.addEventListener("mouseenter", function () {
        this.style.transform = "translateY(-2px)";
      });

      element.addEventListener("mouseleave", function () {
        this.style.transform = "translateY(0)";
      });
    });
  }
};

// Initialize enhanced theme toggle
document.addEventListener("DOMContentLoaded", enhancedThemeToggle);

// Smooth theme transition untuk semua elements
document.body.style.transition = "background-color 0.4s ease, color 0.4s ease";

// Enhanced scroll header dengan smooth transition
const enhancedScrollHeader = () => {
  const header = document.getElementById("header");
  if (header) {
    header.style.transition = "all 0.3s ease";

    window.addEventListener("scroll", () => {
      if (window.scrollY >= 50) {
        header.classList.add("bg-header");
      } else {
        header.classList.remove("bg-header");
      }
    });
  }
};

enhancedScrollHeader();
