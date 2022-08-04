<?php
include('./utm.php');

$campagns_arr = [
    '20881940' => 0,
    '20882365' => 0,
    '20882431' => 0,
    '20896260' => 0,
    '20896681' => 0,
    '21528108' => 0,
    '21528136' => 0,
    '21528161' => 0,
    '20875546' => 1,
    '20875571' => 1,
    '20896240' => 1,
    '20896668' => 1,
    '20876000' => 2,
    '20896241' => 2,
    '20896670' => 2,
    '20876238' => 3,
    '20896242' => 3,
    '20896671' => 3,
    '20876564' => 4,
    '20876598' => 4,
    '20896243' => 4,
    '20896672' => 4,
    '20877858' => 5,
    '20877885' => 5,
    '20896246' => 5,
    '20896675' => 5,
    '20878869' => 6,
    '20896252' => 6,
    '20896677' => 6,
    '20880199' => 7,
    '20880492' => 7,
    '20896255' => 7,
    '20896680' => 7,
    '20883820' => 8,
    '20883876' => 8,
    '20883933' => 8,
    '20896272' => 8,
    '20896685' => 8,
    '21014374' => 8,
    '21370467' => 8,
    '21370533' => 8,
    '21370619' => 8,
    '20884736' => 9,
    '20884790' => 9,
    '20884855' => 9,
    '20896279' => 9,
    '20896691' => 9,
    '21303815' => 9,
    '21303891' => 9,
    '21303944' => 9,
    '20884943' => 10,
    '20896299' => 10,
    '20896697' => 10,
    '21240170' => 10,
    '21240254' => 10,
    '20885036' => 11,
    '20885139' => 11,
    '20896305' => 11,
    '20896703' => 11,
    '21182876' => 11,
    '21182905' => 11,
    '21182928' => 11,
    '20895136' => 12,
    '20895138' => 12,
    '20895140' => 12,
    '20896288' => 12,
    '20896693' => 12,
    '21251163' => 12,
    '21251231' => 12,
    '21251302' => 12,
    '21251363' => 12,
    '20895143' => 13,
    '20895144' => 13,
    '20896265' => 14,
    '20896684' => 14,
    '21503551' => 14,
    '21503568' => 14,
    '21503584' => 14,
    '21503602' => 14,
    '21503618' => 14,
    '20862880' => 15,
    '20862985' => 15,
    '20863075' => 15,
    '20863158' => 15,
    '20863249' => 15,
];

$brands_arr = [
    [  /* NORDBERG */
        'title'         => 'NORDBERG',
        'brandSmallImg' => 'img/nordberg_br.jpg',
        'brandBigImg'   => 'img/nordberg.jpg',
        'brandName'     => "NORDBERG",
    ],
    [  /* BEISSBARTH */
        'title'         => 'BEISSBARTH',
        'brandSmallImg' => 'img/Beissbarth_logo.png',
        'brandBigImg'   => 'img/BEISSBARTH.jpg',
        'brandName'     => "BEISSBARTH",
    ],
    [  /* BUTLER */
        'title'         => 'BUTLER',
        'brandSmallImg' => 'img/Butler-Engineering.jpg',
        'brandBigImg'   => 'img/BUTLER.jpg',
        'brandName'     => "BUTLER",
    ],
    [  /* GIULIANO */
        'title'         => 'GIULIANO',
        'brandSmallImg' => 'img/GIULIANO_brand.jpg',
        'brandBigImg'   => 'img/GIULIANO.jpg',
        'brandName'     => "GIULIANO",
    ],
    [  /* HOFMANN */
        'title'         => 'text5',
        'brandSmallImg' => 'img/HOFMANN-brend.jpg',
        'brandBigImg'   => 'img/HOFMANN.jpg',
        'brandName'     => "HOFMANN",
    ],
    [  /* HUNTER */
        'title'         => 'HUNTER',
        'brandSmallImg' => 'img/HUNTER-brend.jpg',
        'brandBigImg'   => 'img/HUNTER.jpg',
        'brandName'     => "HUNTER",
    ],
    [  /* JOHNBEAN */
        'title'         => 'JOHNBEAN',
        'brandSmallImg' => 'img/John_Bean_Logo.jpg',
        'brandBigImg'   => 'img/JohnBean.jpg',
        'brandName'     => "JOHNBEAN",
    ],
    [  /* MB */
        'title'         => 'MB',
        'brandSmallImg' => 'img/MB-brend.jpg',
        'brandBigImg'   => 'img/MB.jpg',
        'brandName'     => "MB",
    ],
    [  /*   SICAM */
        'title'         => 'SICAM',
        'brandSmallImg' => 'img/SICAM-brand.jpg',
        'brandBigImg'   => 'img/SICAM.jpg',
        'brandName'     => "SICAM",
    ],
    [  /*   SICE */
        'title'         => 'SICE',
        'brandSmallImg' => 'img/logo-sice.jpg',
        'brandBigImg'   => 'img/SICE.jpg',
        'brandName'     => "SICE",
    ],
    [  /*   TECO */
        'title'         => 'TECO',
        'brandSmallImg' => 'img/TECO-brand.png',
        'brandBigImg'   => 'img/TECO.jpg',
        'brandName'     => "TECO",
    ],
    [  /*     TROMMELBERG */
        'title'         => 'TROMMELBERG',
        'brandSmallImg' => 'img/Vector-Smart Object.png',
        'brandBigImg'   => 'Trommelberg_1810E.png',
        'brandName'     => "TROMMELBERG",
    ],
    [  /*     SIVIK */
        'title'         => 'SIVIK',
        'brandSmallImg' => 'img/SIVIK-brand.jpg',
        'brandBigImg'   => 'img/SIVIK.jpg',
        'brandName'     => "SIVIK",
    ],
    [  /*     AET */
        'title'         => 'AET',
        'brandSmallImg' => 'img/ae-and-t-brand.jpg',
        'brandBigImg'   => 'img/ae-and-t.jpg',
        'brandName'     => "AET",
    ],
    [  /*     RAVAGLIOLI */
        'title'         => 'RAVAGLIOLI',
        'brandSmallImg' => 'img/ravaglioli-brand.jpg',
        'brandBigImg'   => 'img/RAVAGLIOLI.jpg',
        'brandName'     => "RAVAGLIOLI",
    ],
    [  /*      AEandT */
        'title'         => 'AE&amp;T"',
        'brandSmallImg' => 'img/ae-and-t-brand.jpg',
        'brandBigImg'   => 'img/ae-and-t.jpg',
        'brandName'     => "AE&amp;T",
    ],
    [  /* def */
        'title'         => ' ',
        'brandSmallImg' => ' ',
        'brandBigImg'   => 'img/tree.jpg',
        'brandName'     => " ",
        'displaynone'   => "&nbsp;none",
    ],
];

