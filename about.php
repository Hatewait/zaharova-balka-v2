<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=yes">
  <title>Клубный дом Байрам</title>

  <link rel="stylesheet" type="text/css" href="assets/css/libs/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/libs/graph-modal/graph-modal.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/libs/fancybox/fancybox.css" />

  <link rel="stylesheet" href="assets/css/base.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/reveal.css">

</head>
<?php
require_once __DIR__ . '/includes/header.php';
render_header([
  'classes' => ['header_bg', 'space-md'],
  'active' => 'about',
  'media' => [
    'type' => 'image',
    'src' => 'assets/img/about/intro.jpg'
  ],
  'content' => [
    'title' => 'Клубный дом <span> <span class="heading-lg-accent">«Байрам»</span></span>',
    'subtitle' => 'Дом, созданный историей'
  ]
]);
?>

<body>
  <main class="page-wrapper page-wrapper_mod">
    <div class="container space-md">
      <?php
      require_once __DIR__ . '/includes/breadcrumbs.php';
      render_breadcrumbs([
        ['title' => 'Главная', 'url' => '/index.php'],
        ['title' => 'О нас'],
      ]);
      ?>
    </div>
    <section class="intro">
      <div class="container">
        <p class="intro__text text-center subtitle-xl">
          Клубный дом «Байрам» назван в честь семьи <span class="subtitle-xl-accent color-accent">Байрамкуловых. </span>
          Основатель рода родился у подножия горы Барьям таш в Карачае, откуда и пошло имя «Байрам-кул» — «Раб Божий». В
          нём соединились <span class="subtitle-xl-accent color-accent">история и традиции</span> Карачая и юга России
        </p>
      </div>
    </section>

    <section class="timeline">
      <div class="container">
        <!-- Swiper -->
        <div class="timeline-slider swiper" data-single-slider>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="timeline-slider__content">
                <img class="timeline-slider__img" loading="lazy" src="/assets/img/about/slider/1.jpg"
                  alt="Катание на лошади — горная долина">

                <div class="timeline-slider__description">
                  <div class="timeline-slider__img-next-wrap">
                    <img class="timeline-slider__img-next" src="/assets/img/about/slider/2.jpg" alt="">
                  </div>

                  <div class="timeline-slider__text-block">
                    <p class="subtitle-xl-accent">Начало пути, вписанное в легенду</p>
                    <p class="text-md-regular text-color-secondary">Фамилия Байрамкуловы происходит от Науруза — соратника основателя современного Карачая, Карчи. Супруга Науруза родила сына рядом с каменной статуей Девы Марии (Байрам таш), к которой карачаевские женщины приходили с мольбами о деторождении.</p>
                  </div>

                  <!-- Кнопки -->
                  <div class="timeline-slider__nav swiper-nav">
                    <button class="btn-reset swiper-nav__prev round-button" data-single-prev>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                        <path
                          d="M8.96021 0.292725C9.35075 -0.0974973 9.98384 -0.0976989 10.3743 0.292725C10.7645 0.683163 10.7644 1.3163 10.3743 1.70679L3.0813 8.99976L10.3743 16.2927C10.7645 16.6832 10.7644 17.3163 10.3743 17.7068C9.9838 18.0973 9.35074 18.0971 8.96021 17.7068L0.253174 8.99976L8.96021 0.292725Z"
                          fill="white" />
                      </svg>
                    </button>
                    <button class="btn-reset swiper-nav__next round-button" data-single-next>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                          d="M11.2935 7.29272C11.684 6.90248 12.3171 6.90229 12.7075 7.29272L21.4146 15.9998L12.7075 24.7068C12.317 25.0973 11.684 25.0972 11.2935 24.7068C10.9029 24.3163 10.9029 23.6832 11.2935 23.2927L18.5864 15.9998L11.2935 8.70679C10.9029 8.31626 10.9029 7.68325 11.2935 7.29272Z"
                          fill="white" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="timeline-slider__content">
                <img class="timeline-slider__img" loading="lazy" src="/assets/img/about/slider/2.jpg"
                  alt="Катание на лошади — горная долина">

                <div class="timeline-slider__description">
                  <div class="timeline-slider__img-next-wrap">
                    <img class="timeline-slider__img-next" src="/assets/img/about/slider/3.jpg" alt="">
                  </div>


                  <div class="timeline-slider__text-block">
                    <p class="subtitle-xl-accent">Женское начало, дарующее жизнь</p>
                    <p class="text-md-regular text-color-secondary">«Байрам-Бийче, бай бийче,<br>
                      Мен тилейме сенден сабий»<br>
                      («Богиня Байрам, богатая богиня,<br>
                      Прошу тебя — ребенка даруй»).<br>
                      Эти строки из нартского эпоса отражают веру народа в силу материнства и покровительство богини Байрам.</p>
                  </div>

                  <!-- Кнопки -->
                  <div class="timeline-slider__nav swiper-nav">
                    <button class="btn-reset swiper-nav__prev round-button" data-single-prev>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                        <path
                          d="M8.96021 0.292725C9.35075 -0.0974973 9.98384 -0.0976989 10.3743 0.292725C10.7645 0.683163 10.7644 1.3163 10.3743 1.70679L3.0813 8.99976L10.3743 16.2927C10.7645 16.6832 10.7644 17.3163 10.3743 17.7068C9.9838 18.0973 9.35074 18.0971 8.96021 17.7068L0.253174 8.99976L8.96021 0.292725Z"
                          fill="white" />
                      </svg>
                    </button>
                    <button class="btn-reset swiper-nav__next round-button" data-single-next>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                          d="M11.2935 7.29272C11.684 6.90248 12.3171 6.90229 12.7075 7.29272L21.4146 15.9998L12.7075 24.7068C12.317 25.0973 11.684 25.0972 11.2935 24.7068C10.9029 24.3163 10.9029 23.6832 11.2935 23.2927L18.5864 15.9998L11.2935 8.70679C10.9029 8.31626 10.9029 7.68325 11.2935 7.29272Z"
                          fill="white" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="timeline-slider__content">
                <img class="timeline-slider__img" loading="lazy" src="/assets/img/about/slider/3.jpg"
                  alt="Катание на лошади — горная долина">

                <div class="timeline-slider__description">
                  <div class="timeline-slider__img-next-wrap">
                    <img class="timeline-slider__img-next" src="/assets/img/about/slider/4.jpg" alt="">
                  </div>


                  <div class="timeline-slider__text-block">
                    <p class="subtitle-xl-accent">Имя, данное судьбой</p>
                    <p class="text-md-regular text-color-secondary">Мальчика назвали Байрамкул — «раб божий», «раб Девы Марии». Так появилась фамилия Байрамкуловы — в честь Марьям, Девы Марии, почитаемой как Марьям в семитских и Барьям в тюркских языках. Байрамкуловы стали одним из семи влиятельных родов Карачая.</p>
                  </div>

                  <!-- Кнопки -->
                  <div class="timeline-slider__nav swiper-nav">
                    <button class="btn-reset swiper-nav__prev round-button" data-single-prev>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                        <path
                          d="M8.96021 0.292725C9.35075 -0.0974973 9.98384 -0.0976989 10.3743 0.292725C10.7645 0.683163 10.7644 1.3163 10.3743 1.70679L3.0813 8.99976L10.3743 16.2927C10.7645 16.6832 10.7644 17.3163 10.3743 17.7068C9.9838 18.0973 9.35074 18.0971 8.96021 17.7068L0.253174 8.99976L8.96021 0.292725Z"
                          fill="white" />
                      </svg>
                    </button>
                    <button class="btn-reset swiper-nav__next round-button" data-single-next>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                          d="M11.2935 7.29272C11.684 6.90248 12.3171 6.90229 12.7075 7.29272L21.4146 15.9998L12.7075 24.7068C12.317 25.0973 11.684 25.0972 11.2935 24.7068C10.9029 24.3163 10.9029 23.6832 11.2935 23.2927L18.5864 15.9998L11.2935 8.70679C10.9029 8.31626 10.9029 7.68325 11.2935 7.29272Z"
                          fill="white" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="timeline-slider__content">
                <img class="timeline-slider__img" loading="lazy" src="/assets/img/about/slider/4.jpg"
                     alt="Катание на лошади — горная долина">

                <div class="timeline-slider__description">
                  <div class="timeline-slider__img-next-wrap">
                    <img class="timeline-slider__img-next" src="/assets/img/about/slider/5.jpg" alt="">
                  </div>


                  <div class="timeline-slider__text-block">
                    <p class="subtitle-xl-accent">Дом, рожденный из памяти</p>
                    <p class="text-md-regular text-color-secondary">Клубный дом «Байрам» создан, чтобы познакомить гостей Карачаево-Черкесии с историей и укладом карачаевцев. Это место, где сочетаются природа, традиции и искреннее гостеприимство горцев.</p>
                  </div>

                  <!-- Кнопки -->
                  <div class="timeline-slider__nav swiper-nav">
                    <button class="btn-reset swiper-nav__prev round-button" data-single-prev>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                        <path
                                d="M8.96021 0.292725C9.35075 -0.0974973 9.98384 -0.0976989 10.3743 0.292725C10.7645 0.683163 10.7644 1.3163 10.3743 1.70679L3.0813 8.99976L10.3743 16.2927C10.7645 16.6832 10.7644 17.3163 10.3743 17.7068C9.9838 18.0973 9.35074 18.0971 8.96021 17.7068L0.253174 8.99976L8.96021 0.292725Z"
                                fill="white" />
                      </svg>
                    </button>
                    <button class="btn-reset swiper-nav__next round-button" data-single-next>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                                d="M11.2935 7.29272C11.684 6.90248 12.3171 6.90229 12.7075 7.29272L21.4146 15.9998L12.7075 24.7068C12.317 25.0973 11.684 25.0972 11.2935 24.7068C10.9029 24.3163 10.9029 23.6832 11.2935 23.2927L18.5864 15.9998L11.2935 8.70679C10.9029 8.31626 10.9029 7.68325 11.2935 7.29272Z"
                                fill="white" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="timeline-slider__content">
                <img class="timeline-slider__img" loading="lazy" src="/assets/img/about/slider/5.jpg"
                     alt="Катание на лошади — горная долина">

                <div class="timeline-slider__description">
                  <div class="timeline-slider__img-next-wrap">
                    <img class="timeline-slider__img-next" src="/assets/img/about/slider/6.jpg" alt="">
                  </div>


                  <div class="timeline-slider__text-block">
                    <p class="subtitle-xl-accent">Когда мечта обрела имя</p>
                    <p class="text-md-regular text-color-secondary">В 2009 году в урочище Захарова Балка мы основали конный центр «Карачай Хорс». Его миссия — сохранить и популяризировать аборигенные породы лошадей. Так началась история бренда, который стал символом любви к родной земле.</p>
                  </div>

                  <!-- Кнопки -->
                  <div class="timeline-slider__nav swiper-nav">
                    <button class="btn-reset swiper-nav__prev round-button" data-single-prev>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                        <path
                                d="M8.96021 0.292725C9.35075 -0.0974973 9.98384 -0.0976989 10.3743 0.292725C10.7645 0.683163 10.7644 1.3163 10.3743 1.70679L3.0813 8.99976L10.3743 16.2927C10.7645 16.6832 10.7644 17.3163 10.3743 17.7068C9.9838 18.0973 9.35074 18.0971 8.96021 17.7068L0.253174 8.99976L8.96021 0.292725Z"
                                fill="white" />
                      </svg>
                    </button>
                    <button class="btn-reset swiper-nav__next round-button" data-single-next>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                                d="M11.2935 7.29272C11.684 6.90248 12.3171 6.90229 12.7075 7.29272L21.4146 15.9998L12.7075 24.7068C12.317 25.0973 11.684 25.0972 11.2935 24.7068C10.9029 24.3163 10.9029 23.6832 11.2935 23.2927L18.5864 15.9998L11.2935 8.70679C10.9029 8.31626 10.9029 7.68325 11.2935 7.29272Z"
                                fill="white" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="timeline-slider__content">
                <img class="timeline-slider__img" loading="lazy" src="/assets/img/about/slider/6.jpg"
                     alt="Катание на лошади — горная долина">

                <div class="timeline-slider__description">
                  <div class="timeline-slider__img-next-wrap">
                    <img class="timeline-slider__img-next" src="/assets/img/about/slider/7.jpg" alt="">
                  </div>


                  <div class="timeline-slider__text-block">
                    <p class="subtitle-xl-accent">Свобода, пойманная в кадре</p>
                    <p class="text-md-regular text-color-secondary">Наши лошади участвовали в фильмах, вдохновляли фотографов и стали героями кавказских пейзажей. В сотрудничестве с Алексеем Шторхом, Артёмом Макеевым и Екатериной Друзь мы создали новую традицию конной фотографии в России.</p>
                  </div>

                  <!-- Кнопки -->
                  <div class="timeline-slider__nav swiper-nav">
                    <button class="btn-reset swiper-nav__prev round-button" data-single-prev>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                        <path
                                d="M8.96021 0.292725C9.35075 -0.0974973 9.98384 -0.0976989 10.3743 0.292725C10.7645 0.683163 10.7644 1.3163 10.3743 1.70679L3.0813 8.99976L10.3743 16.2927C10.7645 16.6832 10.7644 17.3163 10.3743 17.7068C9.9838 18.0973 9.35074 18.0971 8.96021 17.7068L0.253174 8.99976L8.96021 0.292725Z"
                                fill="white" />
                      </svg>
                    </button>
                    <button class="btn-reset swiper-nav__next round-button" data-single-next>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                                d="M11.2935 7.29272C11.684 6.90248 12.3171 6.90229 12.7075 7.29272L21.4146 15.9998L12.7075 24.7068C12.317 25.0973 11.684 25.0972 11.2935 24.7068C10.9029 24.3163 10.9029 23.6832 11.2935 23.2927L18.5864 15.9998L11.2935 8.70679C10.9029 8.31626 10.9029 7.68325 11.2935 7.29272Z"
                                fill="white" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="timeline-slider__content">
                <img class="timeline-slider__img" loading="lazy" src="/assets/img/about/slider/7.jpg"
                     alt="Катание на лошади — горная долина">

                <div class="timeline-slider__description">
                  <div class="timeline-slider__img-next-wrap">
                    <img class="timeline-slider__img-next" src="/assets/img/about/slider/1.jpg" alt="">
                  </div>


                  <div class="timeline-slider__text-block">
                    <p class="subtitle-xl-accent">Место, где живут традиции</p>
                    <p class="text-md-regular text-color-secondary">В 2025 году мы завершили реконструкцию проекта. Клубный дом «Байрам» стал местом, где сохраняются доброта, уважение и бережное отношение к животным. Это история о любви — к земле, к лошадям и к жизни.</p>
                  </div>

                  <!-- Кнопки -->
                  <div class="timeline-slider__nav swiper-nav">
                    <button class="btn-reset swiper-nav__prev round-button" data-single-prev>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="18" viewBox="0 0 11 18" fill="none">
                        <path
                                d="M8.96021 0.292725C9.35075 -0.0974973 9.98384 -0.0976989 10.3743 0.292725C10.7645 0.683163 10.7644 1.3163 10.3743 1.70679L3.0813 8.99976L10.3743 16.2927C10.7645 16.6832 10.7644 17.3163 10.3743 17.7068C9.9838 18.0973 9.35074 18.0971 8.96021 17.7068L0.253174 8.99976L8.96021 0.292725Z"
                                fill="white" />
                      </svg>
                    </button>
                    <button class="btn-reset swiper-nav__next round-button" data-single-next>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path
                                d="M11.2935 7.29272C11.684 6.90248 12.3171 6.90229 12.7075 7.29272L21.4146 15.9998L12.7075 24.7068C12.317 25.0973 11.684 25.0972 11.2935 24.7068C10.9029 24.3163 10.9029 23.6832 11.2935 23.2927L18.5864 15.9998L11.2935 8.70679C10.9029 8.31626 10.9029 7.68325 11.2935 7.29272Z"
                                fill="white" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="intro">
      <div class="container">
        <p class="intro__text text-center subtitle-xl">
          «Байрам» — это закрытый клуб, где каждый чувствует себя как дома. Мы живём в формате <span
            class="subtitle-xl-accent color-accent">slow living:</span> без спешки, с вниманием к деталям, с любовью к
          природе
        </p>
      </div>
    </section>

    <section class="promo-video space-xxxl">
      <div class="container">
        <div class="promo-video__wrap">
          <button class="btn-reset promo-video__play-btn" data-fancybox="video" data-src="#video-content">
            <img src="/assets/img/play-btn.svg" alt="">
          </button>
          <!-- Скрытое видео для Fancybox -->
          <div id="video-content" style="display: none;">
            <video controls autoplay style="width: 100%; max-width: 800px;">
              <source src="assets/video/arenda.mp4" type="video/mp4">
              Ваш браузер не поддерживает видео.
            </video>
          </div>
          <video autoplay="" playsinline="" loop="" muted="" class="">
            <source src="assets/video/arenda.mp4" type="video/mp4">
          </video>

          <div class="promo-video__bottom">
            <p class="color-white">
              В вашем распоряжении — 17 гектаров земли, сады, лес и конюшни. Хотите — гуляйте по освещённым маршрутам с
              термосом чая, любуйтесь грушей на холме или панорамами Архызского ущелья
            </p>
            <p class="color-white">
              Солнечный день? Отправляйтесь к ручью и пруду или в лес за грибами вместе с опытными проводниками
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="intro">
      <div class="container">
        <p class="intro__text text-center subtitle-xl">
          Клубный дом «Байрам» расположен на е <span class="subtitle-xl-accent color-accent">17 гектарах</span> в
          урочище Захарова Балка — среди гор и леса. Уединённое место, где царят тишина и покой
        </p>
      </div>
    </section>

    <section class="about-map space-xxxl">
      <img src="/assets/img/about/about-map.png" alt="">
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script type="text/javascript" src="assets/js/libs/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="assets/js/libs/accordion/accordion.js"></script>
  <script type="text/javascript" src="assets/js/libs/graph-modal/graph-modal.min.js"></script>
  <script type="text/javascript" src="assets/js/libs/fancybox/fancybox.umd.js"></script>
  <script type="text/javascript" src="assets/js/libs/validate/validate-js.min.js"></script>
  <script type="text/javascript" src="assets/js/libs/inputmask/inputmask.min.js"></script>
  <script type="text/javascript" src="assets/js/libs/dynamic-adaptive/dynamic-adaptive.min.js"></script>

  <script type="text/javascript" src="assets/js/swipers.js"></script>
  <script type="text/javascript" src="assets/js/nav.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>

  <script type="text/javascript" src="assets/js/validate-form.js"></script>
  <script type="text/javascript" src="assets/js/reveal-on-scroll.js"></script>
  <script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
  <script type="text/javascript" src="assets/js/dropdown-menu.js"></script>
  <script type="text/javascript" src="assets/js/hero-reveal.js"></script>
</body>

</html>
