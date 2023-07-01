document.querySelector('.burger').addEventListener('click',function(){
    // document.querySelector('.burger span').classList.toggle('active');
    document.querySelector('.menu').classList.toggle('animate');
});
function menu_img_close() {
    document.querySelector('.menu').classList.toggle('animate');
}

function show() {
    document.querySelector('.modal_form_active').classList.toggle('modal_close')
    document.querySelector('.menu').classList.remove('animate');
}



let swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    keyboard: {
      enabled: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });