// import Swiper JS
import Swiper from "swiper";

// core version + navigation, pagination modules:
import SwiperCore, { Navigation, Pagination } from "swiper/core";

// configure Swiper to use modules
SwiperCore.use([Navigation, Pagination]);

const swiper = new Swiper(".swiper-container", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<div class="${className}">0${index + 1}</div>`;
    },
  },
});
