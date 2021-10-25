<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お知らせ詳細 | エステテンプレート2</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div id="main-wrapper" class="news-wrapper ">
    <div class="pageBg">
      <span class="lines"> </span>
      <span class="txt">Riv<br />estesalon</span>
    </div>
    <!-- /.pageBg -->
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class="logo__img">
          <a href="/">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="/first/first.html"><span>初めての方へ</span>
                <small>FIRST</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="/price/price.html"><span>料金体系</span><small>PRICE</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href="/staff/staff.html"><span>スタッフ紹介</span><small>STAFF</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="/faq/faq.html"><span>よくあるご質問</span><small>FAQ</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="/news/news.html"><span>お知らせ</span><small>NEWS</small></a>
            </li>
          </ul>
          <div class="pc-contact">
            <a class="pc-tel" href="tel:092-686-7954">0120-123-456</a>
            <a target="_blank" class="pc-net" href="https://beauty.hotpepper.jp/">オンライン予約</a>
          </div>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li>
            <a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a>
          </li>
          <li>
            <a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.header -->
    <section class="c-topview">
      <div class="c-topview__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/este_2@pc.jpg" alt="">
      </div>
    </section>
    <!-- /.c-topview -->
    <section class="c-news-sl">
      <div class="c-container">
        <h2 class="c-title">
          <span class="en">news</span>
          <span class="ja">ニュース</span>
        </h2>
        <ul class="c-news-sl__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news-sl__block">
              <div class="c-news-sl__tit">
                <span class="htumbnail"><?php the_post_thumbnail(); ?></span>
                <p class="c-txt-md"><?php the_title(); ?></p>
                <span class="c-news-sl__date c-txt-sm"><?php the_date(); ?></span>
              </div>
              <div class="c-news-sl__contents">
                <p class="c-txt-sm"><?php the_content(); ?>
                </p>
              </div>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="c-news-sl__link">
          <a class="more-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span class="readmore c-txt-sm">一覧へ戻る</span></a>
        </div>
      </div>
    </section>
    <!-- /.news-top -->
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
  </div>
  <!-- .superwrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>

</html>