<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUpsWordPress講座</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <!-- <link rel="icon" href="" /> -->

  <!-- GoogleFont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/styles.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
  <script defer src="./assets/js/script.js"></script>
</head>
<body>

  <header class="l-header p-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
      <a href="" class="p-header__logoLink">CodeUps</a>
    </h1>
      <div class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="p-header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="#">NEWS</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">SERVICE</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">WORKS</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">COMPANY</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">RECRUIT</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">CONTACT</a>
          </li>
        </ul>
      </nav>
      <nav class="p-header__sp-nav sp-nav js-sp-nav">
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="">NEWS</a>
          </li>
          <li class="sp-nav__item">
            <a href="">SERVICE</a>
          </li>
          <li class="sp-nav__item">
            <a href="">WORKS</a>
          </li>
          <li class="sp-nav__item">
            <a href="">COMPANY</a>
          </li>
          <li class="sp-nav__item">
            <a href="">RECRUIT</a>
          </li>
          <li class="sp-nav__item">
            <a href="">CONTACT</a>
          </li>
        </ul>

      </nav>
    </div>
  </header>

  <section class="l-mv p-mv js-mv-height">
    <div class="p-mv__inner">
      <div class="p-mv__header">
        <h2 class="p-mv__title">WEB <br class="u-mobile">DESIGN <br class="u-mobile">SPECIALIST</h2>
        <p class="p-mv__subtitle">お客様の夢を叶える<br class="u-mobile">Webサイトを制作</p>
        <div class="p-mv__btn">
          <a href="#" class="c-mv-btn">CONTACT</a>
        </div>
      </div>
      <div class="p-mv__scroll"><span>SCROLL</span></div>
    </div>
  </section>


  <section class="l-topNews p-news">
    <div class="p-news__inner l-inner">
      <div class="p-news__title c-section-header c-section-header--left">
        <h2 class="c-section-header__engtitle">NEWS</h2>
        <p class="c-section-header__jatitle">お知らせ</p>
      </div>
      <div class="p-news__items">
        <!-- ループ処理開始 -->
        <div class="p-news__item p-news-content">
          <div class="p-news-content__meta">
            <time datetime="2022-03-04" class="p-news-content__date">2022.3.4</time>
            <p class="p-news-content__category">お知らせ</p>
          </div>
          <div class="p-news-content__link">
            <a href="" class="p-news-content__text">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</a>
          </div>
        </div>
        <!-- ループ終了 -->
        <div class="p-news__item p-news-content">
          <div class="p-news-content__meta">
            <time datetime="2022-03-04" class="p-news-content__date">2022.3.4</time>
            <p class="p-news-content__category">お知らせ</p>
          </div>
          <div class="p-news-content__link">
            <a href="" class="p-news-content__text">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</a>
          </div>
        </div>
        <div class="p-news__item p-news-content">
          <div class="p-news-content__meta">
            <time datetime="2022-03-04" class="p-news-content__date">2022.3.4</time>
            <p class="p-news-content__category">お知らせ</p>
          </div>
          <div class="p-news-content__link">
            <a href="" class="p-news-content__text">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-service p-service">
    <div class="p-service__inner l-inner">
      <div class="p-service__title c-section-header">
        <h2 class="c-section-header__engtitle">SERVICE</h2>
        <p class="c-section-header__jatitle">事業内容</p>
      </div>
      <div class="p-service__items">
        <div class="p-service__item p-card">
          <div class="p-card__img">
            <img src="./assets/images/common/service_1.jpg" alt="サービス画像1">
          </div>
          <div class="p-card__body">
            <h3 class="p-card__title">Webサイト制作</h3>
            <p class="p-card__text">新規サイトはもちろん、サイトリニューアルやランディングページ制作も行っております。</p>
          </div>
        </div>
        <div class="p-service__item p-card">
          <div class="p-card__img">
            <img src="./assets/images/common/service_2.jpg" alt="サービス画像2">
          </div>
          <div class="p-card__body">
            <h3 class="p-card__title">LP制作</h3>
            <p class="p-card__text">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。</p>
          </div>
        </div>
        <div class="p-service__item p-card">
          <div class="p-card__img">
            <img src="./assets/images/common/service_3.jpg" alt="サービス画像3">
          </div>
          <div class="p-card__body">
            <h3 class="p-card__title">アプリ開発</h3>
            <p class="p-card__text">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
          </div>
        </div>
      </div>
      <div class="p-service__btn">
        <a href="#" class="c-button">more</a>
      </div>
    </div>
  </section>


  <section class="l-works p-works">
    <div class="p-works__inner l-inner">
      <div class="p-works__cotnent">
        <div class="p-works__images">
          <div class="swiper js-works-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide p-works__img">
                <img src="./assets/images/common/works_1.jpg" alt="">
              </div>
              <div class="swiper-slide p-works__img">
                <img src="./assets/images/common/service_1.jpg" alt="">
              </div>
              <div class="swiper-slide p-works__img">
                <img src="./assets/images/common/service_2.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="swiper-pagination js-works-pagination"></div>
        </div>
        <div class="p-works__text-body">
          <div class="p-works__title c-section-header">
            <h2 class="c-section-header__engtitle">WORKS</h2>
            <p class="c-section-header__jatitle">制作実績</p>
          </div>
          <div class="p-works__text-block">
            <p class="p-works__text">様々なジャンルのWebサイト制作が可能です。<br>ご購入やお申込み数の増加などを実現します！</p>
          </div>
          <div class="p-works__btn">
            <a href="#" class="c-button">more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-company p-company">
    <div class="p-company__inner l-inner">
      <div class="p-company__title c-section-header">
        <h2 class="c-section-header__engtitle">COMPANY</h2>
        <p class="c-section-header__jatitle">私たちについて</p>
      </div>
      <div class="p-company__contents">
        <h3 class="p-company__subtitle"><span class="p-company__yellow">サイトのゴール =</span><br class="u-mobile"><span class="p-company__yellow">夢を叶えること</span></h3>
        <div class="p-company__content">
          <p class="p-company__text">
              お客様の夢を叶えること。<br>
              それがWebサイトのゴールであり、<br class="u-mobile">
              私たちが目指すことです。<br>
              だからこそちゃんと成果を出すサイトを<br class="u-mobile">
              全力でお作りします。<br>
              お客様の笑顔を見たい。<br>
              夢を実現する手助けをさせてください。
            </p>
        </div>
        <div class="p-company__btn">
          <a href="#" class="c-button">more</a>
        </div>
      </div>
    </div>
  </section>
  <section class="l-recruit p-recruit">
    <div class="p-recruit__inner l-inner">
      <div class="p-recruit__wrapper">
        <div class="p-recruit__img">
          <img src="./assets/images/common/recruit_1.jpg" alt="">
        </div>
        <div class="p-recruit__contents">
          <div class="p-recruit__title c-section-header">
            <h2 class="c-section-header__engtitle">RECRUIT</h2>
            <p class="c-section-header__jatitle">採用情報</p>
          </div>
          <div class="p-recruit__text-block">
            <p class="p-recruit__text">私たちと一緒に働きませんか？</p>
          </div>
          <div class="p-recruit__btn">
            <a href="#" class="c-button">more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="l-contact p-contact">
    <div class="p-contact__inner l-inner">
      <div class="p-contact__title c-section-header">
        <h2 class="c-section-header__engtitle">CONTACT</h2>
        <p class="c-section-header__jatitle">お問い合わせ</p>
      </div>
      <div class="p-contact__contents">
        <div class="p-contact__text-block">
          <p class="p-contact__text">Webサイトの制作のご依頼やお見積りなど、<br>お気軽にご相談ください。</p>
        </div>
        <div class="p-contact__btn">
          <a href="#" class="c-button">more</a>
        </div>
      </div>
    </div>
  </section>

  <div class="c-to-top">
    <a href="#top"><span></span></a>
  </div>

  <footer class="l-footer p-footer">
    <div class="p-footer__inner">

      <nav class="p-footer__nav p-footer-nav">
        <ul class="p-footer-nav__items">
          <li class="p-footer-nav__item">
            <a href="">HOME</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="">NEWS</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="">SERVICE</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="">WORKS</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="">COMPANY</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="">RECRUIT</a>
          </li>
          <li class="p-footer-nav__item">
            <a href="">CONTACT</a>
          </li>
        </ul>
      </nav>
      <div class="p-footer__copyright">
        <small>&copy; CodeUps</small>
      </div>
    </div>
  </footer>
</body>
</html>