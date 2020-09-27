let mouseCursor = document.querySelector(".cursor");
let link = document.querySelectorAll("a");

window.addEventListener("mousemove", cursor);

function cursor(e) {
    mouseCursor.style.top = e.pageY + 'px';
    mouseCursor.style.left = e.pageX + 'px';
}