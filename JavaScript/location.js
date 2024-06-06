let Btn = document.getElementsByClassName("btn");

function handleMouseOver(event) {
    event.target.style.backgroundColor = "black";
    event.target.style.color = "white";
    event.target.style.border = "3px solid white";
}

function handleMouseOut(event) {
    event.target.style.backgroundColor = "";
    event.target.style.color = "";
    event.target.style.border = "";
}

for (let i = 0; i < Btn.length; i++) {
    Btn[i].addEventListener("mouseover", handleMouseOver);
    Btn[i].addEventListener("mouseout", handleMouseOut);
}
