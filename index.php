<?php

include('./utm.php');

$uagent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $uagent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($uagent, 0, 4))) {
  $turbo_url = "https:///автосервисное.оборудование5.рф/turbo-page.php";
  $get_params = $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '';
  header('location: ' . $turbo_url . $get_params);
}

$campagns_arr = array(
  '20881940' => 0
, '20882365' => 0
, '20882431' => 0
, '20896260' => 0
, '20896681' => 0
, '21528108' => 0
, '21528136' => 0
, '21528161' => 0
, '20875546' => 1
, '20875571' => 1
, '20896240' => 1
, '20896668' => 1
, '20876000' => 2
, '20896241' => 2
, '20896670' => 2
, '20876238' => 3
, '20896242' => 3
, '20896671' => 3
, '20876564' => 4
, '20876598' => 4
, '20896243' => 4
, '20896672' => 4
, '20877858' => 5
, '20877885' => 5
, '20896246' => 5
, '20896675' => 5
, '20878869' => 6
, '20896252' => 6
, '20896677' => 6
, '20880199' => 7
, '20880492' => 7
, '20896255' => 7
, '20896680' => 7
, '20883820' => 8
, '20883876' => 8
, '20883933' => 8
, '20896272' => 8
, '20896685' => 8
, '21014374' => 8
, '21370467' => 8
, '21370533' => 8
, '21370619' => 8
, '20884736' => 9
, '20884790' => 9
, '20884855' => 9
, '20896279' => 9
, '20896691' => 9
, '21303815' => 9
, '21303891' => 9
, '21303944' => 9
, '20884943' => 10
, '20896299' => 10
, '20896697' => 10
, '21240170' => 10
, '21240254' => 10
, '20885036' => 11
, '20885139' => 11
, '20896305' => 11
, '20896703' => 11
, '21182876' => 11
, '21182905' => 11
, '21182928' => 11
, '20895136' => 12
, '20895138' => 12
, '20895140' => 12
, '20896288' => 12
, '20896693' => 12
, '21251163' => 12
, '21251231' => 12
, '21251302' => 12
, '21251363' => 12
, '20895143' => 13
, '20895144' => 13
, '20896265' => 14
, '20896684' => 14
, '21503551' => 14
, '21503568' => 14
, '21503584' => 14
, '21503602' => 14
, '21503618' => 14
, '20862880' => 15
, '20862985' => 15
, '20863075' => 15
, '20863158' => 15
, '20863249' => 15
);

$brands_arr = array(
  array(  /* NORDBERG */
    'title' => 'NORDBERG'
  , 'brandSmallImg' => 'img/nordberg_br.jpg'
  , 'brandBigImg' => 'img/nordberg.jpg'
  , 'brandName' => "NORDBERG")
, array(  /* BEISSBARTH */
    'title' => 'BEISSBARTH'
  , 'brandSmallImg' => 'img/Beissbarth_logo.png'
  , 'brandBigImg' => 'img/BEISSBARTH.jpg'
  , 'brandName' => "BEISSBARTH")
, array(  /* BUTLER */
    'title' => 'BUTLER'
  , 'brandSmallImg' => 'img/Butler-Engineering.jpg'
  , 'brandBigImg' => 'img/BUTLER.jpg'
  , 'brandName' => "BUTLER")
, array(  /* GIULIANO */
    'title' => 'GIULIANO'
  , 'brandSmallImg' => 'img/GIULIANO_brand.jpg'
  , 'brandBigImg' => 'img/GIULIANO.jpg'
  , 'brandName' => "GIULIANO")
, array(  /* HOFMANN */
    'title' => 'text5'
  , 'brandSmallImg' => 'img/HOFMANN-brend.jpg'
  , 'brandBigImg' => 'img/HOFMANN.jpg'
  , 'brandName' => "HOFMANN")
, array(  /* HUNTER */
    'title' => 'HUNTER'
  , 'brandSmallImg' => 'img/HUNTER-brend.jpg'
  , 'brandBigImg' => 'img/HUNTER.jpg'
  , 'brandName' => "HUNTER")
, array(  /* JOHNBEAN */
    'title' => 'JOHNBEAN'
  , 'brandSmallImg' => 'img/John_Bean_Logo.jpg'
  , 'brandBigImg' => 'img/JohnBean.jpg'
  , 'brandName' => "JOHNBEAN")
, array(  /* MB */
    'title' => 'MB'
  , 'brandSmallImg' => 'img/MB-brend.jpg'
  , 'brandBigImg' => 'img/MB.jpg'
  , 'brandName' => "MB")
, array(  /*   SICAM */
    'title' => 'SICAM'
  , 'brandSmallImg' => 'img/SICAM-brand.jpg'
  , 'brandBigImg' => 'img/SICAM.jpg'
  , 'brandName' => "SICAM")
, array(  /*   SICE */
    'title' => 'SICE'
  , 'brandSmallImg' => 'img/logo-sice.jpg'
  , 'brandBigImg' => 'img/SICE.jpg'
  , 'brandName' => "SICE")
, array(  /*   TECO */
    'title' => 'TECO'
  , 'brandSmallImg' => 'img/TECO-brand.png'
  , 'brandBigImg' => 'img/TECO.jpg'
  , 'brandName' => "TECO")
, array(  /*     TROMMELBERG */
    'title' => 'TROMMELBERG'
  , 'brandSmallImg' => 'img/Vector-Smart Object.png'
  , 'brandBigImg' => 'Trommelberg_1810E.png'
  , 'brandName' => "TROMMELBERG")
, array(  /*     SIVIK */
    'title' => 'SIVIK'
  , 'brandSmallImg' => 'img/SIVIK-brand.jpg'
  , 'brandBigImg' => 'img/SIVIK.jpg'
  , 'brandName' => "SIVIK")
, array(  /*     AET */
    'title' => 'AET'
  , 'brandSmallImg' => 'img/ae-and-t-brand.jpg'
  , 'brandBigImg' => 'img/ae-and-t.jpg'
  , 'brandName' => "AET")
, array(  /*     RAVAGLIOLI */
    'title' => 'RAVAGLIOLI'
  , 'brandSmallImg' => 'img/ravaglioli-brand.jpg'
  , 'brandBigImg' => 'img/RAVAGLIOLI.jpg'
  , 'brandName' => "RAVAGLIOLI")
, array(  /*      AEandT */
    'title' => 'AE&amp;T"'
  , 'brandSmallImg' => 'img/ae-and-t-brand.jpg'
  , 'brandBigImg' => 'img/ae-and-t.jpg'
  , 'brandName' => "AE&amp;T")
, array(  /* def */
    'title' => ' '
  , 'brandSmallImg' => ' '
  , 'brandBigImg' => 'img/tree.jpg'
  , 'brandName' => " "
  , 'displaynone' => "&nbsp;none")
);

