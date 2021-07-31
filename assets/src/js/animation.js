import barba from "@barba/core";
import { gsap } from "gsap";
import LocomotiveScroll from "locomotive-scroll";

// Locomotive Scroll
const locoScroll = new LocomotiveScroll({
  el: document.querySelector(".smooth-scroll"),
  smooth: true,
});

// Transition animation
let tl = gsap.timeline();

const animationLeave = (done) => {
  tl.to(".transition", { display: "block", duration: 0 })
    .to(".smooth-scroll", {
      duration: 1,
      opacity: 0,
      ease: "ease.inOut",
    })

    .to(".transition__layer", {
      duration: 0.7,
      delay: -1,
      scaleY: 1,
      transformOrigin: "bottom left",
      ease: "power4.inOut",
      onComplete: () => done(),
    });
};

const animationEnter = () => {
  tl.to(".transition__layer", {
    duration: 0.7,
    scaleY: 0,
    transformOrigin: "top left",
    ease: "power4.inOut",
  })
    .to(".smooth-scroll", {
      delay: -0.7,
      duration: 1,
      opacity: 1,
      ease: "ease.inOut",
    })
    .to(".transition", { display: "none", duration: 0 });
};

// Loader
const loader = () => {
  tl.to(".transition__layer-logo", {
    duration: 1,
    delay: 0.5,
    scaleX: 1,
    ease: "power4.inOut",
  })
    .to(".transition__layer-logo", {
      duration: 0.5,
      scaleY: 1,
      ease: "power4.in",
    })
    .to(".transition__logo", {
      duration: 0,
      display: "block",
    })
    .to(".transition__layer-logo", {
      duration: 0.5,
      transformOrigin: "top left",
      scaleY: 0,
      ease: "power4.out",
    })
    .to(".transition__layer-logo", {
      delay: 1,
      duration: 0.5,
      transformOrigin: "bottom left",
      scaleY: 1,
      ease: "power4.in",
    })
    .to(".transition__logo", {
      duration: 0,
      display: "none",
    })
    .to(".transition__layer-logo", {
      duration: 0.5,
      transformOrigin: "top left",
      scaleY: 0,
      ease: "power4.out",
    })
    .to(".transition__layer", {
      duration: 1.3,
      scaleX: 0,
      transformOrigin: "top right",
      ease: "power4.inOut",
    })
    .from(".smooth-scroll", {
      duration: 1.5,
      delay: -1.2,
      opacity: 0,
      ease: "power4.inOut",
    })
    .to(".transition", {
      duration: 0,
      display: "none",
    })
    .to(".transition__layer", { duration: 0, scaleX: 1, scaleY: 0 });
};
loader();

barba.init({
  transitions: [
    {
      name: "page-transition",
      leave(data) {
        const done = this.async();
        animationLeave(done);
      },
      enter(data) {
        animationEnter();
      },
    },
    {
      name: "self",
      enter() {
        gsap.fromTo(
          ".smooth-scroll",
          {
            opacity: 0,
          },
          {
            duration: 1,
            opacity: 1,
            ease: "power4.inOut",
          }
        );
      },
    },
  ],
});

barba.hooks.beforeLeave(() => {
  setTimeout(() => {
    locoScroll.scrollTo("top");
  }, 300);
});

barba.hooks.after(() => {
  locoScroll.update();
});
