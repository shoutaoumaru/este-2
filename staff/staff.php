<?php
 /* Template Name: staff
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>スタッフ紹介 | エステテンプレート2</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <div class="pageBg">
      <span class="lines"> </span>
      <span class="txt">Riv<br />estesalon</span>
    </div>
    <!-- /.pageBg -->
    <main id="main-contents" class="c-staff-wrapper">
      <?php get_template_part('includes/c-header'); ?>     
      <!-- /.header -->
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/este-store.jpg" alt="">
        </div>
      </section>
      <!-- /.c-topview -->
      <section class="c-features">
        <div class="c-container">
          <h2 class="c-title">
            <span class="en">STAFF</span>
            <span class="ja">エステティシャン紹介</span>
          </h2>
          <div class="c-features__desc">
            <h3 class="c-txt-md">エステサロンで後悔してほしくない</h3>
            <p class="c-txt-sm">お肌は着替えの効かない一生付き合う宝物。<br>
              是非自分のお肌を知り、好きになり、上手に付き合い、一生の財産を手に入れてほしいと思います。
            </p>
          </div>
        </div>
      </section>
      <!-- /.c-features -->
      <section class="c-staff">
        <div class="c-container">
          <ul>
            <li class="c-staff__item">
              <h3 class="tit">
                <p class="ja">代表</p>
                <p class="en">Owner</p>
              </h3>
              <div class="c-staff__flex">
                <div class="c-staff__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/staff_1@pc.jpg" alt="">
                </div>
                <div class="c-staff__desc">
                  <h3 class="c-staff__name">
                    <p class="ja">利部 美紀</p>
                    <p class="en">MIKI RIBU</p>
                  </h3>
                  <div class="c-staff__text">
                    <p class="c-txt-sm">
                      お客様のキレイになりたい、癒されたい、お得に通いたいといった、様々なご要望にお応えしてきました。
                      これからもお客様の美をサポートできるよう、さらなるサービス向上を目指してまいります。
                    </p>
                  </div>
                  <div class="c-staff__ls">
                    <h4>資格</h4>
                    <p class="c-txt-sm">AJESTHE認定フェイシャルエステティシャン</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="more-btn item">
            <a href=" <?php echo esc_url( home_url('/faq')); ?>" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">よくあるご質問</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <!-- <script src="/scripts/main.js"></script> -->
</body>

</html>