window.addEventListener("load", function () {
    let mouseCursor = document.querySelector(".cursor");
    let link = document.querySelectorAll("a, button, .map button, .infos svg, .music--container svg, input, textarea");
    
    window.addEventListener("mousemove", cursor);

    function cursor(e) {
        mouseCursor.style.top = e.pageY + 'px';
        mouseCursor.style.left = e.pageX + 'px';
    }

    link.forEach(g => {
        g.addEventListener("mouseover", () => {
            mouseCursor.classList.add("cursor__grow");
        })
        g.addEventListener("mouseleave", () => {
            mouseCursor.classList.remove("cursor__grow");
        })
    })
})