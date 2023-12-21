<?php get_header(); ?>

<main>
    <div class="sub-mv">
      <picture>
        <source srcset="./assets/images/common/campaign_mv-sp.jpg" media="(max-width: 769px)"  />
        <img src="./assets/images/common/campaign_mv-pc.jpg" alt="２匹の魚の画像">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle">campaign</h1>
      </div>
    </div>
    <?php get_template_part('parts/breadcrumb') ?>

    <div class="sub-content sub-campaign">
      <div class="sub-campaign__inner inner">
        <div class="sub-campaign__menu contents-menu">
          <ul class="contents-menu__items">
              <li class="contents-menu__item">all</li>
              <li class="contents-menu__item">ライセンス講習</li>
              <li class="contents-menu__item">ファンダイビング</li>
              <li class="contents-menu__item">体験ダイビング</li>
          </ul>
        </div>
        <?php if (have_posts()):
          while (have_posts()) :
            the_post(); ?>
            <div class="sub-campaign__items campaign-cards--campaign">
              <div class="sub-campaign__item campaign-card">
                <figure class="campaign-card__img">
                  <img src="./assets/images/common/campaign_1.jpg" alt="魚群の画像">
                </figure>
                <div class="campaign-card__body campaign-card__body--campaign">
                  <div class="campaign-card__header campaign-card__header--campaign">
                    <span class="campaign-card__category">ライセンス講習</span>
                    <h3 class="campaign-card__title campaign-card__title--big ">ライセンス取得</h3>
                  </div>
                  <div class="campaign-card__info campaign-card__info--campaign">
                    <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                    <div class="campaign-card__pay">
                      <p class="campaign-card__pay-pre">¥56,000</p>
                      <p class="campaign-card__pay-post">¥46,000</p>
                    </div>
                  </div>
                  <div class="campaign-card__sentence">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </div>
                  <div class="campaign-card__contact">
                    <div class="campaign-card__period">2023/6/1-9/30</div>
                    <p class="campaign-card__inquiry">ご予約・お問い合わせはコチラ</p>
                    <div class="campaign-card__btn">
                      <a href="https://taka-webdesign.main.jp/newcodeups/contact.html" class="button"><span class="button__text">contact us</span><span class="button__arrow"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php endwhile;endif; ?>
        <div class="campaign__pagnation pagnation wp-pagenavi">
          <a class="previouspostslink" rel="prev" href="#"><</a>
          <div class="pagnation-num">
            <a class="page smaller" href="#">1</a>
            <a class="page smaller" href="#">2</a>
            <a class="page smaller" href="#">3</a>
            <a class="page larger" href="#">4</a>
          </div>
          <a class="nextpostslink" rel="next" href="#">></a>
        </div>
      </div>
    </div>
<?php get_footer(); ?>