if (isset($_GET['utm_source'])) {
    if ($_GET['utm_source'] == 'yandex') {
        if (isset($_GET["utm_campaign"]) AND isset($campagns_arr[$_GET["utm_campaign"]])) {
            $brand_id = $campagns_arr[$_GET["utm_campaign"]];
        } else {
            $brand_id = '16';
        }
    } else {
        $brand_id = '16';
    }
} else {
    $brand_id = '16';
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>

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

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148345717-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('set', {'user_id': 'USER_ID'}); // Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).
		gtag('config', 'UA-148345717-1');
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148719137-5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('set', {'user_id': 'USER_ID'}); // Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).
		gtag('config', 'UA-148719137-5');
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->

    <meta charset="utf-8"/>
    <title>Центр Технического Оборудования <?php echo $brands_arr[$brand_id]["Title"]; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Оборудование для шиномонтажа, шиномонтажные станки, балансировочные станки, шиномонтажные полуавтоматы, балансировочные полуавтоматы, шиномонтажные стенды, балансировочные стенды. Легковые шиномонтажные станки, грузовые шиномонтажные станки.">
    <meta name="Keywords" content="Оборудование для шиномонтажа, шиномонтажные станки, балансировочные станки, шиномонтажные полуавтоматы, балансировочные полуавтоматы, шиномонтажные стенды, балансировочные стенды. Легковые шиномонтажные станки, грузовые шиномонтажные станки">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/media.css"/>
		<link rel="stylesheet" href="css/interview-thank.css"/>

    <!--[if IE 9]>
    <link href="css/ie9.css" type="text/css" rel="stylesheet"/>
    <![endif]-->

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
	<script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
          m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(55095823, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
      });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/55095823" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

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
	<!-- Facebook Pixel Code -->
	<script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '3566209050080251');
      fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
								 src="https://www.facebook.com/tr?id=3566209050080251&ev=PageView&noscript=1"
		/></noscript>
	<!-- End Facebook Pixel Code -->


    <? include 'sender/includes/admitad.php' ?>

<style>
    .section-thank{
        padding: 60px 0 80px 0;
    }
    .section-thank .section-title h2 {
            padding: 0 15px;
        }

    .section-thank__btn{
        text-align: center;
    }

    .certificate-btn{
        font-size: 20px;
        color: #141414;
        text-transform: uppercase;
        font-weight: 600;
        display: inline-block;
        background-color: #ffd726;
        border-radius: 8px;
        border-bottom: 6px solid #f0a800;
        padding: 18px 25px;
        text-decoration: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,0.15);
        box-shadow: 0 10px 20px 0 rgba(0,0,0,0.15);
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        text-align: center;
    }

    .certificate-btn:hover{
        text-decoration: none;
        background-color: #ffba00;
        color: #141414;
    }
    @media only screen and (max-width : 1200px) {
        .section-thank.section-1 .section-title-1{
            font-size: 41px;
        }
    }

    @media only screen and (max-width : 992px){
        .section-thank .section-title h2 {
            margin-top: 0;
            font-size: 32px;
        }
    }
</style>

    <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
    <script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=b69e372ba309bc8faf81bca86a8241e9" charset="UTF-8" async></script>
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
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
  })(document, window, "topmailru-code");
</script><noscript><div>
    <img src="https://top-fwz1.mail.ru/counter?id=3248783;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
  </div></noscript>
<!-- //Rating Mail.ru counter -->

<script>
    (function(w, d, s, h, id) {
        w.roistatProjectId = id; w.roistatHost = h;
        var p = d.location.protocol == "https:" ? "https://" : "http://";
        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init?referrer="+encodeURIComponent(d.location.href);
        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
    })(window, document, 'script', 'cloud.roistat.com', '52d041b22c9089f178bc2b392b9c821c');
</script>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6WG3JW"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="header">
  <div class="container header__container">
    <div class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 89" style="height: 100%">
        <style>
					.st1 {
						fill: #3a3b3b
					}
        </style>
        <path fill="#de343d" d="M34 89L0 69V30l34-20v15L13 37.2V62l21 12.3 21-12.5V37l13-7v39z"/>
        <path class="st1"
              d="M40 0v40l34-20.3zM25 44v7h-4v-7h-4v11h10v2h2v-3h-1v-6h4v7h4v-7h4v7h11V44H25zm22 7h-3v-3h3v3z"/>
      </svg>
      <span class="header-logo-text">Центр <br> Технического <br> Оборудования</span>
    </div>
    <div class="header__button-container">
      <a href="#openModal_tender" class="tender-btn">Пригласить на тендер</a>
    </div>
    <div class="header-city-wrap">
      <div class="header-city">
        <p class="city-p">Москва</p>
        <a href="#openMenu" class="openMenu">город доставки</a>
      </div>
    </div>
    <div class="header-phone-number">
      <p class="mgo-number-15766">8 (800) 550-5724</p>
      <a href="#openModal"> Звони! Поможем выбрать </a>
    </div>
  </div>
