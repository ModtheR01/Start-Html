let color1 = document.querySelector(".input1"),
    color2 = document.querySelector(".input2"),
    body = document.querySelector("body");
    function generatebg() {
        body.style.background= `linear-gradient(to right, ${color1.value}, ${color2.value}`;
    }
    color1.addEventListener("input", generatebg);
    color2.addEventListener("input", generatebg);