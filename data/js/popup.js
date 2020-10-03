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
});