</header>

<div class="container section-1 section-thank" style="padding-bottom: 0;">
	<div class="row">
		<div class="col-md-12 section-title section-title-1" style="margin-bottom: 0">
			<h2><span>Спасибо за заявку!</span><br>Мы свяжемся с Вами в ближайшее время</h2>
		</div>
	</div>
</div>

<section class="interview interview-thank section-main section-bg" style="display: none">
	<div class="container">
		<h2 class="section-title text-center">Для того что бы мы смогли быстрее с вами связаться и помочь в приобретении оборудования ответьте на несколько вопросов</h2>
		<div class="section-body">
			<div id="interview" class="w-interview">
				<div class="question" data-question-type="number">
					<div class="question__text">На какой бюджет рассчитываете при приобретение оборудования?</div>
					<label>
						<input type="number" name="summa" class="input-main" placeholder="Введите сумму" required>
					</label>
				</div>
				<div class="question" data-question-type="radio">
					<div class="question__text">Как скоро нужно оборудование?</div>
					<label>
						<input type="radio" class="option-input radio" name="radio" value="В течение недели" />
						В течение недели
					</label>
					<label>
						<input type="radio" class="option-input radio" name="radio" value="В течение месяца" />
						В течение месяца
					</label>
					<label>
						<input type="radio" class="option-input radio" name="radio" value="В течение года" />
						В течение года
					</label>
					<label>
						<input type="radio" class="option-input radio" name="radio" value="Не могу ответить" />
						Не могу ответить
					</label>
				</div>
				<div class="question" data-question-type="radio">
					<div class="question__text">Под какие нужны необходимо оборудование</div>
					<label>
						<input type="radio" class="option-input radio" name="radio2" value="Для автосервиса" />
						Для автосервиса
					</label>
					<label>
						<input type="radio" class="option-input radio" name="radio2" value="Для собственных нужд" />
						Для собственных нужд
					</label>
				</div>
				<div class="question" data-question-type="textarea">
					<div class="question__text">Можете оставить дополнительную информацию, если необходимо</div>
					<textarea name="dop-info" class="input-main" style="width: 100%; margin-top: 10px" rows="6" placeholder="Оставьте комментарий"></textarea>
				</div>

				<form action="sender/send.php" method="post" class="call-back-form interview-form sform">
					<input type="hidden" name="typsh" value="Автосервисное">
					<input type="hidden" name="subject" value="Станица спасибо">
					<input type="hidden" name="save-data" value="true">
					<input type="hidden" name="note" value="">
					<input type="hidden" name="phone" class="input-main" placeholder="Ваш телефон">
					<div class="form-group">
						<input class="interview-btn certificate-btn" type="submit" name="catalog" value="Отправить данные" onclick="yaMetrikaReachGoal('thank_quiz'); return true;">
					</div>
					<a href="#openModal4" class="call-back-form__politic" style="color:black; font-size:14px; opacity: 0.6">Нажимая кнопку, вы даете согласие на обработку персональных данных</a>
				</form>
			</div>
		</div>
	</div>
</section>

