let home = document.querySelectorAll(".home");
// var btn = document.getElementById("btn");
// btn.addEventListener("click", function (e) {
//     e.preventDefault()
// })

home.addEventListener("click", (e) => {
    e.preventDefault();
})

var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        600:{
            slidesPerView:2,
        },
    },
});

