let images1 = document.getElementsByClassName("sec1imgs");
let images2 = document.getElementsByClassName("sec2imgs");
let texts = document.getElementsByClassName("sec2texts");

function zoomin1(event) {
    event.target.style.transform = "scale(1.08)";
    for (let i = 0; i < texts.length; i++) {
        texts[i].style.color = "gold";
    }
}

function zoomout1(event) {
    event.target.style.transform = "scale(1)";
    for (let i = 0; i < texts.length; i++) {
        texts[i].style.color = "white";
    }
}

function zoomin2(event) {
    event.target.style.transform = "scale(1.08)";
    event.target.style.border =" 2px solid gold";
}

function zoomout2(event) {
    event.target.style.transform = "scale(1)";
    event.target.style.border = "none";
}

for (let i = 0; i < images1.length; i++) {
    images1[i].addEventListener("mouseover", zoomin1);
    images1[i].addEventListener("mouseout", zoomout1);
}

for (let i = 0; i < images2.length; i++) {
    images2[i].addEventListener("mouseover", zoomin2);
    images2[i].addEventListener("mouseout", zoomout2);
}