<div class="container section-1 section-thank" style="padding-top: 0; margin-top: 30px">
	<div class="row">
		<div class="col-md-12 section-title section-title-1">
			<h3 style="font-size: 22px; text-transform: none; margin: 15px auto 15px auto; max-width: 560px;">Подпишитесь на нас в соцсетях, чтобы узнать больше о том, как подобрать автосервисное оборудование.</h3>
			<div class="soc-btns soc-btns_circle">
				<a href="https://vk.com/centr_to" target="_blank" class="soc-btns__link soc-btns__link_vk"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 532.337 532.337" style="enable-background:new 0 0 532.337 532.337;" xml:space="preserve"> <g> <g> <path d="M471.998,241.286c7.57-9.786,13.58-17.638,18.018-23.562c31.965-42.498,45.82-69.646,41.574-81.482l-1.666-2.772 c-1.107-1.665-3.977-3.194-8.592-4.578c-4.621-1.383-10.533-1.604-17.736-0.691l-79.822,0.563 c-1.848-0.184-3.697-0.141-5.545,0.128c-1.848,0.281-3.047,0.563-3.605,0.832c-0.557,0.282-1.016,0.508-1.383,0.692l-1.107,0.832 c-0.924,0.551-1.939,1.524-3.047,2.914c-1.109,1.389-2.039,2.999-2.773,4.853c-8.684,22.356-18.568,43.146-29.656,62.363 c-6.838,11.457-13.123,21.396-18.844,29.792c-5.729,8.415-10.533,14.603-14.414,18.568c-3.879,3.972-7.393,7.166-10.531,9.56 c-3.146,2.411-5.545,3.421-7.203,3.054c-1.666-0.367-3.238-0.734-4.713-1.114c-2.588-1.658-4.67-3.917-6.236-6.787 c-1.572-2.857-2.631-6.463-3.189-10.808c-0.551-4.339-0.881-8.084-0.967-11.23c-0.098-3.139-0.049-7.57,0.141-13.305 c0.184-5.729,0.275-9.602,0.275-11.64c0-7.014,0.141-14.639,0.418-22.864c0.275-8.219,0.508-14.737,0.691-19.542 c0.184-4.798,0.275-9.884,0.275-15.245c0-5.349-0.324-9.56-0.975-12.613c-0.648-3.042-1.621-5.998-2.906-8.868 c-1.297-2.858-3.189-5.08-5.686-6.646c-2.496-1.573-5.588-2.815-9.283-3.746c-9.799-2.222-22.271-3.409-37.418-3.604 c-34.37-0.355-56.451,1.86-66.243,6.658c-3.88,2.038-7.393,4.804-10.532,8.317c-3.329,4.07-3.788,6.291-1.383,6.646 c11.089,1.665,18.936,5.643,23.556,11.922l1.665,3.323c1.291,2.411,2.583,6.659,3.88,12.754c1.292,6.096,2.124,12.84,2.497,20.233 c0.924,13.488,0.924,25.031,0,34.646c-0.924,9.614-1.799,17.093-2.631,22.442c-0.833,5.361-2.081,9.7-3.74,13.023 c-1.665,3.335-2.772,5.367-3.329,6.107c-0.557,0.734-1.016,1.199-1.383,1.384c-2.405,0.918-4.896,1.383-7.484,1.383 c-2.589,0-5.729-1.298-9.425-3.887c-3.697-2.576-7.534-6.138-11.5-10.667c-3.978-4.522-8.452-10.856-13.446-18.99 c-4.988-8.121-10.166-17.736-15.521-28.819l-4.431-8.042c-2.772-5.165-6.561-12.699-11.365-22.583s-9.058-19.443-12.748-28.69 c-1.481-3.874-3.697-6.83-6.652-8.868l-1.383-0.832c-0.924-0.735-2.405-1.524-4.437-2.351c-2.038-0.832-4.155-1.432-6.377-1.805 l-75.943,0.551c-7.76,0-13.023,1.763-15.795,5.275l-1.108,1.659C0.275,136.059,0,137.54,0,139.566 c0,2.038,0.557,4.529,1.665,7.479c11.089,26.059,23.146,51.188,36.169,75.386c13.03,24.211,24.346,43.709,33.954,58.489 c9.608,14.792,19.4,28.733,29.382,41.854c9.982,13.121,16.585,21.523,19.816,25.214c3.231,3.703,5.771,6.476,7.62,8.317 l6.928,6.658c4.431,4.432,10.949,9.743,19.542,15.937c8.592,6.193,18.103,12.289,28.55,18.287 c10.435,6.01,22.589,10.899,36.444,14.694c13.856,3.794,27.344,5.317,40.465,4.571h31.874c6.469-0.551,11.363-2.576,14.688-6.096 l1.107-1.383c0.734-1.102,1.432-2.815,2.08-5.123c0.643-2.307,0.975-4.853,0.975-7.619c-0.191-7.943,0.416-15.116,1.799-21.481 c1.383-6.377,2.955-11.175,4.713-14.418c1.756-3.226,3.738-5.955,5.959-8.177c2.217-2.222,3.783-3.55,4.713-4.015 c0.924-0.453,1.666-0.777,2.217-0.973c4.43-1.476,9.65-0.043,15.66,4.296c6.004,4.352,11.641,9.7,16.91,16.077 c5.262,6.377,11.59,13.531,18.984,21.481c7.387,7.943,13.855,13.855,19.4,17.735l5.545,3.336 c3.695,2.209,8.494,4.241,14.412,6.096c5.912,1.842,11.09,2.307,15.52,1.383l70.955-1.114c7.02,0,12.473-1.15,16.354-3.464 c3.879-2.295,6.188-4.853,6.928-7.619c0.734-2.772,0.783-5.899,0.141-9.419c-0.648-3.507-1.297-5.955-1.939-7.338 c-0.648-1.383-1.25-2.546-1.807-3.464c-9.24-16.628-26.885-37.051-52.938-61.255l-0.557-0.551l-0.275-0.281l-0.275-0.27H473.4 c-11.83-11.273-19.309-18.85-22.449-22.736c-5.727-7.38-7.025-14.865-3.879-22.441 C449.275,271.874,457.586,259.769,471.998,241.286z"/> </g> </g> </svg></a>
				<a href="https://ok.ru/group/62869172715707" target="_blank" class="soc-btns__link soc-btns__link_ok"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008" xml:space="preserve"><path d="M256.002 0c-70.592 0-128 57.408-128 128s57.408 128 128 128 128-57.408 128-128-57.408-128-128-128zm0 192c-35.296 0-64-28.704-64-64s28.704-64 64-64 64 28.704 64 64-28.704 64-64 64z"/><path d="M425.73 252.448c-12.512-12.512-32.736-12.512-45.248 0-68.608 68.608-180.288 68.608-248.928 0-12.512-12.512-32.736-12.512-45.248 0s-12.512 32.736 0 45.28c39.808 39.808 90.272 62.496 142.304 68.416l-91.232 91.232c-12.512 12.512-12.512 32.736 0 45.248s32.736 12.512 45.248 0l73.376-73.376 73.376 73.376A31.912 31.912 0 0 0 352.002 512a31.912 31.912 0 0 0 22.624-9.376c12.512-12.512 12.512-32.736 0-45.248l-91.232-91.232c52.032-5.92 102.496-28.608 142.304-68.416 12.512-12.512 12.512-32.768.032-45.28z"/></svg></a>
			</div>
		</div>
	</div>
	<div class="section-thank__btn" style="margin-top: 40px">
		<a href="/" class="certificate-btn">Вернуться на главную</a>
	</div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 footer-info">
                <p>Центр технического оборудования<br/><span>Подбор и продажа шиномонтажного оборудования<br/>с доставкой по всей России</span>
                </p>
                <p>ОГРН 1134205022478  ИНН 4205274440</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="footer-phone">
                        <span class="mgo-number-15766 mgo-number">8 (800) 550-5724</span>
                    <p>звонок по России бесплатный</p>
                </div>
                <div class="footer-form-call">
                    <a href="#openModal_call" class="button form-button callback-btn">заказать обратный звонок</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</footer>

<section class="autor-wrap" style="background: #dbdbdb;padding: 10px 0;">
    <div class="container">
        <div style="text-align:center;"><a href="#openModal4" target="_self" style="color:black; font-size:14px;">Политика конфиденциальности</a></div>
			<div style="color: #323232; font-size: 14px; line-height: 1.1">
				<p class="text-center" style="text-align: center; margin-top: 15px; margin-bottom: 10px"><small>Все материалы, размещенные на сайте являются собственностью компании "Центр технического оборудования" и защищены законом. Перепечатка, копирование, воспроизведение и распространение в любом объеме информации, размещенной на сайте , возможна только с письменного согласия ООО "Центр технического оборудования"</small></p>
				<p class="text-center mt-2 mb-0" style="text-align: center"><small>Информация на данном интернет-сайте носит исключительно информационный (ознакомительный) характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ. Для получения исчерпывающей информации о стоимости и характеристиках товаров обращайтесь к менеджерам по продажам.</small></p>
			</div>
    </div>
