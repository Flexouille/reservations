const { default: axios } = require('axios');

require('./bootstrap');

const reservationForm = document.querySelector('#reservationForm');

reservationForm.addEventListener('submit', (e) => {
    e.preventDefault();
    let errors = 0;
    for(let el of e.target){
        // console.log(el.value.length)
        if(el.value.length < 1){
            errors = 1
            console.log('erreur');
        }
    }
    if(errors == 1){
        alert('le formulaire ne peut pas être vide');
    }else{
        let fd = new FormData(e.target);
        axios.post(e.target.action, fd)
        .then((data) => {
            console.log(data);
        })
    }
});