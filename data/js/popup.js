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
        if (window.matchMedia("(min-width : 1920px)").matches) {
            var translateSlide = -50;
        } else if (window.matchMedia("(min-width : 1750px)").matches) {
            var translateSlide = -53;
        } else if (window.matchMedia("(min-width : 1600px)").matches) {
            var translateSlide = -55;
        } else if (window.matchMedia("(min-width : 1450px)").matches) {
            var translateSlide = -57;
        } else if (window.matchMedia("(min-width : 1370px)").matches) {
            var translateSlide = -59;
        } else if (window.matchMedia("(min-width : 1250px)").matches) {
            var translateSlide = -61;
        } else if (window.matchMedia("(min-width : 1150px)").matches) {
            var translateSlide = -65;
        } else if (window.matchMedia("(min-width : 1050px)").matches) {
            var translateSlide = -68;
        } else if (window.matchMedia("(min-width : 1000px)").matches) {
            var translateSlide = -114;
        } else if (window.matchMedia("(min-width : 740px)").matches) {
            var translateSlide = -118;
        } else if (window.matchMedia("(min-width : 650px)").matches) {
            var translateSlide = -125;
        } else if (window.matchMedia("(min-width : 600px)").matches) {
            var translateSlide = -130;
        } else if (window.matchMedia("(min-width : 550px)").matches) {
            var translateSlide = -137;
        } else if (window.matchMedia("(min-width : 500px)").matches) {
            var translateSlide = -144;
        } else if (window.matchMedia("(max-width : 375px)").matches) {
            var translateSlide = -174;
        }

        if (e.target.nodeName === "BUTTON") {
            Array.from(buttonsWrapper.children).forEach(item =>
                item.classList.remove("active")
            );
            if (e.target.classList.contains("first")) {
                slides.style.transform = "translateX(-0%)";
                e.target.classList.add("active");
            } else {
                slides.style.transform = "translateX(" + translateSlide + "vw)";
                e.target.classList.add("active");
            }
        }
    });
});