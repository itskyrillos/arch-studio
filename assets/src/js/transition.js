import barba from "@barba/core";
import { gsap } from "gsap";
// import Swiper from "swiper";
// import LocomotiveScroll from "locomotive-scroll";

// const swiper = new Swiper();

// const scroll = new LocomotiveScroll({
//   el: document.querySelector("[data-scroll-container]"),
//   smooth: true,
// });

barba.hooks.enter(() => {
  // swiper.init();

  window.scrollTo({
    top: 0,
    left: 0,
  });
});

// barba.hooks.beforeLeave(() => {
//   scroll.destroy();
// });
//
// barba.hooks.after(() => {
//   scroll.init();
// });

let tl = gsap.timeline();

const animationLeave = () => {
  tl.to(".transition", { display: "block" })
    .to(".transition__background li", {
      duration: 1,
      scaleY: 1,
      transformOrigin: "bottom left",
      stagger: 0.2,
      ease: "expo.inOut",
    })
    .from(".transition__logo", {
      y: 220,
      duration: 1,
      ease: "Power3.easeOut",
    });
};

const animationEnter = () => {
  tl.to(".transition__logo", {
    delay: 1,
    y: -220,
    duration: 1,
    ease: "power4.out",
  })
    .to(".transition__background li", {
      duration: 1,
      scaleY: 0,
      transformOrigin: "top left",
      stagger: 0.2,
      ease: "expo.inOut",
    })

    .to(".transition", { display: "none" });
};

barba.init({
  transitions: [
    {
      sync: true,
      name: "transition",
      leave(data) {
        animationLeave();
      },
      after(data) {
        animationEnter();
      },
    },
  ],
});
