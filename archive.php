<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お知らせ一覧 | エステテンプレート2</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div id="main-wrapper" class="news-wrapper">
    <div class="pageBg">
      <span class="lines"> </span>
      <span class="txt">Riv<br />estesalon</span>
    </div>
    <!-- /.pageBg -->
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.header -->
    <section class="c-topview">
      <div class="c-topview__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/este_2@pc.jpg" alt="">
      </div>
    </section>
    <!-- /.c-topview -->
    <section class="c-news">
      <div class="c-container">
        <h2 class="c-title">
          <span class="en">news</span>
          <span class="ja">ニュース</span>
        </h2>
        <ul class="c-news__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news__item">
              <a href="<?php the_permalink() ;?>" class="c-news__link animsition-link">
                <span class="thumbnail"><?php the_post_thumbnail(); ?></span>
                <span class="c-news__date c-txt-sm"><?php the_date(); ?></span>
                <p class="c-news__tit c-txt-sm"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!-- pagenesion -->
        <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
      </div>
    </section>
    <!-- /.c-news -->
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
  </div>
  <!-- /.main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>

</html>