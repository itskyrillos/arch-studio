let prevScrollPosition = window.pageYOffset;
const navigation = document.querySelector(".navigation");

window.onscroll = function () {
  let currentScrollPosition = window.pageYOffset;

  if (prevScrollPosition > currentScrollPosition) {
    navigation.style.top = "0";
  } else {
    navigation.style.top = "-9.375rem";
  }
  prevScrollPosition = currentScrollPosition;
};
