// import Swiper JS
import Swiper from "swiper";

// core version + navigation, pagination modules:
import SwiperCore, { Navigation, Pagination, Autoplay } from "swiper/core";

// configure Swiper to use modules
SwiperCore.use([Navigation, Pagination, Autoplay]);

const swiper = new Swiper(".swiper-container", {
  autoplay: {
    delay: 9000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<div class="${className}">0${index + 1}</div>`;
    },
  },
});
