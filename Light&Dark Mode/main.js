const body = document.querySelector('body'),
    dark = document.querySelector('#dark'),
    light = document.querySelector('#light');
function darkmode() {
    body.style.backgroundColor = '#353535';
    body.style.color = '#B0FC38';
}
function lightmode() {
    body.style.backgroundColor = '#FFFFFF';
    body.style.color = '#000000';
    }
dark.addEventListener('click',darkmode);
light.addEventListener('click', lightmode);
