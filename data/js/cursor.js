window.addEventListener("load", function () {

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
});