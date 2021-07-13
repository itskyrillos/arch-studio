import barba from "@barba/core";
import { gsap } from "gsap";

barba.hooks.enter(() => {
  window.scrollTo({
    top: 0,
    left: 0,
  });
});

let tl = gsap.timeline();

const animationLeave = (done) => {
  tl.to(".transition", { display: "block", duration: 0 })
    .to(".layer1", {
      duration: 0.7,
      scaleY: 1,
      transformOrigin: "bottom left",
      ease: "power3.inOut",
    })
    .to(".layer2", {
      duration: 0.7,
      delay: -0.6,
      scaleY: 1,
      transformOrigin: "bottom left",
      ease: "power3.inOut",
    })
    .to(".layer3", {
      duration: 0.7,
      delay: -0.5,
      scaleY: 1,
      transformOrigin: "bottom left",
      ease: "power3.inOut",
      onComplete: () => done(),
    });
};

const animationEnter = () => {
  tl.to(".layer3", {
    duration: 0.7,
    scaleY: 0,
    transformOrigin: "top left",
    ease: "power3.inOut",
  })
    .to(".layer2", {
      duration: 0.7,
      delay: -0.6,
      scaleY: 0,
      transformOrigin: "top left",
      ease: "power3.inOut",
    })
    .to(".layer1", {
      duration: 0.7,
      delay: -0.5,
      scaleY: 0,
      transformOrigin: "top left",
      ease: "power3.inOut",
    })
    .to(".transition", { display: "none", duration: 0 });
};

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
  ],
});
