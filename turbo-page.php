<?php include('./utm.php'); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Turbo Page</title>
  <link rel="stylesheet" href="css/turbo_css.css" type="text/css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
  <script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=b69e372ba309bc8faf81bca86a8241e9"
          charset="UTF-8" async></script>
  <!--  pixel-->
  <script type="text/javascript">
    !function () {
      var t = document.createElement("script");
      t.type = "text/javascript", t.async = !0, t.src = 'https://vk.com/js/api/openapi.js?169', t.onload = function () {
        VK.Retargeting.Init("VK-RTRG-1430706-6UU2B"), VK.Retargeting.Hit()
      }, document.head.appendChild(t)
    }();
  </script>
  <!--  /pixel-->

  <link rel="stylesheet" href="dquiz/dquiz.min.css"/>
  <style>
		.dquiz-is-locked .callbackkiller,
		.dquiz-is-locked .ws-chat .ws-chat-btn-el-container {
			z-index: -1 !important;
		}
  </style>
</head>
<body>
<!--pixel-->
<noscript>
  <img src="https://vk.com/rtrg?p=VK-RTRG-1430706-6UU2B" style="position:fixed; left:-999px;" alt=""/>
</noscript>
<!--/pixel-->

<!-- Rating Mail.ru counter -->
<script type="text/javascript">
  var _tmr = window._tmr || (window._tmr = []);
  _tmr.push({id: "3248783", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
  (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script");
    ts.type = "text/javascript";
    ts.async = true;
    ts.id = id;
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    var f = function () {
      var s = d.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(ts, s);
    };
    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else {
      f();
    }
  })(document, window, "topmailru-code");
</script>
<noscript>
  <div>
    <img src="https://top-fwz1.mail.ru/counter?id=3248783;js=na" style="border:0;position:absolute;left:-9999px;"
         alt="Top.Mail.Ru"/>
  </div>
</noscript>
<!-- //Rating Mail.ru counter -->

<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6WG3JW"
          height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
  (function (w, d, s, h, id) {
    w.roistatProjectId = id;
    w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id + "/init?referrer=" + encodeURIComponent(d.location.href);
    var js = d.createElement(s);
    js.charset = "UTF-8";
    js.async = 1;
    js.src = p + h + u;
    var js2 = d.getElementsByTagName(s)[0];
    js2.parentNode.insertBefore(js, js2);
  })(window, document, 'script', 'cloud.roistat.com', '52d041b22c9089f178bc2b392b9c821c');
</script>
<div class="wrapper">

  <!-- HEADER -->
  <header>
    <img src="img/turbo_images/logo.png" alt="CTO logo">
    <div class="header-phone">
      <a class="mgo-number header-phone-icon" href="tel:+78005505724">
      </a>
    </div>
  </header>
  <!-- END HEADER -->

  <!-- CONTENT -->
  <section>
    <div class="main-section">
      <div class="main-title"><p><b>Автосервисное и шиномонтажное оборудование</b></p></div>
      <div class="main-description"><p>От официального дилера с доставкой по России</p></div>
      <div class="button-list">
        <button class="scroll-button">
          Подобрать оборудование
        </button>
        <a class="whatsapp-button"
           href='https://wa.me/79130707688?text=Добрый день. Пишу с сайта автосервисное.оборудование5.рф. Хочу подобрать оборудование и узнать стоимость.'>
          Написать в What's App
        </a>
      </div>
      <div class="main-image">
        <img src="img/turbo_images/AutoService.jpg" alt="#">
      </div>

      <div class="before-form">
        <h2 class="before-form-title">Отправим готовое предложение с вилкой цен: выгодно, качественно, лучшее</h2>
      </div>

      <div class="container" style="padding-top: 30px; padding-bottom: 50px">
        <?php include './dquiz/dquiz-turbo-page.php' ?>
      </div>

      <script src="dquiz/dquiz.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          new dQuiz('.dquiz-1', {
            yaMetrika: '44176079'
          });
        })
      </script>


      <section class="sets passenger">
        <h2 class="subtitle sets__title">ГОТОВЫЕ КОМПЛЕКТЫ С ВЫГОДОЙ ДО 10 ПРОЦЕНТОВ</h2>
        <h2 class="subtitle sets__subtitle">Комплекты для легкового шиномонтажа</h2>
        <div class="swiper sets__wrapper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="sets__item-container">
                <div class="sets__item-img-container">
                  <img src="./img/sets/econom.png" alt="" class="sets__item-img">
                </div>
                <div class="sets__text-block">
                  <h3 class="sets__item-title bg_gray">Эконом</h3>
                  <ul class="sets__item-list">
                    <li><span>Шиномонтажный станок</span><span>NORDBERG 4638E</span></li>
                    <li><span>Балансировочный станок</span><span>NORDBERG ECO 4523C</span></li>
                    <li><span>Компрессор воздушный</span><span>NORDBERG ECO NCE100/400</span></li>
                    <li><span>Домкрат подкатной</span><span>NORDBERG N3203</span></li>
                    <li><span>Пневмогайковерт ударный</span><span>NORDBERG ECO NP14085K</span></li>
                  </ul>
                  <div class="sets__prices">
                    <p class="sets__old-price">210 375 руб.</p>
                    <p class="sets__price">199 856 руб.</p>
                  </div>
                </div>
                <a class="sets__button" href="#openModal_2">Купить комплект</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="sets__item-container">
                <div class="sets__item-img-container">
                  <img src="./img/sets/specialist.png" alt="" class="sets__item-img">
                </div>
                <div class="sets__text-block">
                  <h3 class="sets__item-title bg_blue">Специалист</h3>
                  <ul class="sets__item-list">
                    <li><span>Шиномонтажный станок</span><span>TROMMELBERG 1810E</span></li>
                    <li><span>Балансировочный станок</span><span>TROMMELBERG CB1930E</span></li>
                    <li><span>Компрессор воздушный</span><span>HUBERTH RP103100</span></li>
                    <li><span>Домкрат подкатной</span><span>TROMMELBERG XRD0330</span></li>
                    <li><span>Пневмогайковерт ударный</span><span>HUBERTH RP207422</span></li>
                  </ul>
                  <div class="sets__prices">
                    <p class="sets__old-price">249 628 руб.</p>
                    <p class="sets__price">224 665 руб.</p>
                  </div>
                </div>
                <a class="sets__button" href="#openModal_2">Купить комплект</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="sets__item-container">
                <div class="sets__item-img-container">
                  <img src="./img/sets/semi-auto.png" alt="" class="sets__item-img">
                </div>
                <div class="sets__text-block">
                  <h3 class="sets__item-title bg_red">Профи-полуавтомат</h3>
                  <ul class="sets__item-list">
                    <li><span>Шиномонтажный станок</span><span>TROMMELBERG 1860</span></li>
                    <li><span>Балансировочный станок</span><span>TROMMELBERG CB1960B</span></li>
                    <li><span>Компрессор воздушный</span><span>HUBERTH RP306250</span></li>
                    <li><span>Домкрат подкатной</span><span>TROMMELBERG XRD0375</span></li>
                    <li><span>Пневмогайковерт ударный</span><span>HUBERTH RP207422</span></li>
                  </ul>
                  <div class="sets__prices">
                    <p class="sets__old-price">396 423 руб.</p>
                    <p class="sets__price">356 780 руб.</p>
                  </div>
                </div>
                <a class="sets__button" href="#openModal_2">Купить комплект</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="sets__item-container">
                <div class="sets__item-img-container">
                  <img src="./img/sets/prof.png" alt="" class="sets__item-img">
                </div>
                <div class="sets__text-block">
                  <h3 class="sets__item-title bg_red">Профи-автомат</h3>
                  <ul class="sets__item-list">
                    <li><span>Шиномонтажный станок</span><span>TROMMELBERG 1885</span></li>
                    <li><span>Балансировочный станок</span><span>TROMMELBERG CB1990B</span></li>
                    <li><span>Компрессор воздушный</span><span>HUBERTH RP309250</span></li>
                    <li><span>Домкрат подкатной</span><span>TROMMELBERG XRD0335</span></li>
                    <li><span>Пневмогайковерт ударный</span><span>HUBERTH RP207422</span></li>
                  </ul>
                  <div class="sets__prices">
                    <p class="sets__old-price">583 573 руб.</p>
                    <p class="sets__price">577 253 руб.</p>
                  </div>
                </div>
                <div>
                  <a class="sets__button" href="#openModal_2">Купить комплект</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="sets cargo">
        <h2 class="subtitle sets__subtitle">Комплекты для грузового шиномонтажа</h2>
        <div class="swiper sets__wrapper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="sets__item-container">
                <div class="sets__item-img-container">
                  <img src="./img/sets/econom.jpg" alt="" class="sets__item-img">
                </div>
                <div class="sets__text-block">
                  <h3 class="sets__item-title bg_gray">Эконом</h3>
                  <ul class="sets__item-list">
                    <li><span>Шиномонтажный станок</span><span>NORDBERG 46TRKE</span></li>
                    <li><span>Балансировочный станок</span><span>NORDBERG 45TRKE</span></li>
                    <li><span>Компрессор поршневой</span><span>AIRCAST СБ 4/Ф-500 LB 75</span></li>
                    <li><span>Домкрат подкатной</span><span>NORDBERG N3322L</span></li>
                    <li><span>Пневмогайковерт</span><span>NORDBERG IT4250</span></li>
                  </ul>
                  <div class="sets__prices">
                    <p class="sets__old-price">745 358 руб.</p>
                    <p class="sets__price">708 092 руб.</p>
                  </div>
                </div>
                <a class="sets__button" href="#openModal_2">Купить комплект</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="sets__item-container">
                <div class="sets__item-img-container">
                  <img src="./img/sets/spec.jpg" alt="" class="sets__item-img">
                </div>
                <div class="sets__text-block">
                  <h3 class="sets__item-title bg_blue">Специалист</h3>
                  <ul class="sets__item-list">
                    <li><span>Шиномонтажный станок</span><span>SIVIK ГШС-515А</span></li>
                    <li><span>Балансировочный станок</span><span>SIVIK TRUCKER СБМП-200 СТ</span></li>
                    <li><span>Компрессор поршневой</span><span>REMEZA СБ 4/Ф-500.LT100/16-7.5</span></li>
                    <li><span>Домкрат подкатной</span><span>СТАНКОИМПОРТ SD1903</span></li>
                    <li><span>Пневмогайковерт</span><span>Licota PAW-10048</span></li>
                  </ul>
                  <div class="sets__prices">
                    <p class="sets__old-price">1 005 529 руб.</p>
                    <p class="sets__price">955 254 руб.</p>
                  </div>
                </div>
                <a class="sets__button" href="#openModal_2">Купить комплект</a>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="sets__item-container">
                <div class="sets__item-img-container">
                  <img src="./img/sets/profi.jpg" alt="" class="sets__item-img">
                </div>
                <div class="sets__text-block">
                  <h3 class="sets__item-title bg_red">Профи</h3>
                  <ul class="sets__item-list">
                    <li><span>Шиномонтажный станок</span><span>NORDBERG 46TRK46</span></li>
                    <li><span>Балансировочный станок</span><span>NORDBERG 45TRK</span></li>
                    <li><span>Компрессор поршневой</span><span>AIRCAST СБ 4/Ф-500.LT100/16</span></li>
                    <li><span>Домкрат подкатной</span><span>NORDBERG N3350L</span></li>
                    <li><span>Пневмогайковерт</span><span>NORDBERG IT4250</span></li>
                  </ul>
                  <div class="sets__prices">
                    <p class="sets__old-price">1 241 140 руб.</p>
                    <p class="sets__price">1 179 084 руб.</p>
                  </div>
                </div>
                <a class="sets__button" href="#openModal_2">Купить комплект</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <h2 class="reviews-container__title">
        Укомплектуем <span class="danger">любой шиномонтаж и автосервис</span> под ключ на лучших условиях
      </h2>
      <div class="container equipment-container swiper">
        <div class="swiper-wrapper">
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-1.jpg" alt="">
              </div>
              <p>Шиномонтажное балансировочное<br/>оборудование<br/>от 97 749 р.</p>
            </a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-2.jpg" alt="">
              </div>
              <p>Гидравлическое<br/>оборудование<br/>от 180 000 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-3.jpg" alt="">
              </div>
              <p>Гаражное<br/>оборудование<br/>от 14 152 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-4.jpg" alt="">
              </div>
              <p>Диагностическое<br/>оборудование<br/>от 48 000 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-5.jpg" alt="">
              </div>
              <p>Для кузовного<br/>ремонта<br/>от 148 000 р.</p>
            </a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-6.jpg" alt="">
              </div>
              <p>Покрасочные<br/>камеры<br/>от 1 500 000 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-7.jpg" alt="">
              </div>
              <p>Инструмент<br/>и мебель<br/>от 5 197 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-8.jpg" alt="">
              </div>
              <p>Стенды<br/>&quot;развал-схождения&quot;<br/>от 450 000 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-9.jpg" alt="">
              </div>
              <p>Компрессоры<br/>от 45 000 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-10.jpg" alt="">
              </div>
              <p>Грузовое<br/>оборудование<br/>от 420 000 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-11.jpg" alt="">
              </div>
              <p>Сварочное<br/>оборудование<br/>от 50 200 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-12.jpg" alt="">
              </div>
              <p>Моечное<br/>оборудование<br/>от 6 560 р.</p></a>
          </div>
          <div class='equipment-container__element swiper-slide'>
            <a href="#openModal_2">
              <div class="img-netflix img-netflix_1x1 img-netflix_contain">
                <img src="img/equipment-13.jpg" alt="">
              </div>
              <p>Электростанции<br/>от 31 724 р.</p></a>
          </div>
        </div>
      </div>

      <section class="section-main reviews-container" id="rewmap">
        <div class="container">
          <h2 class="reviews-container__title">
            Посмотрите, <span class="danger">что пишут о нас клиенты</span>, которым мы уже доставили оборудование
          </h2>
          <div class="swiper__wrapper">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img class="img-responsive lazy"
                       src="img/reviews/rew-3.jpg"
                       alt="">
                </div>
                <div class="swiper-slide">
                  <img class="img-responsive lazy"
                       src="img/reviews/rew-2.jpg"
                       alt="">
                </div>
                <div class="swiper-slide">
                  <img class="img-responsive lazy"
                       src="img/reviews/rew-1.jpg"
                       alt="">
                </div>
                <div class="swiper-slide">
                  <img class="img-responsive lazy"
                       src="img/reviews/rew-4.jpg"
                       alt="">
                </div>
                <div class="swiper-slide">
                  <img class="img-responsive lazy"
                       src="img/reviews/rew-5.jpg"
                       alt="">
                </div>
                <div class="swiper-slide">
                  <img class="img-responsive lazy"
                       src="img/reviews/rew-6.jpg"
                       alt="">
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>

      <div class="before-form">
        <div class="before-form-description">
          <p>
            <b>Проведем подробную консультацию по оборудованию и подберём самое оптимальное под вашу задачу.</b>
            <br>
            <b>Просто оставьте номер:</b>
          </p>
        </div>
      </div>
      <div class="form-section">
        <form method="post" action="sender/send.php" id="form_24" class="sform">
          <label>Телефон<i style="color:red">*</i></label>
          <br>
          <input class="input-text input-phone input-string-form phone-mask" id="inputf5" maxlength="18" type="text"
                 name="phone" required>
          <div class="submit-button">
            <button type="submit">
              <span id="submitNew">Получить консультацию</span>
            </button>
          </div>
        </form>
        <div class="agreement">
				<span class="agreement-text">
					Нажимая «Получить консультацию», вы даёте согласие на обработку персональных данынх
				</span>
          <!--          <a href="https://yandex.ru/legal/rules/" class="agreement-link">Пользовательского соглашения</a>-->
          <span class="agreement-text">
				</span>
          <span class="agreement-full-modal">
