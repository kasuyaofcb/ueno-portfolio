'use strict'

// nav
const nav = document.querySelector('.header__navArea');
const hamburgerMenu = document.querySelector('.hamburger-menu');

hamburgerMenu.addEventListener('click', function(){
  nav.classList.toggle('active');
  console.log(hamburgerMenu)
})

const navClick = document.querySelectorAll('nav > ul > li > a');

navClick.forEach((el)=>{
  el.addEventListener('click', function(){
    nav.classList.remove('active')
  }) 
})


// toTop
const toTop = document.querySelector('.toTop-btn-area');

window.addEventListener('scroll', () => {
  let scrollY = window.scrollY;
  if(scrollY > 1000){
    toTop.classList.add('toTop')
  }else{
    toTop.classList.remove('toTop')
  }
  console.log(window.scrollY);
});



// / swiper
const swiper = new Swiper('.swiper', {
  spaceBetween: '5%',
  loop: true,
  speed: 1000,
  effect: 'slide',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
});
