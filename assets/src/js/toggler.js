const navigationButton = document.querySelector(".navigation__toggler");
const navigationBackground = document.querySelector(".navigation__background");
const navigationLinks = document.querySelectorAll(".navigation__list > li");

const toggleMenu = () => {
  let nav = document.querySelector(".navigation");

  if (nav.classList.contains("isOpened")) {
    nav.classList.remove("isOpened");
    navigationBackground.classList.remove("isOpened");
  } else {
    nav.classList.add("isOpened");
    navigationBackground.classList.add("isOpened");
  }
};

navigationButton.addEventListener("click", toggleMenu);

navigationLinks.forEach((navigationLink) => {
  navigationLink.addEventListener("click", toggleMenu);
});
