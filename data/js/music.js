window.addEventListener("load", function () {

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