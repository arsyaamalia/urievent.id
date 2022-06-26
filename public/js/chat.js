const hamburgerList = document.querySelector('.hamburger-list input');
const nav = document.querySelector('.rightSide');

hamburgerList.addEventListener('click',function(){
    nav.classList.toggle('slide')
})