</section>

<!-- кол форма сверху -->
<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" id="form_12" class="sform" onsubmit="yaCounter44176079.reachGoal('oknoshapka'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                    <input class="input-text input-modal phone-mask" id="inputf12" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*" required>
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_12"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                    <div class="compliance" style="margin-top:-5%; font-size:9px;"><a href="#openModal3" target="_self" style="color:#D3D3D3;">Нажимая кнопку, вы даете согласие на обработку персональных данных</a></div>
                </div>
                <input type="hidden" name="typsh" value="Автосервисное">
            </form>
        </div>
    </div>
</div>

<div id="openModal_tender" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close"><span></span></a>
                <div class="modal-box">
                    <h4>Примем участие в вашем городе <span id="catalogName"></span></h4>
                    <p class="openModal_tende_desc">Заполните форму, инженер перезвонит вам в течение 17 минут, уточнит детали тендера</p>

                    <form method="post" action="/sender/send.php" id="form_tender" class="sform" onsubmit="yaCounter44176079.reachGoal('cel11'); return true;">
                    <input type="hidden" id="ya-city" value="">
                    <input type="hidden" name="subject" value="Примем участие в вашем городе">
                    <input type="hidden" name="catName" id="cNameId" value="">
                        <div class="wrap-input-name-price">
                            <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="wrap-input-telephone-price">
                            <input class="input-text input-modal phone-mask" id="inputf13"  maxlength="18" type="text" name="phone" placeholder="Ваш телефон" required>
                        </div>
                        <div class="alert_on alert_on_modal" id="phone_bottom_13"></div>
                        <div class="wrapper-button">
                            <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Пригласить не тендер" >
                          <div class="compliance" style="margin-top:-5%; font-size:9px;"><a href="#openModal3" target="_self" style="color:#D3D3D3;">Нажимая кнопку, вы даете согласие на обработку персональных данных</a></div>
                        </div>
                        <input type="hidden" name="typsh" value="Автосервисное">
                    </form>
                </div>
            </div>
        </div>

<!-- Политика -->
<div id="openModal4" class="modalDialog2">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <div class="prokrutka">
                <div class="otstup">
                    <h1>ПОЛИТИКА ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                    <h2>Дата размещения на Сайте «30» июня 2017 года.
                        Настоящая Политика обработки персональных данных (далее – Политика) определяет общие
                        принципы и порядок обработки персональных данных Пользователей онлайн-магазина и меры по
                        обеспечению их безопасности в Центр технического оборудования.</h2>
                    <h1>ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</h1>
                    <h2>Стороны используют следующие термины в указанном ниже значении:</h2></div>
                <h3>a) Данные – иные данные о Пользователе (не входящие в понятие персональных данных).
                    <br>b) Законодательство – действующее законодательство Российской Федерации.
                    Оператор – Центр технического оборудования, самостоятельно или совместно с другими лицами
                    организующее и (или) осуществляющее обработку персональных данных, а также определяющее
                    цели обработки персональных данных, состав персональных данных, подлежащих обработке,
                    действия (операции), совершаемые с персональными данными.
                    <br>c) Персональные данные – любая информация, относящаяся к прямо или косвенно определённому
                    или определяемому физическому лицу (Пользователю).
                    Пользователь – лицо, имеющее доступ к Сайту, посредством сети Интернет и использующее Сайт
                    интернет-магазина.
                    <br>d) Предоставление персональных данных – действия, направленные на раскрытие Персональных
                    данных определённому лицу или определённому кругу лиц.
                    <br>e) Сайт – сайт, расположенный в сети Интернет, где пользователь оставляет персональные данные.
                    <br>f) Субъект персональных данных – Пользователь (физическое лицо), к которому относятся
                    Персональные данные.
                    <br>g) Транспортные компании – третьи лица, оказывающие курьерские услуги.</h3>

                <h2>Иные термины, используемые в Политике трактуются в соответствии с Законодательством РФ.
                    </h2>
                        <h1>1. ОБЩИЕ ПОЛОЖЕНИЯ</h1>
                        <h3>1.1. Настоящая Политика в отношении обработки персональных данных разработана в
                            соответствии с положениями Федерального закона от 27.07.2006 №152-ФЗ «О персональных
                            данных» (с изменениями и дополнениями), другими законодательными и нормативными
                            правовыми актами и определяет порядок работы с Персональными данными Пользователей и
                            (или) передаваемых Пользователями и требования к обеспечению их безопасности.
                            <br>1.2. Мероприятия по обеспечению безопасности персональных данных являются составной частью
                            деятельности Оператора.</h3>
                        <h1>2. ПРИНЦИПЫ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                        <h2>2.1. Обработка Персональных данных Оператором осуществляется в соответствии со следующими
                            принципами:</h2>
                        <h3>2.1.1. Законность и справедливая основа обработки Персональных данных. Оператор принимает
                            все необходимые меры по выполнению требований Законодательства, не обрабатывает
                            Персональные данные в случаях, когда это не допускается Законодательством, не использует
                            Персональные данные во вред Пользователю.
                            <br>2.1.2. Обработка только тех Персональных данных, которые отвечают заранее объявленным целям
                            их обработки. Соответствие содержания и объёма обрабатываемых Персональных данных
                            заявленным целям обработки. Недопущение обработки Персональных данных, не совместимых с
                            целями сбора Персональных данных, а также избыточных по отношению к заявленным целям их
                            обработки.
                            Оператор обрабатывает Персональные данные исключительно в целях исполнения договорных
                            обязательств перед Пользователем.
                            <br>2.1.3. Обеспечение точности, достаточности и актуальности Персональных данных по отношению
                            к целям обработки Персональных данных. Оператор принимает все разумные меры по поддержке
                            актуальности обрабатываемых Персональных данных, включая, но не ограничиваясь реализацией
                            права каждого Субъекта получать для ознакомления свои Персональные данные и требовать от
                            Оператора их уточнения, блокирования или уничтожения в случае, если Персональные данные
                            являются неполными, устаревшими, неточными, незаконно полученными или не являются
                            необходимыми для заявленных выше целей обработки.
                            <br>2.1.4. Хранение Персональных данных в форме, позволяющей определить Пользователя
                            Персональных данных, не дольше, чем этого требуют цели обработки Персональных данных, если
                            срок хранения Персональных данных не установлен федеральным законодательством, договором,
                            стороной которого или выгодоприобретателем по которому является Пользователь Персональных
                            данных.
                            <br>2.1.5. Недопустимость объединения созданных для несовместимых между собой целей баз данных
                            Информационных систем Персональных данных.</h3>
                        <h1>3. УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                        <h2>3.1. Обработка Персональных данных Оператором допускается в следующих случаях:</h2>
                        <h3>3.1.1. При наличии согласия Пользователя на обработку его Персональных данных. Согласие
                            дается путем акцепта Публичной оферты, размещенной на Сайте или путем оформления Заказа,
                            способами, указанными на Сайте.
                            <br>3.1.2. При передаче Персональных данных Субъекта персональных данных Пользователем при
                            осуществлении заказа на Сайте. Пользователь гарантирует, что предварительно получил от
                            Субъекта персональных данных согласие на передачу данных Оператору.
                            <br>3.1.3. Персональные данные подлежат опубликованию или обязательному раскрытию в
                            соответствии с Законодательством.</h3>
                        <h2>3.2. Оператор не раскрывает третьим лицам и не распространяет Персональные данные без
                            согласия Пользователя, если иное не предусмотрено Законодательством. <br>3.3. Оператор не
                            обрабатывает Персональные данные, относящиеся к специальным категориям и касающиеся
                            расовой и национальной принадлежности, политических взгляд
                            ов, религиозных или философских убеждений, состояния здоровья, интимной жизни Субъекта
                            персональных данных, о членстве Субъекта персональных данных в общественных объединениях,
                            за исключением случаев, прямо предусмотренных Законодательством.
                            <br>3.4. Оператор не осуществляет Трансграничную передачу Персональных данных Пользователей.</h2>
                        <h1>4. СБОР И ОБРАБОТКА ПЕРСОНАЛЬНЫХ ДАННЫХ И ИНЫХ ДАННЫХ</h1>
                        <h2>4.1. Оператор собирает и хранит только те Персональные данные, которые необходимы для
                            предоставления услуг Пользователю для осуществления продажи товаров посредством Сайта. При
                            этом сбор Персональных данных может осуществляться как посредством Сайта, так и в офисе
                            Оператора.
                            <br>4.2. Оператор обрабатывает Персональные данные в следующих целях:</h2>
                        <h3>4.2.1. осуществления деятельности, предусмотренной? Уставом Общества, действующим
                            законодательством РФ;
                            <br>4.2.2. выполнения обязательств Оператора перед Пользователем по продаже товаров, в том числе
                            обработку платежей, доставку товаров.
                            <br>4.2.3. для связи с Пользователями в случае необходимости, в том числе для направления
                            уведомлении?, информации и запросов, связанных с оказанием услуг, а также обработки
                            заявлении?, запросов и заявок Пользователей;
                            <br>4.2.4. для улучшение качества услуг, оказываемых Оператором;
                            <br>4.2.5. для продвижения услуг на рынке путем осуществления прямых контактов с Пользователями;
                            <br>4.2.6. для проведения статистических и иных исследовании? на основе обезличенных
                            персональных данных.</h3>
                        <h2>4.3.В целях, указанных в п. 4.2. Оператор обрабатывает следующие персональные:</h2>
                        <h3>Фамилия, имя и отчество;
                            <br>Адрес электронной почты;
                            <br>Телефон;
                            <br>Данные банковской карты, с которой осуществляется оплата (наименование держателя банковской
                            <br>карты, номер карты, CVV код);
                            <br>IP адрес Пользователя;
                            <br>Тип браузера Пользователя;
                            <br>Адрес доставки товаров.</h3>
                        <h2>4.4. В отношении Персональных данных и иных Данных Пользователя сохраняется их
                            конфиденциальность, кроме случаев, когда указанные данные являются общедоступными.
                            <br>4.5. Оператор имеет право сохранять архивную копию Персональных данных и иных Данных, в
                            том числе после удаления аккаунта Пользователя.
                            <br>4.6. Оператор имеет право передавать Персональные данные и иные Данные Пользователя без
                            согласия Пользователя следующим лицам:</h2>
                        <h3>4.6.1. Государственным органам, в том числе органам дознания и следствия, и органам местного
                            самоуправления по их мотивированному запросу.
                            <br>4.6.2. Партнёрам Оператора c целью выполнения договорных обязательств перед Пользователем.
                            <br>4.6.3. В иных случаях, прямо предусмотренных действующим законодательством РФ.</h3>
                        <h2>4.7. Оператор имеет право передавать Персональные данные и иные Данные третьим лицам, не
                            указанным в п. 4.6 настоящей Политики, в следующих случаях:</h2>
                        <h3>4.7.1. Пользователь выразил свое согласие на такие действия.
                            <br>4.7.2. Передача необходима в рамках использования Пользователем Сайта или продажи товаров
                            Пользователю (в том числе в целях доставки товаров);
                            <br>4.7.3. Передача происходит в рамках продажи или иной передачи бизнеса (полностью или в
                            части), при этом к приобретателю переходят все обязательства по соблюдению условий настоящей
                            Политики.</h3>
                        <h2>4.8. Оператор осуществляет автоматизированную и неавтоматизированную обработки
                            Персональных данных и иных Данных.
                            <br>4.9. Доступ к Информационным системам, содержащим Персональные данные, обеспечивается
                            системой паролей. Пароли устанавливаются уполномоченными сотрудниками Оператора и
                            индивидуально сообщаются работникам Оператора, имеющим доступ к Персональным
                            данным/Данным.
                            <br>4.10. Оператор передает обработанную информацию транспортным (курьерским) компаниям на
                            основании согласия Пользователя (ст. 9 ФЗ «О персональных данных»).
                            <br>4.11. Оператор не несет ответственности за ненадлежащую обработку персональных данных
                            Пользователя, осуществляемую Транспортными компаниями.
                            <br>4.12. При получении Оператором персональных данных запроса, содержащего отзыв субъекта
                            персональных данных согласия на обработку персональных данных, то в течение 30 (тридцати)
                            календарных дней с момента его получения обязан удалить персональные данные.</h2>
                        <h1>5. ИЗМЕНЕНИЕ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                        <h2>5.1. Пользователь может в любой момент изменить (обновить, дополнить) Персональные данные
                            посредством путём направления письменного заявления Оператору.
                            5.2. Пользователь в любой момент имеет право удалить Персональные данные/Данные.</h2>
                        <h1>6. КОНФИДЕНЦИАЛЬНОСТЬ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                        <h2>6.1. Оператор обеспечивает конфиденциальность обрабатываемых им Персональных
                            данных/Данных в порядке, предусмотренном Законодательством. Обеспечение
                            конфиденциальности не требуется в отношении:</h2>
                        <h3>6.1.1. Персональных данных после их обезличивания.
                            <br>6.1.2. Персональных данных, доступ неограниченного круга лиц к которым предоставлен
                            Пользователем либо по его просьбе (далее – Персональные данные, сделанные общедоступными
                            Пользователем).
                            <br>6.1.3. Персональных данных, подлежащих опубликованию или обязательному раскрытию в
                            соответствии с Законодательством.
                            <br>6.1.4. Не является нарушением конфиденциальности Персональных данных предоставление
                            Оператором информации транспортным (курьерским) компаниям и иным третьим лицам,
                            действующим на основании договора с Оператором для исполнения обязательств перед
                            Пользователем.</h3>
                        <h1>7. СОГЛАСИЕ ПОЛЬЗОВАТЕЛЯ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                        <h2>7.1. Пользователь принимает решение о предоставлении своих Персональных данных Оператору и
                            даёт согласие на их обработку свободно, своей волей и в своём интересе. Согласие на обработку
                            Персональных данных должно быть конкретным, информированным и сознательным и
                            предоставляется Пользователем в момент его Регистрации на Сайте Оператора, а также в любой
                            позволяющей подтвердить факт его получения форме, если иное не установлено
                            Законодательством.
                            <br>7.2. Персональные данные лиц, вступивших в договорные обязательства с Оператором,
                            содержащиеся в единых государственных реестрах юридических лиц и индивидуальных
                            предпринимателей, являются открытыми и общедоступными, за исключением сведений о номере,
                            дате выдачи и органе, выдавшем документ, удостоверяющий личность физического лица. Охраны
                            их конфиденциальности и согласия Пользователей на обработку не требуется.
                            <br>7.3. В случае поступления запросов из организаций, не обладающих соответствующими
                            полномочиями, Оператор обязан получить предварительное согласие Пользователя на
                            предоставление его Персональных данных и предупредить лиц, получающих Персональные
                            данные, о том, что эти данные могут быть использованы лишь в целях, для которых они
                            сообщены, а также требовать от этих лиц подтверждения того, что это правило будет (было)
                            соблюдено.</h2>
                        <h1>8. ПРАВА СУБЪЕКТОВ ПЕРСОНАЛЬНЫХ ДАННЫХ</h1>
                        <h2>8.1. Пользователь имеет право на получение информации, касающейся обработки его
                            Персональных данных/Данных. Пользователь вправе требовать от Оператора уточнения его
                            Персональных данных, их блокирования или уничтожения в случае, если Персональные данные
                            являются неполными, устаревшими, неточными, незаконно полученными или не являются
                            необходимыми для заявленной цели обработки, а также принимать предусмотренные законом
                            меры по защите своих прав.
                            <br>8.2. Если Пользователь считает, что Оператор осуществляет обработку его Персональных данных
                            с нарушением требований Законодательства или иным образом нарушает его права и свободы,
                            Пользователь вправе обжаловать действия или бездействие Оператора в уполномоченном органе
                            по защите прав субъектов Персональных данных или в судебном порядке.
                            <br>8.3. Пользователь имеет право на защиту своих прав и законных интересов, в том числе на
                            возмещение убытков и (или) компенсацию морального вреда в судебном порядке.</h2>
                        <h1>9. ПЕРСОНАЛЬНЫЕ ДАННЫЕ ТРЕТЬИХ ЛИЦ, ИСПОЛЬЗУЕМЫЕ ПОЛЬЗОВАТЕЛЯМИ</h1>
                        <h2>9.1. Используя Сайт, Пользователь имеет право заносить данные третьих лиц для заказа товаров.
                            <br>9.2. Пользователь обязуется получить предварительное согласие субъекта Персональных данных
                            на их использование посредством Сайта. Пользователь самостоятельно несет ответственность за
                            отсутствие такого согласия.
                            <br>9.3. Оператор обязуется предпринять необходимые меры для обеспечения сохранности
                            Персональных данных третьих лиц, занесённых Пользователем.</h2>
                        <h1>10. ИНЫЕ ПОЛОЖЕНИЯ</h1>
                        <h2>10.1. К настоящей Политике и отношениям между Пользователем и Оператором, возникающим в
                            связи с применением Политики, подлежит к применению право Российской Федерации.
                            <br>10.2. Все возможные споры подлежат разрешению в соответствии с Законодательством по месту
                            регистрации Оператора.
                            Перед обращением в суд Пользователь должен соблюсти обязательный досудебный порядок и
                            направить Оператору соответствующую претензию в письменном виде. Срок ответа на претензию
                            составляет 30 (тридцать) рабочих дней.
                            <br>10.3. Если по тем или иным причинам одно или несколько положений Политики будут признаны
                            недействительными или не имеющими юридической силы, это не оказывает влияния на
                            действительность или применимость остальных положений Политики конфиденциальности.
                            <br>10.4. Оператор имеет право в любой момент изменять настоящую Политику (полностью или в
                            части) в одностороннем порядке без предварительного согласования с Пользователем. Все
                            изменения вступают в силу на следующий день после размещения на Сайте.
                            <br>10.5. Пользователь обязуется самостоятельно следить за изменениями Политики
                            конфиденциальности путем ознакомления с актуальной редакцией.</h2>
                        <br>
                        <br>
                        <br>

                        <input type="hidden" name="typsh" value="Автосервисное">
                        </form>

            </div>
        </div>
    </div>
