const sideLinks = document.querySelectorAll(
  ".sidebar .side-menu li a:not(.logout)"
);

sideLinks.forEach((item) => {
  const li = item.parentElement;
  item.addEventListener("click", () => {
    sideLinks.forEach((i) => {
      i.parentElement.classList.remove("active");
    });
    li.classList.add("active");
  });
});

const menuBar = document.querySelector(".content nav .bx.bx-menu");
const sideBar = document.querySelector(".sidebar");

menuBar.addEventListener("click", () => {
  sideBar.classList.toggle("close");
});

const searchBtn = document.querySelector(
  ".content nav form .form-input button"
);
const searchBtnIcon = document.querySelector(
  ".content nav form .form-input button .bx"
);
const searchForm = document.querySelector(".content nav form");

searchBtn.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault;
    searchForm.classList.toggle("show");
    if (searchForm.classList.contains("show")) {
      searchBtnIcon.classList.replace("bx-search", "bx-x");
    } else {
      searchBtnIcon.classList.replace("bx-x", "bx-search");
    }
  }
});

window.addEventListener("resize", () => {
  if (window.innerWidth < 768) {
    sideBar.classList.add("close");
  } else {
    sideBar.classList.remove("close");
  }
  if (window.innerWidth > 576) {
    searchBtnIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  }
});

const toggler = document.getElementById("theme-toggle");

toggler.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }
});

// Enhanced moving text interactions
document.addEventListener("DOMContentLoaded", function () {
  const movingText = document.querySelector(".moving-text");

  if (movingText) {
    // Add click effect
    movingText.addEventListener("click", function () {
      this.style.animation = "none";
      setTimeout(() => {
        this.style.animation =
          "moveText 1.2s infinite, gradientShift 3s ease-in-out infinite";
      }, 100);

      setTimeout(() => {
        this.style.animation = "gradientShift 6s ease-in-out infinite";
      }, 1200);
    });

    // Add mouse enter/leave effects
    movingText.addEventListener("mouseenter", function () {
      this.style.transform = "scale(1.05) translateY(-5px)";
    });

    movingText.addEventListener("mouseleave", function () {
      this.style.transform = "scale(1) translateY(0)";
    });
  }
});