<!--						<a href="#openModal_agreement">Подробнее</a>-->
					</span>
        </div>
      </div>
    </div>
  </section>
  <!-- END CONTENT -->

</div>

<!-- FOOTER -->
<footer>
  <div class="footer-middle">
    © ЦЕНТР ТЕХНИЧЕСКОГО ОБОРУДОВАНИЯ 2022<br>
    <span class="footer-middle-agreement-modal">
            <a href="#openModal_agreement_footer">Юридическая информация</a>
        </span>
    <p class="text-center" style="color: #fff;; margin-top: 25px; margin-bottom: 10px; line-height: 1.1;"><small>Все
        материалы, размещенные на сайте являются собственностью компании "Центр технического оборудования" и защищены
        законом. Перепечатка, копирование, воспроизведение и распространение в любом объеме информации, размещенной на
        сайте , возможна только с письменного согласия ООО "Центр технического оборудования"</small></p>
    <p class="text-center mt-2 mb-0" style="color: #fff; line-height: 1.1"><small>Информация на данном интернет-сайте
        носит исключительно информационный (ознакомительный) характер и ни при каких условиях не является публичной
        офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ. Для получения исчерпывающей информации о
        стоимости и характеристиках товаров обращайтесь к менеджерам по продажам.</small></p>
  </div>
