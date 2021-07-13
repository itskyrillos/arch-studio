import LocomotiveScroll from "locomotive-scroll";
import barba from "@barba/core";

const scroll = new LocomotiveScroll({
  el: document.querySelector("[data-scroll-container]"),
  smooth: true,
});

barba.hooks.beforeLeave(() => {
  scroll.destroy();
});

barba.hooks.after(() => {
  scroll.init();
});
