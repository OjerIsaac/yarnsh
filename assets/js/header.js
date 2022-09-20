const desktopLinks = document.querySelectorAll(".desktop-link");
// mobile navigation

const mobileNavBtn = document.querySelector(".menu-btn");
const mobileNavContainer = document.querySelector(".mobile-nav");
const faBar = document.querySelector(".fa-bars");
const closeMoboileNavBtn = document.querySelector("#close-mobile-nav-btn");

// function
const setUp = (e) => {
  desktopLinks.forEach((link) => {
    if (link.classList.contains("add-Border-bottom")) {
      {
        link.classList.remove("add-Border-bottom");
      }
      e.currentTarget.classList.add("add-Border-bottom");
    }
  });
};

// mobile navigation function
const showMobileNav = () => {
  mobileNavContainer.style.transform = "translate(0px)";
  if (faBar.classList.contains("fa-bars")) {
    faBar.classList.remove("fa-bars");
    faBar.classList.add("fa-times");
  }
  mobileNavBtn.style.display = "none";
};

const closeMobileNavigation = () => {
  mobileNavContainer.style.transform = "translate(-500px)";
  mobileNavBtn.style.display = "block";
  console.log("heu");
};

// events
desktopLinks.forEach((link) => {
  link.addEventListener("click", setUp);
});

// mobile navigation events
mobileNavBtn.addEventListener("click", showMobileNav);
closeMoboileNavBtn.addEventListener("click", closeMobileNavigation);
