import './bootstrap';
import 'bootstrap';


/* Scrool To Top*/
var arrowUp=document.querySelector('.arrow-up');
arrowUp.addEventListener('click',()=>{
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
})
window.addEventListener('scroll',()=>{
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        arrowUp.style.opacity = "1";
    } else {
        arrowUp.style.opacity = "0";
    }
})
