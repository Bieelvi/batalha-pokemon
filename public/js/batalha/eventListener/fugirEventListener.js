let fugirClass = document.querySelector('#fugirId');

fugirClass.readOnly = false;

fugirClass.addEventListener('click', function(event) { 
    event.preventDefault();

    let res = confirm("Deseja realmente fugir?");

    if (res) {
        location.reload();
    }        
});