</div>


<!-- кол бтн -->
<div id="openModal_call" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close"><span></span></a>
        <div class="modal-box">
            <h4>Оставь имя и телефон<br/>и с тобой свяжется старший менеджер</h4>
            <form method="post" action="/sender/send.php" id="form_20" class="sform" onsubmit="yaCounter44176079.reachGoal('oknopodval'); return true;">
                <input type="hidden" id="ya-city" value="">
                <input type="hidden" name="subject" value="Footer Оставьте имя и телефон и с вами свяжется старший менеджер">
                <div class="wrap-input-name-price">
                    <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
                </div>
                <div class="wrap-input-telephone-price">
                </div>
                <div class="alert_on alert_on_modal" id="phone_bottom_20"></div>
                <div class="wrapper-button">
                    <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Перезвонить мне">
                    <div class="compliance" style="margin-top:-5%; font-size:9px;"><a href="#openModal3" target="_self" style="color:#D3D3D3;">Нажимая кнопку, вы даете согласие на обработку персональных данных</a></div>
                </div>
                <input type="hidden" name="typsh" value="Автосервисное">
            </form>
        </div>
    </div>
</div>


<!-- Город -->
<div id="openMenu" class="modalDialog">
    <div>
        <div class="header-region-map">
            <img src="img/rus-map.png" width="766" alt="">
        </div>
        <div id="header-regions" class="row">
            <a href="#close" title="Close" class="close"><span></span></a>
            <div class="header-section">
                <div class="region-heading">
                    <h2>Выбери свой город <span>доставляем по всей россии</span></h2>
                    <div class="header-map-section">
                        <div class="header-primary-cities">
                            <form id="city-from" action="" method="get">
                                <ul class="regionCol">
                                    <li><a href="" class="regionCity">Москва</a></li>
                                    <li><a href="" class="regionCity">Нижний Новгород</a></li>
                                    <li><a href="" class="regionCity">Воронеж</a></li>
                                    <li><a href="" class="regionCity">Омск</a></li>
                                    <li><a href="" class="regionCity">Самара</a></li>
                                </ul>
                                <ul class="regionCol">
                                    <li><a href="" class="regionCity">Санкт-Петербург</a></li>
                                    <li><a href="" class="regionCity">Екатеринбург</a></li>
                                    <li><a href="" class="regionCity">Красноярск</a></li>
                                    <li><a href="" class="regionCity">Пермь</a></li>
                                    <li><a href="" class="regionCity">Уфа</a></li>
                                </ul>
                                <ul class="regionCol regionCol-last">
                                    <li><a href="" class="regionCity">Казань</a></li>
                                    <li><a href="" class="regionCity">Волгоград</a></li>
                                    <li><a href="" class="regionCity">Новосибирск</a></li>
                                    <li><a href="" class="regionCity">Ростов-на-Дону</a></li>
                                    <li><a href="" class="regionCity">Челябинск</a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-search-section">
            <p>или укажи в поле</p>
            <form id="region-selection-form" action="" method="get" novalidate>
                <input id="search-city" type="text">
                <input id="region-selection-form-city-input-btn" name="city-search-from" value="Выбрать" class="form-button btn-color-2 search-city-submit" type="submit">
            </form>
        </div>
    </div>
