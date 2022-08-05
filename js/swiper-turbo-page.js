const passenger = document.querySelector('.passenger');
if (passenger) {
  const swiperPassenger = passenger.querySelector('.swiper');
  const prevElPassenger = passenger.querySelector('.swiper-button-prev');
  const nextElPassenger = passenger.querySelector('.swiper-button-next');
  new Swiper(swiperPassenger, {
    loop: true,
    slidesPerView: 1.5,
    centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      prevEl: prevElPassenger,
      nextEl: nextElPassenger
    },
  });
}

const cargo = document.querySelector('.cargo');
if (cargo) {
  const swiperCargo = cargo.querySelector('.swiper');
  const prevElCargo = cargo.querySelector('.swiper-button-prev');
  const nextElCargo = cargo.querySelector('.swiper-button-next');

  const cargoSwiper = new Swiper(swiperCargo, {
    loop: true,
    slidesPerView: 1.5,
    centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      prevEl: prevElCargo,
      nextEl: nextElCargo
    },
  });

  const breakpoint = matchMedia('(max-width: 1200px)');
  breakpoint.matches ? cargoSwiper.enable() : cargoSwiper.disable();

  breakpoint.addEventListener('change', (event) => {
    event.matches ? cargoSwiper.enable() : cargoSwiper.disable();
  })
}

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
