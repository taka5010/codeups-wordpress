<?php get_header(); ?>

<main>
    <div class="sub-mv">
      <picture>
        <source srcset="./assets/images/common/voice_mv-sp.jpg" media="(max-width: 769px)"  />
        <img src="./assets/images/common/voice_mv-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle sub-mv__maintitle--sitemap">voice</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>

    <section class="sub-content sub-voice">
      <div class="sub-voice__inner inner">
        <div class="sub-voice__menu contents-menu">
          <ul class="contents-menu__items">
              <li class="contents-menu__item">all</li>
              <li class="contents-menu__item">ライセンス講習</li>
              <li class="contents-menu__item">ファンダイビング</li>
              <li class="contents-menu__item">体験ダイビング</li>
          </ul>
        </div>
        <div class="sub-voice__voices voice-cards">
          <!-- 記事の開始 -->
          <?php if (have_posts()):
            while (have_posts()) :
              the_post(); ?>
              <div class="voice-cards__item voice-card">
              <div class="voice-card__header">
                <div class="voice-card__headerLeft">
                  <div class="voice-card__info">
                    <p class="voice-card__person">20代(女性)</p>
                    <p class="voice-card__category">ライセンス講習
                    </p>
                  </div>
                  <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <div class="voice-card__headerRight">
                  <figure class="voice-card__img js-inview">
                    <img src="./assets/images/common/voice_img-1.jpg" alt="麦わら帽子女性の画像">
                  </figure>
                </div>
              </div>
              <div class="voice-card__body">
                <div class="voice-card__info">
                  <p class="voice-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。
                  </p>
                </div>
              </div>
            </div>
          <?php endwhile;endif; ?>
          <!-- 記事の終了 -->
        </div>
        <div class="voice-pagnation wp-pagenavi">
          <a class="previouspostslink" rel="prev" href="#"><</a>
          <div class="pagnation-num">
            <a class="page smaller" href="#">1</a>
            <a class="page smaller" href="#">2</a>
            <a class="page smaller" href="#">3</a>
            <a class="page larger" href="#">4</a>
          </div><!-- /.pagnation-num -->
          <a class="nextpostslink" rel="next" href="#">></a>
        </div>
      </div>
    </section>
<?php get_footer(); ?>