if (isset($_GET['utm_source'])) {
  if ($_GET['utm_source'] == 'yandex') {
    if (isset($_GET["utm_campaign"]) and isset($campagns_arr[$_GET["utm_campaign"]])) {
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
  <meta name="yandex-verification" content="b9ca3579ec9b1487"/>
  <meta charset="utf-8"/>
  <title>Центр Технического Оборудования <?php echo $brands_arr[$brand_id]["Title"]; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description"
        content="Оборудование для шиномонтажа, шиномонтажные станки, балансировочные станки, шиномонтажные полуавтоматы, балансировочные полуавтоматы, шиномонтажные стенды, балансировочные стенды. Легковые шиномонтажные станки, грузовые шиномонтажные станки.">
  <meta name="Keywords"
        content="Оборудование для шиномонтажа, шиномонтажные станки, балансировочные станки, шиномонтажные полуавтоматы, балансировочные полуавтоматы, шиномонтажные стенды, балансировочные стенды. Легковые шиномонтажные станки, грузовые шиномонтажные станки">
  <link rel="shortcut icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/fonts.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/media.css"/>

  <!--[if IE 9]>
  <link href="css/ie9.css" type="text/css" rel="stylesheet"/>
  <![endif]-->

  <!-- Dquiz -->
  <link rel="stylesheet" href="dquiz/dquiz.min.css"/>
  <style>
		.dquiz-is-locked .callbackkiller,
		.dquiz-is-locked .ws-chat .ws-chat-btn-el-container {
			z-index: -1 !important;
		}
  </style>
  <!-- Pixel -->
  <script type="text/javascript">
    !function () {
      var t = document.createElement("script");
      t.type = "text/javascript";
      t.async = !0;
      t.src = 'https://vk.com/js/api/openapi.js?169';
      t.onload = function () {
        VK.Retargeting.Init("VK-RTRG-1430706-6UU2B");
        VK.Retargeting.Hit();
      };
      document.head.appendChild(t)
    }();
  </script>
  <!-- Pixel -->

  <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
  <script type="text/javascript"
          src="https://cdn.envybox.io/widget/cbk.js?wcb_code=b69e372ba309bc8faf81bca86a8241e9"
          charset="UTF-8"
          async>
  </script>
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

<div class="wrap-top-menu">
  <div class="container no-padding">
    <div class="row">
      <div class="col-md-12 section-title delivery-title">
        <h2>
          Доставим <span>автосервисное и шиномонтажное</span>
          <br>
          <span>оборудование</span> в ваш город по лучшей цене
        </h2>
      </div>
    </div>
    <div class="container" style="padding-top: 30px; padding-bottom: 50px">
      <?php include './dquiz/dquiz.php' ?>
    </div>
    <h2 class="title">
      Укомплектуем <span class="danger">любой шиномонтаж и автосервис</span>
      <br>
      под ключ на лучших условиях
    </h2>
    <div class="container equipment-container">
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Шиномонтажное&nbsp;оборудование")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-1.jpg" alt="">
          </div>
          <p>Шиномонтажное балансировочное<br/>оборудование<br/>от 97 749 р.</p>
        </a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Гидравлическое&nbsp;оборудование")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-2.jpg" alt="">
          </div>
          <p>Гидравлическое<br/>оборудование<br/>от 180 000 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Гаражное&nbsp;оборудование")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-3.jpg" alt="">
          </div>
          <p>Гаражное<br/>оборудование<br/>от 14 152 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Диагностическое&nbsp;оборудование")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-4.jpg" alt="">
          </div>
          <p>Диагностическое<br/>оборудование<br/>от 48 000 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("для&nbsp;кузовного&nbsp;ремонта")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-5.jpg" alt="">
          </div>
          <p>Для кузовного<br/>ремонта<br/>от 148 000 р.</p>
        </a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Покрасочные&nbsp;камеры")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-6.jpg" alt="">
          </div>
          <p>Покрасочные<br/>камеры<br/>от 1 500 000 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Инструмент&nbsp;и&nbsp;мебель")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-7.jpg" alt="">
          </div>
          <p>Инструмент<br/>и мебель<br/>от 5 197 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Стенды&nbsp;развал-схождения")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-8.jpg" alt="">
          </div>
          <p>Стенды<br/>&quot;развал-схождения&quot;<br/>от 450 000 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Компрессоры")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-9.jpg" alt="">
          </div>
          <p>Компрессоры<br/>от 45 000 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Грузовое&nbsp;оборудование")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-10.jpg" alt="">
          </div>
          <p>Грузовое<br/>оборудование<br/>от 420 000 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Сварочное&nbsp;оборудование")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-11.jpg" alt="">
          </div>
          <p>Сварочное<br/>оборудование<br/>от 50 200 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Моечное&nbsp;оборудование")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-12.jpg" alt="">
          </div>
          <p>Моечное<br/>оборудование<br/>от 6 560 р.</p></a>
      </div>
      <div class='equipment-container__element'>
        <a href="#openModal_2" onClick=CatNameChanger2("на&nbsp;Электростанции")>
          <div class="img-netflix img-netflix_1x1 img-netflix_contain">
            <img src="img/equipment-13.jpg" alt="">
          </div>
          <p>Электростанции<br/>от 31 724 р.</p></a>
      </div>
    </div>
  </div>
</div>

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
              <p class="sets__old-price">216 923 руб.</p>
              <p class="sets__price">199 856 руб.</p>
            </div>
          </div>
          <a class="sets__button" href="#openModal_call">Купить комплект</a>
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
              <p class="sets__old-price">252 947 руб.</p>
              <p class="sets__price">224 665 руб.</p>
            </div>
          </div>
          <a class="sets__button" href="#openModal_call">Купить комплект</a>
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
              <p class="sets__old-price">375 381 руб.</p>
              <p class="sets__price">356 780 руб.</p>
            </div>
          </div>
          <a class="sets__button" href="#openModal_call">Купить комплект</a>
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
              <p class="sets__old-price">589 940 руб.</p>
              <p class="sets__price">577 253 руб.</p>
            </div>
          </div>
          <a class="sets__button" href="#openModal_call">Купить комплект</a>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
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
          <a class="sets__button" href="#openModal_call">Купить комплект</a>
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
          <a class="sets__button" href="#openModal_call">Купить комплект</a>
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
          <a class="sets__button" href="#openModal_call">Купить комплект</a>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</section>

<div class="wrap-manager-section">
  <div class="container">
    <div class="row">
      <div class="section-title section-title-manager">
        <h2>
          10 минут консультации <span>персонального менеджера</span>
          <br>
          сэкономит время и деньги на подборе оборудования
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="manager-section__swiper-container">
        <div class="swiper manager-section__swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="img/managers/danil-skurdanov.jpg" alt="">
              <p>Данил Скурданов</p>
            </div>
            <div class="swiper-slide">
              <img src="img/managers/anna-marasanova.jpg" alt="">
              <p>Анна Марасанова</p>
            </div>
            <div class="swiper-slide">
              <img src="img/managers/ksenia-samoilova.jpg" alt="">
              <p>Ксения Самойлова</p>
            </div>
          </div>
          <div class="manager-section__manager-name"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="wrap-form-call manager-section__callback-form">
          <div>
            <p>позвони<br/><i class="fa fa-phone fa-1x"></i><span class="mgo-number-15791"> 8 800 550 5724</span></p>
            <h4>или оставь заявку<br/><span>на звонок</span></h4>
            <form method="post" action="/sender/send.php" id="form_9" class="sform">
              <input type="hidden" name="subject" value="Заявка на звонок">
              <div class="wrap-input-name-call">
                <input class="input-text input-name input-call" type="text" name="name" placeholder="Имя">
              </div>
              <div class="wrap-input-telephone-call">
                <input class="input-text input-phone input-call phone-mask" id="inputf9" maxlength="18" type="text"
                       name="phone" placeholder="Телефон*" required>
              </div>
              <div class="alert_on alert_on_bg_white" id="phone_bottom_9"></div>
              <div class="wrap-form-btn-call">
                <input class="form-button form-1-btn btn-color-2 btn-call" type="submit" name="call"
                       value="перезвонить">
              </div>
              <div class="compliance" style="font-size:9px; font-weight:300;">
                <br>
                <a href="#openModal3" target="_self" style="color:#D3D3D3; text-decoration: underline;">
                  Нажимая кнопку, вы даете согласие на обработку персональных данных</a>
              </div>
              <input type="hidden" name="typsh" value="Покрасочное">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" id="reviews">
  <div class="row">
    <div class="col-md-12 section-title section-title-map">
      <h2>задайте вопросы нашим клиентам<br/><span>в своём городе</span> о скорости поставки<br/>и качестве оборудования
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12 map-box-1-wp">
      <div class="map-box map-box-1">
        <p><span>1</span>Выберите свой город</p>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 map-box-1-wp">
      <div class="map-box map-box-2">
        <p><span>2</span>Позвоните реальному клиенту,<br/>купившему оборудование</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6 map-text">
      <p><span>538</span><br/>Городов поставок<br/>за 2022 г.</p>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 map-text">
      <p><span>186</span><br/>Открыто новых шиномонтажей<br/>за 2022 г.</p>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 map-text">
      <p><span>451</span><br/>Доукомплектовано автосервисов<br/>в 2022 г.</p>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 map-text">
      <p><span>3327</span><br/>Единиц оборудования в ассортименте</p>
    </div>
  </div>
  <div class="row ">
    <div class="map-container">
      <div id="map">
        <script
              type="text/javascript"
              charset="utf-8"
              async
              src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=KT5Sw3h8-UvqmBxA1pQ-B3Bo0Vy47Ooc&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false">
        </script>
      </div>
    </div>
  </div>
</div>

<div class="wrap-contract">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="contract">
          <img src="img/contract.png" alt="">
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="contract-text">
          <p>Отгружаем оборудование <br/>по официальному<br/> договору поставки</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="wrap-section-price">
  <div class="container">
    <div class="row">
      <div class="wrap-form-credit">
        <form method="post" action="/sender/send.php" class="sform" id="form_10">
          <h4>хочешь купить в лизинг?<br/></h4>
          <p>Сделаем расчет и <span>отправим предложение</span></p>
          <input type="hidden" name="subject" value="Отправьте заявку на расчёт суммы кредита">
          <div class="wrap-input-name-credit">
            <input class="input-text input-name-crd input-price input-credit" type="text" name="name" placeholder="Имя">
          </div>
          <div class="wrap-input-telephone-credit">
            <input class="input-text input-phone-crd input-price input-credit phone-mask" id="inputf10" maxlength="18"
                   type="text" name="phone" placeholder="Телефон*" required>
          </div>
          <div class="wrap-form-btn-credit">
            <input class="form-button form-1-btn btn-credit" type="submit" name="price" value="Купить в кредит">
          </div>
          <div class="alert_on" id="phone_bottom_10"></div>
          <input type="hidden" name="typsh" value="Покрасочное">
          <div class="compliance" style="font-size:9px; font-weight:300; text-transform:none;">
            <a href="#openModal3" target="_self" style="color:#D3D3D3; text-decoration: underline;">
              Нажимая кнопку, вы даете согласие на обработку персональных данных
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container section-leasing" style="text-align:center;">
  <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12 footer-info">
      <p>Партнеры по кредитованию:
      <div class="row brands">
        <div class="brands__img">
          <img src="img/leasing-companies/bank1.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/bank2.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/bank7.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/bank4.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/bank5.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/bank6.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/bank8.png" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 footer-info">
      <p>Партнеры по лизингу:</p>
      <div class="row brands">
        <div class="brands__img">
          <img src="img/leasing-companies/liz1.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/liz2.png" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/liz3.png" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/liz4.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/liz5.jpg" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/liz6.png" alt="">
        </div>
        <div class="brands__img">
          <img src="img/leasing-companies/bank8.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6 footer-info">
        <p>Центр технического оборудования<br/><span>Подбор и продажа автосервисного оборудования<br/>с доставкой по всей России</span>
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

    <div style="text-align:center;"><a href="#openModal4" target="_self" style="color:black; font-size:14px;">Политика
        конфиденциальности</a></div>
    <div style="color: #323232; font-size: 14px; line-height: 1.1">
      <p class="text-center" style="text-align: center; margin-top: 15px; margin-bottom: 10px"><small>Все материалы,
          размещенные на сайте являются собственностью компании "Центр технического оборудования" и защищены законом.
          Перепечатка, копирование, воспроизведение и распространение в любом объеме информации, размещенной на сайте ,
          возможна только с письменного согласия ООО "Центр технического оборудования"</small></p>
      <p class="text-center mt-2 mb-0" style="text-align: center"><small>Информация на данном интернет-сайте носит
          исключительно информационный (ознакомительный) характер и ни при каких условиях не является публичной офертой,
          определяемой положениями Статьи 437 Гражданского кодекса РФ. Для получения исчерпывающей информации о
          стоимости и характеристиках товаров обращайтесь к менеджерам по продажам.</small></p>
    </div>
  </div>
</section>


<div id="modalSocial" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close"><span></span></a>
    <div class="modal-box">
      <h4>Подпишитесь на нас в соцсетях, чтобы узнать больше о том, как подобрать автосервисное оборудование.</h4>
      <div class="soc-btns soc-btns_circle">
        <a href="https://vk.com/centr_to" target="_blank" class="soc-btns__link soc-btns__link_vk">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
               x="0px" y="0px" width="60px" height="60px" viewBox="0 0 532.337 532.337"
               style="enable-background:new 0 0 532.337 532.337;" xml:space="preserve"> <g>
              <g>
                <path d="M471.998,241.286c7.57-9.786,13.58-17.638,18.018-23.562c31.965-42.498,45.82-69.646,41.574-81.482l-1.666-2.772 c-1.107-1.665-3.977-3.194-8.592-4.578c-4.621-1.383-10.533-1.604-17.736-0.691l-79.822,0.563 c-1.848-0.184-3.697-0.141-5.545,0.128c-1.848,0.281-3.047,0.563-3.605,0.832c-0.557,0.282-1.016,0.508-1.383,0.692l-1.107,0.832 c-0.924,0.551-1.939,1.524-3.047,2.914c-1.109,1.389-2.039,2.999-2.773,4.853c-8.684,22.356-18.568,43.146-29.656,62.363 c-6.838,11.457-13.123,21.396-18.844,29.792c-5.729,8.415-10.533,14.603-14.414,18.568c-3.879,3.972-7.393,7.166-10.531,9.56 c-3.146,2.411-5.545,3.421-7.203,3.054c-1.666-0.367-3.238-0.734-4.713-1.114c-2.588-1.658-4.67-3.917-6.236-6.787 c-1.572-2.857-2.631-6.463-3.189-10.808c-0.551-4.339-0.881-8.084-0.967-11.23c-0.098-3.139-0.049-7.57,0.141-13.305 c0.184-5.729,0.275-9.602,0.275-11.64c0-7.014,0.141-14.639,0.418-22.864c0.275-8.219,0.508-14.737,0.691-19.542 c0.184-4.798,0.275-9.884,0.275-15.245c0-5.349-0.324-9.56-0.975-12.613c-0.648-3.042-1.621-5.998-2.906-8.868 c-1.297-2.858-3.189-5.08-5.686-6.646c-2.496-1.573-5.588-2.815-9.283-3.746c-9.799-2.222-22.271-3.409-37.418-3.604 c-34.37-0.355-56.451,1.86-66.243,6.658c-3.88,2.038-7.393,4.804-10.532,8.317c-3.329,4.07-3.788,6.291-1.383,6.646 c11.089,1.665,18.936,5.643,23.556,11.922l1.665,3.323c1.291,2.411,2.583,6.659,3.88,12.754c1.292,6.096,2.124,12.84,2.497,20.233 c0.924,13.488,0.924,25.031,0,34.646c-0.924,9.614-1.799,17.093-2.631,22.442c-0.833,5.361-2.081,9.7-3.74,13.023 c-1.665,3.335-2.772,5.367-3.329,6.107c-0.557,0.734-1.016,1.199-1.383,1.384c-2.405,0.918-4.896,1.383-7.484,1.383 c-2.589,0-5.729-1.298-9.425-3.887c-3.697-2.576-7.534-6.138-11.5-10.667c-3.978-4.522-8.452-10.856-13.446-18.99 c-4.988-8.121-10.166-17.736-15.521-28.819l-4.431-8.042c-2.772-5.165-6.561-12.699-11.365-22.583s-9.058-19.443-12.748-28.69 c-1.481-3.874-3.697-6.83-6.652-8.868l-1.383-0.832c-0.924-0.735-2.405-1.524-4.437-2.351c-2.038-0.832-4.155-1.432-6.377-1.805 l-75.943,0.551c-7.76,0-13.023,1.763-15.795,5.275l-1.108,1.659C0.275,136.059,0,137.54,0,139.566 c0,2.038,0.557,4.529,1.665,7.479c11.089,26.059,23.146,51.188,36.169,75.386c13.03,24.211,24.346,43.709,33.954,58.489 c9.608,14.792,19.4,28.733,29.382,41.854c9.982,13.121,16.585,21.523,19.816,25.214c3.231,3.703,5.771,6.476,7.62,8.317 l6.928,6.658c4.431,4.432,10.949,9.743,19.542,15.937c8.592,6.193,18.103,12.289,28.55,18.287 c10.435,6.01,22.589,10.899,36.444,14.694c13.856,3.794,27.344,5.317,40.465,4.571h31.874c6.469-0.551,11.363-2.576,14.688-6.096 l1.107-1.383c0.734-1.102,1.432-2.815,2.08-5.123c0.643-2.307,0.975-4.853,0.975-7.619c-0.191-7.943,0.416-15.116,1.799-21.481 c1.383-6.377,2.955-11.175,4.713-14.418c1.756-3.226,3.738-5.955,5.959-8.177c2.217-2.222,3.783-3.55,4.713-4.015 c0.924-0.453,1.666-0.777,2.217-0.973c4.43-1.476,9.65-0.043,15.66,4.296c6.004,4.352,11.641,9.7,16.91,16.077 c5.262,6.377,11.59,13.531,18.984,21.481c7.387,7.943,13.855,13.855,19.4,17.735l5.545,3.336 c3.695,2.209,8.494,4.241,14.412,6.096c5.912,1.842,11.09,2.307,15.52,1.383l70.955-1.114c7.02,0,12.473-1.15,16.354-3.464 c3.879-2.295,6.188-4.853,6.928-7.619c0.734-2.772,0.783-5.899,0.141-9.419c-0.648-3.507-1.297-5.955-1.939-7.338 c-0.648-1.383-1.25-2.546-1.807-3.464c-9.24-16.628-26.885-37.051-52.938-61.255l-0.557-0.551l-0.275-0.281l-0.275-0.27H473.4 c-11.83-11.273-19.309-18.85-22.449-22.736c-5.727-7.38-7.025-14.865-3.879-22.441 C449.275,271.874,457.586,259.769,471.998,241.286z"/>
              </g>
            </g> </svg>
        </a>
        <a href="https://ok.ru/group/62869172715707" target="_blank" class="soc-btns__link soc-btns__link_ok">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.008 512.008"
               style="enable-background:new 0 0 512.008 512.008" xml:space="preserve"><path
                  d="M256.002 0c-70.592 0-128 57.408-128 128s57.408 128 128 128 128-57.408 128-128-57.408-128-128-128zm0 192c-35.296 0-64-28.704-64-64s28.704-64 64-64 64 28.704 64 64-28.704 64-64 64z"/>
            <path d="M425.73 252.448c-12.512-12.512-32.736-12.512-45.248 0-68.608 68.608-180.288 68.608-248.928 0-12.512-12.512-32.736-12.512-45.248 0s-12.512 32.736 0 45.28c39.808 39.808 90.272 62.496 142.304 68.416l-91.232 91.232c-12.512 12.512-12.512 32.736 0 45.248s32.736 12.512 45.248 0l73.376-73.376 73.376 73.376A31.912 31.912 0 0 0 352.002 512a31.912 31.912 0 0 0 22.624-9.376c12.512-12.512 12.512-32.736 0-45.248l-91.232-91.232c52.032-5.92 102.496-28.608 142.304-68.416 12.512-12.512 12.512-32.768.032-45.28z"/></svg>
        </a>
      </div>
    </div>
  </div>
</div>
<a href="#modalSocial" class="button form-button callback-btn" onclick="" style="display: none">заказать обратный
  звонок</a>

<div id="openModal" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close"><span></span></a>
    <div class="modal-box">
      <h4>Оставьте контактные данные, чтобы<br/>наш специалист помог вам выбрать оборудование</h4>
      <form method="post" action="/sender/send.php" id="form_12" class="sform">
        <input type="hidden" id="ya-city" value="">
        <input type="hidden" name="subject" value="Оставьте имя и телефон и с вами свяжется старший менеджер">
        <div class="wrap-input-name-price">
          <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="wrap-input-telephone-price">
          <input class="input-text input-modal phone-mask" id="inputf12" maxlength="18" type="text" name="phone"
                 placeholder="Ваш телефон*" required>
        </div>
        <div class="alert_on alert_on_modal" id="phone_bottom_12"></div>
        <div class="wrapper-button">
          <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit"
                 value="Перезвонить мне">
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
      <p class="openModal_tende_desc">Заполните форму, инженер перезвонит вам в течение 17 минут, уточнит детали
        тендера</p>

      <form method="post" action="/sender/send.php" id="form_tender" class="sform">
        <input type="hidden" id="ya-city" value="">
        <input type="hidden" name="subject" value="Примем участие в вашем городе">
        <input type="hidden" name="catName" id="cNameId" value="">
        <div class="wrap-input-name-price">
          <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="wrap-input-telephone-price">
          <input class="input-text input-modal phone-mask" id="inputf13" maxlength="18" type="text" name="phone"
                 placeholder="Ваш телефон" required>
        </div>
        <div class="alert_on alert_on_modal" id="phone_bottom_13"></div>
        <div class="wrapper-button">
          <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit"
                 value="Пригласить не тендер">
          <div class="compliance" style="margin-top:-5%; font-size:9px;">
            <a href="#openModal3" target="_self" style="color:#D3D3D3;">
              Нажимая кнопку, вы даете согласие на обработку персональных данных
            </a>
          </div>
        </div>
        <input type="hidden" name="typsh" value="Автосервисное">
      </form>
    </div>
  </div>
</div>

<div id="openModal_call" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close"><span></span></a>
    <div class="modal-box">
      <h4>Оставь контактные данные, чтобы<br/>наш специалист помог вам выбрать оборудование</h4>
      <form method="post" action="/sender/send.php" id="form_20" class="sform">
        <input type="hidden" id="ya-city" value="">
        <input type="hidden" name="subject" value="Footer Оставьте имя и телефон и с вами свяжется старший менеджер">
        <div class="wrap-input-name-price">
          <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="wrap-input-telephone-price">
          <input class="input-text input-modal phone-mask" id="inputf20" maxlength="18" type="text" name="phone"
                 placeholder="Ваш телефон*" required>
        </div>
        <div class="alert_on alert_on_modal" id="phone_bottom_20"></div>
        <div class="wrapper-button">
          <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit"
                 value="Перезвонить мне">
          <div class="compliance" style="margin-top:-5%;font-size:9px;"><a href="#openModal3" target="_self"
                                                                           style="color:#D3D3D3;">
              Нажимая кнопку, вы даете согласие на обработку персональных данных
            </a>
          </div>
        </div>
        <input type="hidden" name="typsh" value="Автосервисное">
      </form>
    </div>
  </div>
</div>

<div id="openModal_2" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close"><span></span></a>
    <div class="modal-box">
      <h4>Заполните форму<br/>и получите предложение <span id="catalogName2"></span></h4>
      <form method="post" action="/sender/send.php" id="form_14" class="sform">
        <input type="hidden" id="ya-city" value="">
        <input type="hidden" name="subject" id="cNameId2" value="">
        <div class="wrap-input-name-price">
          <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="wrap-input-telephone-price">
          <input class="input-text input-modal phone-mask" id="inputf14" maxlength="18" type="text" name="phone"
                 placeholder="Ваш телефон" required>
        </div>
        <div class="alert_on alert_on_modal" id="phone_bottom_14"></div>
        <div class="wrapper-button">
          <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit"
                 value="Получить предложение">
        </div>
        <input type="hidden" name="typsh" value="Автосервисное">
      </form>
    </div>
  </div>
</div>

<div id="openModal_call" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close"><span></span></a>
    <div class="modal-box">
      <h4>Оставь контактные данные,<br/>с вами свяжется менеджер</h4>
      <form method="post" action="/sender/send.php" id="form_20" class="sform">
        <input type="hidden" id="ya-city" value="">
        <input type="hidden" name="subject" value="Footer Оставьте имя и телефон и с вами свяжется старший менеджер">
        <div class="wrap-input-name-price">
          <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="wrap-input-telephone-price">
          <input class="input-text input-modal phone-mask" id="inputf20" maxlength="18" type="text" name="phone"
                 placeholder="Ваш телефон*" required>
        </div>
        <div class="alert_on alert_on_modal" id="phone_bottom_20"></div>
        <div class="wrapper-button">
          <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit"
                 value="Перезвонить мне">
        </div>
        <input type="hidden" name="typsh" value="Автосервисное">
      </form>
    </div>
  </div>
</div>


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
        <input id="region-selection-form-city-input-btn" name="city-search-from" value="Выбрать"
               class="form-button btn-color-2 search-city-submit" type="submit">
      </form>
    </div>
  </div>
</div>


<div id="openModal3" class="modalDialog2">
  <div>
    <a href="#close" title="Close" class="close"><span></span></a>
    <div class="modal-box">
      <div class="prokrutka">
        <div class="otstup">
          <h1>Согласие пользователя сайта на обработку персональных данных</h1>
          <br>
          <h2>ФЗ «О персональных данных» от 27.07.2006 N 152-ФЗ регламентирует, что согласие на обработку персональных
            данных может быть дано гражданином или его представителем в любой позволяющей подтвердить факт его
            получения форме, если иное не установлено федеральным законом. В случае, если наличие письменного согласия
            в силу закона не обязательно, гражданин может выразить свое согласие на обработку персональных данных
            любым способом, в частности проставлением отметки в электронном виде.</h2>
          <h2>Действуя свободно, своей волей и в своем интересе, а также подтверждая свою дееспособность, я
            (далее – Пользователь) даю свое согласие ООО «Центр технического оборудования» (далее –
            Компания) (ИНН 4205274440), которое расположено по адресу 650000, г. Кемерово, пр.
            Притомский, д. 7/1, на обработку своих персональных данных, включая страницы, расположенные
            на его поддоменах (далее – Сайт) в соответствии со следующим перечнем:</h2></div>
        <h3>• фамилия, имя, отчество физического лица и/или индивидуального предпринимателя, занимаемая
          должность, адрес электронной почты,<br>контактный телефон, адрес местонахождения;
          <br>• источник
          захода на Сайт и информация поискового или рекламного запроса;
          <br>• данные о пользовательском устройстве (среди которых разрешение, версия и другие атрибуты,
          характеризующие пользовательское устройство);
          <br>• пользовательские клики, просмотры страниц, заполнения полей, показы и просмотры баннеров и
          видео;
          <br>• данные, характеризующие аудиторные сегменты;
          <br>• параметры сессии;
          <br>• данные о времени посещения;
          <br>• информация, хранимая в cookie,
          <br>• IP адрес;
          <br>• другие данные, предоставляемые Пользователем по собственной инициативе.</h3></p>
        <div class="otstup">
          <h2>Для целей повышения осведомленности пользователей Сайта о товарах/работах/услугах
            Компании, предоставления релевантной рекламной информации, оптимизации рекламы, оказания
            информационной поддержки, консультирования, проведения маркетинговых кампаний (в т.ч.
            email-рассылок и SMS- уведомлений о новостях и акциях и т.п.), отправки уведомлений о статусах
            обращений, заявок, заказов, а также в иных случаях использования Сайта пользователями.
            Персональные данные не являются общедоступными. Основанием для обработки персональных
            данных является: ст. 24 Конституции Российской Федерации; ст.6 Федерального закона №152-ФЗ
            «О персональных данных»; Устав ООО «Центр технического оборудования»; настоящее согласие
            на обработку персональных данных. В ходе обработки с персональными данными будут
            совершены следующие действия: сбор; запись; систематизация; накопление; хранение; уточнение
            (обновление, изменение); извлечение; использование; передача (распространение, предоставление,
            доступ); блокирование; удаление; уничтожение. Настоящее согласие действует до дня его отзыва
            Пользователем в письменной форме. Данное согласие может быть отозвано путем направления
            письменного отзыва по месту нахождения Компании по почте или путем направления
            электронного письма на адрес электронной почты 88007753106@mail.ru. В указанном случае
            Компания прекращает обработку и уничтожает персональные данные Пользователя в срок, не
            превышающий 30 (тридцати) календарных дней с даты получения соответствующего отзыва.
            <br></h2>
          <h5><br>Утверждено приказом ООО «Центр технического оборудования»
            №2017/06-1 от 15.06.2017.</h5>
          <br>
          <br>
          <br>

          <input type="hidden" name="typsh" value="Автосервисное">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

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

        <h2>Иные термины, используемые в Политике трактуются в соответствии с Законодательством РФ.</h2>
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

<div id="openModal" class="modalDialog">
  <div>
    <a href="#close" title="Close" class="close"><span></span></a>
    <div class="modal-box">
      <h4>Оставь имя и телефон<br/>и получи каталог <span id="catalogName2"></span></h4>
      <form method="post" action="/sender/send.php" id="form_14" class="sform"
            onsubmit="yaCounter44176079.reachGoal('cel2'); return true;">
        <input type="hidden" id="ya-city" value="">
        <input type="hidden" name="subject" id="cNameId2" value="">
        <div class="wrap-input-name-price">
          <input class="input-text input-modal" type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="wrap-input-telephone-price">
          <input class="input-text input-modal phone-mask" id="inputf14" maxlength="18" type="text" name="phone"
                 placeholder="Ваш телефон" required>
        </div>
        <div class="alert_on alert_on_modal" id="phone_bottom_14"></div>
        <div class="wrapper-button">
          <input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit"
                 value="Получить предложение">
          <div class="compliance" style="margin-top:-5%;font-size:9px;">
            <a href="#openModal3" target="_self" style="color:#D3D3D3;">
              Нажимая кнопку, вы даете согласие на обработку персональных данных
            </a>
          </div>
        </div>
        <input type="hidden" name="typsh" value="Автосервисное">
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

<!-- Dquiz -->
<script src="dquiz/dquiz.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new dQuiz('.dquiz-1', {
      yaMetrika: '44176079'
    });
  })
</script>

<script src="libs/jquery/jquery-2.1.3.min.js"></script>
<script src="/libs/jquery.mask/jquery.mask.js"></script>
<script src="https://cdn.jsdelivr.net/g/bootstrap@3.3.6,jquery.ui@1.11.4"></script>
<script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
<script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU"
        type="text/javascript"></script>
<script src="js/jquery.simslider.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>

<script src="/sender/js/sender.js?rnd=<?= uniqid() ?>"></script>
<!--<script src="/js/leads.catcher.js" async></script>-->

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
<a style="position:fixed;bottom:15px;right:15px;" href="#" title="Вверх">
  <img border="0" alt="Back to TOP" src="img/arrow-point-to-close.png"/></a>

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


<script>
  setTimeout(function () {
    $('a[href="#modalSocial"]')[0].click();
  }, 30000)
</script>
<script src="js/social-goal.js"></script>

</body>
</html>