</div>


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
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU" type="text/javascript"></script>


<script src="/sender/js/sender.js?rnd=<?= uniqid() ?>"></script>
<!--<script src="/js/leads.catcher.js" async></script>-->
<!--<script src="/quiz/quiz.js?rnd=<?= uniqid() ?>"></script>-->


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
<script src="js/interview.js"></script>
<script src="js/interviewThank.js"></script>


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
<!-- Кнопка вверх -->
<a style="display:scroll;position:fixed;bottom:15px;right:15px;" href="#" title="Вверх">
    <img border="0" alt="Back to TOP" src="img/arrow-point-to-close.png"  /></a>
<!-- Кнопка вверх -->
<script>
    (function(w, d, u, i, o, s, p) {
        if (d.getElementById(i)) { return; } w['MangoObject'] = o;
        w[o] = w[o] || function() { (w[o].q = w[o].q || []).push(arguments) }; w[o].u = u; w[o].t = 1 * new Date();
        s = d.createElement('script'); s.async = 1; s.id = i; s.src = u;
        p = d.getElementsByTagName('script')[0]; p.parentNode.insertBefore(s, p);
    }(window, document, '//widgets.mango-office.ru/widgets/mango.js', 'mango-js', 'mgo'));
    mgo({calltracking: {id: 24356, elements: [{"selector":".mgo-number"}]}});
</script>
<script src="js/social-goal.js"></script>

</body>
</html>
