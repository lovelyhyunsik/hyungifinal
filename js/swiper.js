$(function () {
    //최상단 슬라이드
  var swiper = new Swiper(".auto-slide", {
    loop: true,
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    }
  });
})