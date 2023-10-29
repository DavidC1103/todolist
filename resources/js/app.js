import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);


setTimeout(() => {
    const alertMessage = document.getElementById('alert-message')
    if(alertMessage){
        alertMessage.style.display = 'none'
    }
}, 3000);




