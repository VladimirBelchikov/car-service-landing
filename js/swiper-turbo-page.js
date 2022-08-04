const equipmentContainer = document.querySelector('.equipment-container')

if (equipmentContainer) {
  const nextEl = equipmentContainer.querySelector('.swiper-button-next');
  const prevEl = equipmentContainer.querySelector('.swiper-button-prev');
  const swiper = new Swiper(equipmentContainer, {
    loop: true,
    centeredSlides: true,
    roundLengths: true,
    allowClick: false,
    slideToClickedSlide: true,
    slidesPerView: 2.5,
    spaceBetween: 30,
    navigation: {
      nextEl: nextEl,
      prevEl: prevEl,
    }
  })
}

const reviewsContainer = document.querySelector('.reviews-container');

if (reviewsContainer) {
  const swiperContainer = reviewsContainer.querySelector('.swiper');
  const nextEl = reviewsContainer.querySelector('.swiper-button-next');
  const prevEl = reviewsContainer.querySelector('.swiper-button-prev');
  const swiper = new Swiper(swiperContainer, {
    loop: true,
    autoHeight: true,
    centeredSlides: true,
    slideToClickedSlide: true,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: nextEl,
      prevEl: prevEl,
    }
  })
}