</footer>
<!-- END FOOTER -->

<!-- MODAL WINDOWS -->

<div id="openModal_2" class="modalDialog">
  <div class="modalDialog__container">
    <div class="modal-box">
      <a href="#close" title="Close" class="close"></a>
      <h4 class="modalDialog__title">Оставь имя и телефон<br/>и получите выгодное предложение</h4>
      <form method="post" action="/sender/send.php" class="sform modalDialog__form">
        <input type="hidden" id="ya-city" value="">
        <input type="hidden" name="subject" id="cNameId2" value="">
        <input class="modalDialog__input input-text input-modal" type="text" name="name" placeholder="Ваше имя">
        <input class="modalDialog__input input-text input-modal phone-mask" maxlength="18" type="text" name="phone"
               placeholder="Ваш телефон" required>
        <div class="alert_on alert_on_modal" id="phone_bottom_14"></div>
        <div class="wrapper-button">
          <input class="modalDialog__submit" type="submit" name="submit" value="Отправить">
          <div class="modalDialog__compliance">Нажимая кнопку, вы даете согласие на обработку персональных данных</div>
        </div>
        <input type="hidden" name="typsh" value="Автосервисное">
      </form>
    </div>
  </div>
</div>

<div id="openModal_agreement_footer" class="modalDialog">
  <div>
    <h2>Юридическая информация</h2>
    <p>
      Компания: ООО "ЦЕНТР ТЕХНИЧЕСКОГО ОБОРУДОВАНИЯ"<br>
      ИНН: 4205274440<br>
      ОГРН: 1134205022478<br>
      Юридический адрес: 650065, Кемеровская обл, Кемерово г, Ленинградский пр-кт, дом № 15, корпус А, офис 74
    </p>
    <a href="#close" title="Закрыть" class="close">Понятно</a>
  </div>
