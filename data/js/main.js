document.addEventListener("DOMContentLoaded", function() {
  let musicAudio = document.querySelector(".music--audio");
  musicAudio.play();
});

window.addEventListener("load", function () {
  
  let popupOpen = document.querySelector(".popup__open");
  let popupClose = document.querySelector(".popup__close");
  let popupContainer = document.querySelector(".container-popup");

  popupOpen.addEventListener("click", function () {
    popupContainer.classList.remove("hide");
    popupContainer.classList.add("show");

    popupOpen.classList.remove("show");
    popupOpen.classList.add("hide");

    popupClose.classList.remove("hide");
    popupClose.classList.add("show");
  });

  popupClose.addEventListener("click", function () {
    popupContainer.classList.remove("show");
    popupContainer.classList.add("hide");

    popupOpen.classList.remove("hide");
    popupOpen.classList.add("show");

    popupClose.classList.remove("show");
    popupClose.classList.add("hide");
  });

  const buttonsWrapper = document.querySelector(".map");
  const slides = document.querySelector(".inner");

  buttonsWrapper.addEventListener("click", e => {
    if (e.target.nodeName === "BUTTON") {
      Array.from(buttonsWrapper.children).forEach(item =>
        item.classList.remove("active")
      );
      if (e.target.classList.contains("first")) {
        slides.style.transform = "translateX(-0%)";
        e.target.classList.add("active");
      } else {
        slides.style.transform = "translateX(-50vw)";
        e.target.classList.add("active");
      }
    }
  });

  let mouseCursor = document.querySelector(".cursor");
  let link = document.querySelectorAll("a, button, .map button, .infos svg, .music--container svg");

  window.addEventListener("mousemove", cursor);

  function cursor(e) {
    var posY = e.pageY;
    var posX = e.pageX;

    mouseCursor.style.top = posY + 'px';
    mouseCursor.style.left = posX + 'px';
  }

  link.forEach(g => {
    g.addEventListener("mouseover", () => {
      mouseCursor.classList.add("cursor__grow");
    });
    g.addEventListener("mouseleave", () => {
      mouseCursor.classList.remove("cursor__grow");
    });
  });

  let musicAudio = document.querySelector(".music--audio");
  let musicOn = document.querySelector(".music__on");
  let musicOff = document.querySelector(".music__off");

  musicOn.addEventListener("click", function () {
    musicAudio.play();
    musicOn.classList.add("hide");
    musicOn.classList.remove("show");

    musicOff.classList.add("show");
    musicOff.classList.remove("hide");
  });

  musicOff.addEventListener("click", function () {
    musicAudio.pause();
    musicOn.classList.remove("hide");
    musicOn.classList.add("show");

    musicOff.classList.remove("show");
    musicOff.classList.add("hide");
  });
});