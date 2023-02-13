
const inputRandomNumber = document.getElementById('inputRandom');

window.addEventListener('load', () => {
    getRandomNumber();
})

function getRandomNumber() {
    let randomNumber = Math.random().toString().slice(2, 8);
    inputRandomNumber.value = randomNumber;
}