</div>
<!-- END MODAL WINDOWS -->

<div class="hidden"></div>
<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<script src="libs/jquery/jquery-2.1.3.min.js"></script>
<script src="/libs/jquery.mask/jquery.mask.js"></script>
<script src="https://cdn.jsdelivr.net/g/bootstrap@3.3.6,jquery.ui@1.11.4"></script>
<script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
<script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU"
        type="text/javascript"></script>
<script src="/sender/js/sender.js?rnd=<?= uniqid() ?>"></script>

<script>
  var url = new URL(location.href);
  var term = url.searchParams.get('utm_term');
  if (term) {
    $('.section-title-1 span').eq(0).html(term.replace(/\+/g, ''))
  }
</script>
<script type="text/javascript">
  function viewdiv() {
    var el = document.getElementsByClassName("hideclass");
    for (var i = 0; i < el.length; i++) {
      if (el[i].style.display == "none") {
        el[i].style.display = "block";
      } else {
        el[i].style.display = "none";
      }
    }
  }
</script>


<script src="js/common.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
  (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(90806754, "init", {
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true
  });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90806754" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function (w, d, u, i, o, s, p) {
    if (d.getElementById(i)) {
      return;
    }
    w['MangoObject'] = o;
    w[o] = w[o] || function () {
      (w[o].q = w[o].q || []).push(arguments)
    };
    w[o].u = u;
    w[o].t = 1 * new Date();
    s = d.createElement('script');
    s.async = 1;
    s.id = i;
    s.src = u;
    p = d.getElementsByTagName('script')[0];
    p.parentNode.insertBefore(s, p);
  }(window, document, '//widgets.mango-office.ru/widgets/mango.js', 'mango-js', 'mgo'));
  mgo({calltracking: {id: 24356, elements: [{"selector": ".mgo-number"}]}});
</script>

<!-- Google Tag Manager -->
<script>
  (function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start':
        new Date().getTime(), event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-P6WG3JW');
</script>
<!-- End Google Tag Manager -->

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
  var _tmr = window._tmr || (window._tmr = []);
  _tmr.push({id: "2909947", type: "pageView", start: (new Date()).getTime()});
  (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script");
    ts.type = "text/javascript";
    ts.async = true;
    ts.id = id;
    ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
    var f = function () {
      var s = d.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(ts, s);
    };
    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else {
      f();
    }
  })(document, window, "topmailru-code");
</script>
<noscript>
  <div>
    <img src="//top-fwz1.mail.ru/counter?id=2909947;js=na" style="border:0;position:absolute;left:-9999px;" alt=""/>
  </div>
</noscript>
<!-- //Rating@Mail.ru counter -->

<script src="js/swiper-bundle.min.js"></script>
<script src="js/swiper-turbo-page.js"></script>
<script src="js/remodal.min.js"></script>

</body>
</html>
