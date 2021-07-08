import barba from "@barba/core";
import { gsap } from "gsap";

barba.hooks.enter(() => {
  window.scrollTo({
    top: 0,
    left: 0,
  });
});

barba.init({
  transitions: [
    {
      name: "opacity-transition",
      leave(data) {
        return gsap.to(data.current.container, {
          opacity: 0,
        });
      },
      enter(data) {
        return gsap.from(data.next.container, {
          opacity: 0,
        });
      },
    },
  ],
});
