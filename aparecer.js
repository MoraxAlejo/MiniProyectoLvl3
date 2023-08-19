boton = document.getElementById("close")
nav = document.getElementById("nav")
console.log(nav)

boton.addEventListener("click" , aparecer)

function aparecer() {
    if (nav.classList.contains("invisible")) {
        nav.classList.remove("invisible");
    } else {
        nav.classList.add("invisible");
    }
}