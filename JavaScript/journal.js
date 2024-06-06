let images = document.getElementsByClassName("journalimg");

function zoomin(event) {
    event.target.style.transform = "scale(1.2)";
}

function zoomout(event) {
    event.target.style.transform = "scale(1)";
}

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener("mouseover", zoomin);
    images[i].addEventListener("mouseout", zoomout);
}
