

function menuToggle(value) {
    if (value) {
        document.getElementsByClassName("menu")[0].style.display = "flex";
        document.getElementsByTagName("body")[0].style.overflowY = "hidden";
        document.getElementById("span1").style.transform = "rotate(45deg) translate(7px, 7px)";
        document.getElementById("span2").style.transform = "scale(0.2, 0.2)";
        document.getElementById("span3").style.transform = "rotate(-45deg) translate(7px, -7px)";
    } else {
        document.getElementsByClassName("menu")[0].style.display = "none";
        document.getElementsByTagName("body")[0].style.overflowY = "auto";
        document.getElementById("span1").style.transform = "rotate(0) translate(0, 0)";
        document.getElementById("span2").style.transform = "scale(1, 1)";
        document.getElementById("span3").style.transform = "rotate(0) translate(0, 0)";
    }
}

function resizeDetect() {
    if (window.innerWidth > 1019) {
        document.getElementsByClassName("menu")[0].style.display = "none";
        document.getElementsByTagName("body")[0].style.overflowY = "auto";
        document.getElementById("toggle").checked = false;
        document.getElementById("span1").style.transform = "rotate(0) translate(0, 0)";
        document.getElementById("span2").style.transform = "scale(1, 1)";
        document.getElementById("span3").style.transform = "rotate(0) translate(0, 0)";
    }
}