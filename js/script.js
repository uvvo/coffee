let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    cartItem.classList.remove('active');
    user.classList.remove('active');
}


window.onscroll = () =>{
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
    user.classList.remove('active');
}


