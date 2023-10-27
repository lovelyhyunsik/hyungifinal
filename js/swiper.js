$(function () {
    //최상단 슬라이드
  var swiper = new Swiper(".auto-slide", {
    loop: this.SwiperLength > 1,
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    }
  });
})