const buttons = document.querySelectorAll('.container button');
buttons.forEach(button => {
    button.addEventListener('click', () => {
        buttons.forEach(button => {
            button.classList.remove('selected');
        });      
        button.classList.add('selected');
    });
});