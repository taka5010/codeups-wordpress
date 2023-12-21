<?php get_header(); ?>
<main>
    <div class="sub-mv">
      <picture>
        <source srcset="./assets/images/common/mv_campaign-sp.jpg" media="(max-width: 769px)"  />
        <img src="./assets/images/common/mv_campaign-pc.jpg" alt="">
      </picture>
      <div class="sub-mv__text">
        <h1 class="sub-mv__maintitle">blog</h1>
      </div>
    </div>

    <?php get_template_part('parts/breadcrumb') ?>
    
    <section class="sub-content sub-blog">
      <div class="sub-blog__inner inner">
        <div class="sub-blog__wrapper">
          <div class="sub-blog__article blog-article">
            <?php if (have_posts()):while (have_posts()) :the_post(); ?>
            <time class="blog-card__category" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
              <h1 class="blog-article__header"><?php the_title(); ?></h1>
              <figure class="blog-article__img">
                  <?php if (get_the_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.jpg" alt="noimage">
                  <?php endif; ?>
              </figure>
              <div class="blog-article__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </div>
              <figure class="blog-article__img">
                <img src="./assets/images/common/blog_img-1.jpg" alt="サンゴの画像">
              </figure>
              <div class="blog-article__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </div>
              <div class="blog-article__items">
                <ul class="blog-article__lists">
                  <li>リスト１</li>
                  <li>リスト２</li>
                  <li>リスト３</li>
                </ul>
              </div>
              <div class="blog-article__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </div>
              <?php endwhile;endif; ?>
              <div class="sub-blog__pagenation--detail pagnation wp-pagenavi">
                  <?php 
                  $prev = get_previous_post();
                  if ($prev): ?>
                  <a class="previouspostslink" rel="prev" href="<?php echo esc_url(get_permalink($prev->ID)); ?>"><</a>
                  <?php endif; ?>

                  <?php 
                  $next = get_next_post();
                  if ($next): ?>
                  <a class="nextpostslink" rel="next" href="<?php echo esc_url(get_permalink($next->ID)); ?>">></a>
                  <?php endif; ?>
              </div>
            </div>
        </div>
        <div class="sub-blog__sideber sideber">
          <div class="sideber__contents">
            <h2 class="sideber__header">人気記事</h2>
            <div class="sideber__articles articles-cards">
              <article class="articles-cards__item article-card">
                <div class="article-card__img">
                  <img src="./assets/images/common/blog_img-4.jpg" alt="">
                </div>
                <div class="article-card__body">
                  <date class="article-card__date">2023/11/17</date>
                  <div class="article-card__text">ライセンス取得</div>
                </div>
              </article>
              <article class="articles-cards__item article-card">
                <div class="article-card__img">
                  <img src="./assets/images/common/blog_img-2.jpg" alt="">
                </div>
                <div class="article-card__body">
                  <date class="article-card__date">2023/11/17</date>
                  <div class="article-card__text">ライセンス取得</div>
                </div>
              </article>
              <article class="articles-cards__item article-card">
                <div class="article-card__img">
                  <img src="./assets/images/common/blog_img-3.jpg" alt="">
                </div>
                <div class="article-card__body">
                  <date class="article-card__date">2023/11/17</date>
                  <div class="article-card__text">ライセンス取得</div>
                </div>
              </article>
            </div>
          </div>
          <div class="sideber__contents">
            <h2 class="sideber__header">口コミ</h2>
            <div class="sideber__reputations reputations-cards">
              <div class="reputations-cards__item reputation-card">
                <div class="reputation-card__img">
                  <img src="./assets/images/common/reputation_campaign.jpg" alt="">
                </div>
                <div class="reputation-card__body">
                  <span class="reputation-card__category">30代(カップル)</span>
                  <div class="reputation-card__text">ここにタイトルが入ります。ここにタイトル</div>
                </div>
              </div>
            </div>
            <div class="sideber__btn">
              <a href="#" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
            </div>
          </div>
          <div class="sideber__contents">
            <h2 class="sideber__header">キャンペーン</h2>
            <div class="sideber__campaigns campaign-cards">
              <div class="campaign-cards__items campaign-cards">
                <div class="campaign-cards__item campaign-card">
                  <figure class="campaign-card__img">
                    <img src="./assets/images/common/campaign_1.jpg" alt="魚群の画像">
                  </figure>
                  <div class="campaign-card__body campaign-card__body--sideber">
                    <div class="campaign-card__header campaign-card__header--sideber">
                      <h3 class="campaign-card__title">ライセンス取得</h3>
                    </div>
                    <div class="campaign-card__info">
                      <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                      <div class="campaign-card__pay">
                        <p class="campaign-card__pay-pre">¥56,000</p>
                        <p class="campaign-card__pay-post">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="campaign-cards__item campaign-card">
                  <figure class="campaign-card__img">
                    <img src="./assets/images/common/campaign_2.jpg" alt="魚群の画像">
                  </figure>
                  <div class="campaign-card__body campaign-card__body--sideber">
                    <div class="campaign-card__header campaign-card__header--sideber">
                      <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    </div>
                    <div class="campaign-card__info">
                      <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                      <div class="campaign-card__pay">
                        <p class="campaign-card__pay-pre">¥24,000</p>
                        <p class="campaign-card__pay-post">¥18,000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sideber__btn">
                <a href="#" class="button"><span class="button__text">view more</span><span class="button__arrow"></span></a>
              </div>
            </div>
          </div>
          <div class="sideber__contents">
            <h2 class="sideber__header">アーカイブ</h2>
            <div class="sideber__time">
              <div class="sideber__date">
                <div class="sideber__year">2023</div>
                <ul class="sideber__month">
                  <li>3月</li>
                  <li>2月</li>
                  <li>1月</li>
                </ul>
              </div>
              <div class="sideber__date">
                <div class="sideber__year">2022</div>
                <ul class="sideber__month">
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>