const navigationButton = document.querySelector(".navigation__toggler");
const navigationLinks = document.querySelectorAll(".navigation__list > li");
let body = document.querySelector("body");

const toggleMenu = () => {
  let nav = document.querySelector(".navigation");

  if (nav.classList.contains("isOpened")) {
    nav.classList.remove("isOpened");
  } else {
    nav.classList.add("isOpened");
  }
};

navigationButton.addEventListener("click", toggleMenu);

navigationLinks.forEach((navigationLink) => {
  navigationLink.addEventListener("click", toggleMenu);
});
