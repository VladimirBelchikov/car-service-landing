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
      <div class="header-phone-number">
        <a href="tel:+78005505724" class="mgo-number">8-800-550-57-24</a> 88007753106@mail.ru
      </div>
    </div>
  </header>
  <!-- END HEADER -->

  <!-- CONTENT -->
  <section>
    <div class="main-section">
      <div class="main-title">
        <p>
          <b>Автосервисное и гаражное оборудование</b>
        </p>
      </div>
      <div class="main-description">
        <p>
          От официального дилера с доставкой по России
        </p>
        <!--                <p><u>Скачай каталог в WhatsApp:</u></p>-->
      </div>
      <div class="button-list">
        <a href='https://wa.me/79130707688?text=Чтобы получить предложение на автосервисное оборудование, нажмите "отправить"'>
					<span class="whatsapp-button"
                onclick="yaCounter44176079.reachGoal('whatsappmob'); gtag('event', 'WhatsAppMob', {'event_category': 'zayavka', 'event_action': 'whatsapp'}); return true;">
						Получить предложение в WhatsApp
					</span>
        </a>
      </div>
      <div class="main-image">
        <img src="img/turbo_images/AutoService.jpg" alt="#">
      </div>

      <div class="before-form">
        <div class="before-form-title">
          <p>
            ПОДБЕРЁМ КОМПЛЕКТ ОБОРУДОВАНИЯ
            <br>
            <span>ИЗ 1639 МОДЕЛЕЙ В НАЛИЧИИ</span>
          </p>

        </div>
        <div class="before-form-description">
          Мы официальные дилеры, входящие в тройку лидеров по продажам автосервисного оборудования
          <br>
          <p>
            <b>Получи подробные характеристики, фотографии и цены на всё автосервисное оборудование</b>
            <br>
            <b>Просто оставь номер:</b>
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
              <span id="submitNew">Получить каталог</span>
            </button>
          </div>
        </form>
        <div class="agreement">
				<span class="agreement-text">
					Нажимая «Получить каталог», даю согласие ООО Центр технического
					оборудования на обработку введенной информации и принимаю условия
				</span>
          <a href="https://yandex.ru/legal/rules/" class="agreement-link">Пользовательского соглашения</a>
          <span class="agreement-text">
					ООО "Яндекс".
				</span>
          <span class="agreement-full-modal">
						<a href="#openModal_agreement">Подробнее</a>
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
    © ЦЕНТР ТЕХНИЧЕСКОГО ОБОРУДОВАНИЯ 2019<br>
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
<div id="openModal_agreement" class="modalDialog">
  <div>
    <h2>Соглашение</h2>
    <p>
      Нажимая «Отправить», даю согласие ООО Центр технического оборудования,
      ИНН 4205274440 на обработку введенной информации в целях, указанных в анкете,
      в порядке, предусмотренном политикой конфиденциальности.
      Анкета создана с использованием ресурсов Яндекса, в связи с чем я даю согласие ООО "ЯНДЕКС"
      на обработку указанных в анкете данных на условиях и для целей, определенных в Политике конфиденциальности.
    </p>
    <a href="#close" title="Закрыть" class="close">Понятно</a>
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
<script src="js/jquery.simslider.js"></script>
<script src="js/slick.min.js"></script>
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
    //ert(el[0].id);
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

<!-- Facebook Pixel Code -->
<script>
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '3566209050080251');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=3566209050080251&ev=PageView&noscript=1"
  /></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148345717-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  gtag('js', new Date());
  gtag('set', {'user_id': 'USER_ID'}); // Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).
  gtag('config', 'UA-148345717-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148719137-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  gtag('js', new Date());
  gtag('set', {'user_id': 'USER_ID'}); // Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).
  gtag('config', 'UA-148719137-5');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function (d, w, c) {
    (w[c] = w[c] || []).push(function () {
      try {
        w.yaCounter44176079 = new Ya.Metrika({
          id: 44176079,
          clickmap: true,
          trackLinks: true,
          accurateTrackBounce: true,
          webvisor: true,
          trackHash: true
        });
      } catch (e) {
      }
    });

    var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script"),
      f = function () {
        n.parentNode.insertBefore(s, n);
      };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else {
      f();
    }
  })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
  <div><img src="https://mc.yandex.ru/watch/44176079" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function (m, e, t, r, i, k, a) {
    m[i] = m[i] || function () {
      (m[i].a = m[i].a || []).push(arguments)
    };
    m[i].l = 1 * new Date();
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
  })
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(55095823, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true
  });
</script>
<noscript>
  <div><img src="https://mc.yandex.ru/watch/55095823" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
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


</body>
</html>
