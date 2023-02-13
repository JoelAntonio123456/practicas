//variables
const inputRandomNumber = document.getElementById('inputRandom');

//eventos
window.addEventListener('load', () => {
    getRandomNumber();
})

//funciones
function getRandomNumber() {
    let randomNumber = Math.random().toString().slice(2, 8);
    inputRandomNumber.value = randomNumber;
}