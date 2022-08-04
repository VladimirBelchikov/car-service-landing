const passenger = document.querySelector('.passenger');
if (passenger) {
  const swiperPassenger = passenger.querySelector('.swiper');
  const prevElPassenger = passenger.querySelector('.swiper-button-prev');
  const nextElPassenger = passenger.querySelector('.swiper-button-next');
  new Swiper(swiperPassenger, {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
      prevEl: prevElPassenger,
      nextEl: nextElPassenger
    },
    breakpoints: {
      1200: {
        slidesPerView: 3
      }
    }
  });
}

const cargo = document.querySelector('.cargo');
if (cargo) {
  const swiperCargo = cargo.querySelector('.swiper');
  const prevElCargo = cargo.querySelector('.swiper-button-prev');
  const nextElCargo = cargo.querySelector('.swiper-button-next');

  const cargoSwiper = new Swiper(swiperCargo, {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
      prevEl: prevElCargo,
      nextEl: nextElCargo
    },
    breakpoints: {
      1200: {
        slidesPerView: 3
      }
    }
  });

  const breakpoint = matchMedia('(max-width: 1200px)');
  breakpoint.matches ? cargoSwiper.enable() : cargoSwiper.disable();

  breakpoint.addEventListener('change', (event) => {
    event.matches ? cargoSwiper.enable() : cargoSwiper.disable();
  })
}

const manager = document.querySelector('.manager-section__swiper-container');
if (manager) {
  const swiperManager = manager.querySelector('.swiper');
  const prevElManager = manager.querySelector('.swiper-button-prev');
  const nextElManager = manager.querySelector('.swiper-button-next');

  new Swiper(swiperManager, {
    loop: true,
    navigation: {
      prevEl: prevElManager,
      nextEl: nextElManager
    }
  })
}