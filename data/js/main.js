  // let mouseCursor = document.querySelector(".cursor");
  // let link = document.querySelectorAll("a, button, .map button, .infos svg, .music--container svg");

  // window.addEventListener("mousemove", cursor);

  // function cursor(e) {
  //   var posY = e.pageY;
  //   var posX = e.pageX;

  //   mouseCursor.style.top = posY + 'px';
  //   mouseCursor.style.left = posX + 'px';
  // }

  // link.forEach(g => {
  //   g.addEventListener("mouseover", () => {
  //     mouseCursor.classList.add("cursor__grow");
  //   });
  //   g.addEventListener("mouseleave", () => {
  //     mouseCursor.classList.remove("cursor__grow");
  //   });
  // });

  // let musicAudio = document.querySelector(".music--audio");
  // let musicOn = document.querySelector(".music__on");
  // let musicOff = document.querySelector(".music__off");

  // musicOn.addEventListener("click", function () {
  //   musicAudio.play();
  //   musicOn.classList.add("hide");
  //   musicOn.classList.remove("show");

  //   musicOff.classList.add("show");
  //   musicOff.classList.remove("hide");
  // });

  // musicOff.addEventListener("click", function () {
  //   musicAudio.pause();
  //   musicOn.classList.remove("hide");
  //   musicOn.classList.add("show");

  //   musicOff.classList.remove("show");
  //   musicOff.classList.add("hide");
  // });




  // function delay(n) {
  //   n = n || 2000;
  //   return new Promise((done) => {
  //     setTimeout(() => {
  //       done();
  //     }, n);
  //   });
  // }

  // function pageTransition() {
  //   var tl = gsap.timeline();
  //   tl.to(".loading-screen", {
  //     duration: 1.2,
  //     width: "100%",
  //     left: "0%",
  //     ease: "Expo.easeInOut",
  //   });

  //   tl.to(".loading-screen", {
  //     duration: 1,
  //     width: "100%",
  //     left: "100%",
  //     ease: "Expo.easeInOut",
  //     delay: 0.3,
  //   });
  //   tl.set(".loading-screen", { left: "-100%" });
  // }

  // // function contentAnimation() {
  // //     var tl = gsap.timeline();
  // //     tl.from(".animate-this", { duration: 1, y: 30, opacity: 0, stagger: 0.4, delay: 0.2 });
  // // }

  // $(function () {
  //   barba.init({
  //     sync: true,
  //     transitions: [
  //       {
  //         async leave(data) {
  //           const done = this.async();

  //           pageTransition();
  //           await delay(1000);
  //           done();
  //         },

  //         // async enter(data) {
  //         //     contentAnimation();
  //         // },

  //         // async once(data) {
  //         //     contentAnimation();
  //         // },
  //       },
  //     ],
  //   });
  // });