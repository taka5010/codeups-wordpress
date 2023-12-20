<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="hader__logo">
        <a href="https://taka-webdesign.main.jp/newcodeups/" class="header__link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ヘッダーロゴ">
        </a>
      </h1>
      <button class="header__drawer hamburger js-hamburger u-mobile">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="header__sp-nav sp-nav js-drawer-menu u-mobile">
        <div class="sp-nav__scroll">
          <div class="sp-nav__lists">
            <ul class="sp-nav__items right">
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/campaign.html"><span>キャンペーン</span></a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/information.html">ライセンス取得</a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/information.html">貸切体験ダイビング</a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/information.html">ナイトダイビング</a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/about.html"><span>私たちについて</span></a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/information.html"><span>ダイビング情報</span></a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/information.html?active-tab=tab-1#infomenu">ライセンス講習</a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/information.html?active-tab=tab-2#infomenu">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/information.html?active-tab=tab-3#infomenu">体験ダイビング</a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/blog-archive.html"><span>ブログ</span></a></li>
            </ul>
            <ul class="sp-nav__items left">
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/voice.html"><span>お客様の声</span></a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/price.html">料金一覧</a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/price.html#price1">ライセンス講習</a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/price.html#price2">体験ダイビング</a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/price.html#price3">ファンダイビング</a></li>
              <li class="sp-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/price.html#price4">スペシャルダイビング</a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/faq.html"><span>よくある質問</span></a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/privacy.html"><span >プライバシー<br class="u-mobile">
                ポリシー</span></a></li>
              <li class="sp-nav__item sp-nav__item--title"><a href="https://taka-webdesign.main.jp/newcodeups/terms.html"><span>利用規約</span></a></li>
              <li class="sp-nav__item sp-nav__item--title sp-nav__item--white"><a href="https://taka-webdesign.main.jp/newcodeups/contact.html"><span>お問い合わせ</span></a></li>
            </ul>
          </div>
        </div><!-- /.sp-nab__scroll -->
      </div>
      <div class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url( '//' )); ?>/campaign.html"><div class="pc-nav__text">campaign<br><span>キャンペーン</span></div></a></li>
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url( '/about/' )); ?>"><div class="pc-nav__text">about us<br><span>私たちについて</span></div></a></li>
          <li class="pc-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/information.html"><div class="pc-nav__text">information<br><span>ダイビング情報</span></div></a></li>
          <li class="pc-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/blog-archive.html"><div class="pc-nav__text">blog<br><span>ブログ</span></div></a></li>
          <li class="pc-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/voice.html"><div class="pc-nav__text">voice<br><span>お客様の声</span></div></a></li>
          <li class="pc-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/price.html"><div class="pc-nav__text">price<br><span>料金一覧</span></div></a></li>
          <li class="pc-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/faq.html"><div class="pc-nav__text">FAQ<br><span>よくある質問</span></div></a></li>
          <li class="pc-nav__item"><a href="https://taka-webdesign.main.jp/newcodeups/contact.html"><div class="pc-nav__text">contact<br><span>お問い合わせ</span></div></a></li>
        </ul>
      </div>
    </div>
  </header>