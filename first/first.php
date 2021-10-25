<?php
 /* Template Name: first
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>初めての方へ | エステテンプレート1</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <main id="main-contents" class="c-first">
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
      <section class="c-features">
        <div class="c-container">
          <h2 class="c-title">
            <span class="en">features</span>
            <span class="ja">RivRoundについて</span>
          </h2>
          <div class="c-features__desc">
            <h3 class="c-txt-md">上質の美を追求する全ての女性へ</h3>
            <p class="c-txt-sm">
              一瞬だけではない長い人生を
              健康的に、そして魅力的に生き抜く本質を見据えた
              誠実なカラダづくり。<br>
              美しいプロポーションは、心とカラダの健康があってこそ。<br>そして、一度手に入れた理想のカラダを
              リバウンドせずに持続させること<br>このシンプルな原点と真剣に向き合うことから生まれたのが
              RivRoundです。
            </p>
          </div>
        </div>
      </section>
      <!-- /.c-features -->
      <section class="c-points">
        <h3 class="tit">
          <p class="ja">RivRoundの6つのこだわり</p>
          <p class="en">Commitment</p>
        </h3>
        <ul>
          <li class="c-points__item">
            <div class="c-points__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/top_3@pc.jpg" alt="">
            </div>
            <div class="c-points__desc">
              <h4>
                <div class="num-wrap">
                  <p class="num">01</p>
                  <p class="item-tit">安心、安全で
                    「結果」の出るエステティックサロン</p>
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">
                    お客様ひとりひとりのレベルや目的、体質に合わせたパーソナルトレーニングプログラムを、マンツーマン体制で、運動未経験者からトレーニング経験者まで丁寧にサポートします。</p>
                </div>
              </h4>
            </div>
          </li>
          <li class="c-points__item">
            <div class="c-points__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/hyperknife-ex-1.jpg" alt="">
            </div>
            <div class="c-points__desc">
              <h4>
                <div class="num-wrap">
                  <p class="num">02</p>
                  <p class="item-tit">最新機種【ハイパーナイフEX】大人気ハイパーシリーズの最新機種。燃焼力はシリーズ最高クラス</p>
                </div>

                <div class="item-desc">
                  <p class="c-txt-sm">
                    深部加温で、皮下脂肪も内蔵脂肪も徹底燃焼！温めの持続効果も高いので、代謝アップしたい方におすすめ！自覚していないインナー冷えに気づくお客様も多いです！【こんなお悩みに→お急ぎでサイズダウンを目指す方、何度ダイエットしてもリバウンドしやすい方＝冷えの改善が必要な方、むくみや冷えが気になる方】
                  </p>
                </div>
              </h4>
            </div>
          </li>

          <li class="c-points__item">
            <div class="c-points__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/towel_1@pc.jpg" alt="">
            </div>
            <div class="c-points__desc">
              <h4>
                <div class="num-wrap">
                  <p class="num">03</p>
                  <p class="item-tit">無添加製品</p>
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">お肌に不必要な成分は一切入れない「完全無添加化粧品」使用で安心。<br>お肌に良いものだけを追求し、今までにない肌の変化をご提案いたします。
                  </p>
                </div>
              </h4>
            </div>
          </li>
          <li class="c-points__item">
            <div class="c-points__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/face_1@pc.jpg" alt="">
            </div>
            <div class="c-points__desc">
              <h4>
                <div class="num-wrap">
                  <p class="num">04</p>
                  <p class="item-tit">お肌の表面ではなく内側からケア</p>
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">
                    角質だけの簡単なケアではありません。お肌トラブルの原因は見えている「表面」ではなく、「内側」の状態が重要です。「内側」の状態が整う事でお肌のサイクルを正常化し、潤いのあるお肌へと導きます。</p>
                </div>
              </h4>
            </div>
          </li>
          <li class="c-points__item">
            <div class="c-points__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/head.jpg" alt="">
            </div>
            <div class="c-points__desc">
              <h4>
                <div class="num-wrap">
                  <p class="num">05</p>
                  <p class="item-tit">「究極の癒やし」と言われる、オイルヘッドマッサージ</p>
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">
                    眉間に少しずつオイルを垂らす感覚は、他のヘッドメニューでは体験しづらい独特の技術。うとうと眠ってしまう方が多い癒やしメニュー。寝付きが悪い方やストレスが溜まっている方◎。ヘッドシャワーがついているので、手ぶらでご来店頂いて大丈夫です！
                  </p>
                </div>
              </h4>
            </div>
          </li>
          <li class="c-points__item">
            <div class="c-points__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling_1@pc.jpg" alt="">
            </div>
            <div class="c-points__desc">
              <h4>
                <div class="num-wrap">
                  <p class="num">06</p>
                  <p class="item-tit">無理な勧誘なし</p>
                </div>
                <div class="item-desc">

                  <p class="c-txt-sm">
                    お客様に最適な施術をご案内いたします。<br>
                    ご希望以外のメニューや商品の購入を無理に勧めることはいたしません。</p>
                </div>
              </h4>
            </div>
          </li>
        </ul>
      </section>
      <!-- /.c-points -->
      <section class="c-flow">
        <h3 class="tit">
          <p class="ja">ご利用の流れ</p>
          <p class="en">Flow Step</p>
        </h3>
        <div class="c-flow-content">
          <section id="flow01" class="c-flow-item">
            <div class="c-container">
              <div class="item-img view-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/reserve.jpg" alt="">
              </div>
              <div class="item-wrap">
                <h4 class="item-tit">
                  <p><span class="num">01</span>ご予約</p>
                </h4>
                <div class="item-img view-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/reserve.jpg" alt="">
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">RivRoundでは、より高い効果とサービスを提供させていただくために、「完全予約制」となっております。
                    ご予約はhotpepper、お電話にて承っております。ご不明な点がございましたら、お気軽にお問い合わせ下さい。</p>
                </div>
              </div>
            </div>
          </section>
          <section id="flow02" class="c-flow-item">
            <div class="c-container">
              <div class="item-img view-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/este-store.jpg" alt="">
              </div>
              <div class="item-wrap">
                <h4 class="item-tit">
                  <p><span class="num">02</span>ご来店</p>
                </h4>
                <div class="item-img view-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/este-store.jpg" alt="">
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">
                    初めてお越しいただいた際は、店内のご説明をさせていただきます。ロッカールームやパウダールーム、リラクゼーションルームなど、サロンを快適にご利用いただけるスペースをご案内いたします。</p>
                </div>
              </div>
            </div>
          </section>
          <section id="flow03" class="c-flow-item">
            <div class="c-container">
              <div class="item-img view-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling_1@pc.jpg" alt="">
              </div>
              <div class="item-wrap">
                <h4 class="item-tit">
                  <p><span class="num">03</span>ヒアリング</p>
                </h4>
                <div class="item-img view-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling_1@pc.jpg" alt="">
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">
                    コースをお受けいただく前に、現在の肌やお身体の状態を確認するため、お客さまアンケートのご記入をお願いいたします。アンケートをもとに、お客さまのお悩みや目的・体質に応じて最適なコースをご提案させていただき、本日行うコース内容、終了時間、金額をご案内いたします。
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section id="flow04" class="c-flow-item">
            <div class="c-container">
              <div class="item-img view-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/bet.jpg" alt="">
              </div>
              <div class="item-wrap">
                <h4 class="item-tit">
                  <p><span class="num">04</span>準備</p>
                </h4>
                <div class="item-img view-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/bet.jpg" alt="">
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">
                    専用のガウン・紙ショーツ・使い捨てスリッパをご利用ください。
                    お召しかえ後、スタッフがお迎えに上がるまで、リラクゼーションルームにて、お掛けになってお待ちください。</p>
                </div>

              </div>
            </div>
          </section>
          <section id="flow05" class="c-flow-item">
            <div class="c-container">
              <div class="item-img view-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/este_1@pc.jpg" alt="">
              </div>
              <div class="item-wrap">
                <h4 class="item-tit">
                  <p><span class="num">05</span>施術</p>
                </h4>
                <div class="item-img view-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/este_1@pc.jpg" alt="">
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">RivRoundでは、より高い効果とサービスを提供させていただくために、「完全予約制」となっております。
                    ご予約はhotpepper、お電話にて承っております。ご不明な点がございましたら、お気軽にお問い合わせ下さい。</p>
                </div>
              </div>
            </div>
          </section>
          <section id="flow06" class="c-flow-item">
            <div class="c-container">
              <div class="item-img view-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/conunceling_4.jpg" alt="">
              </div>
              <div class="item-wrap">
                <h4 class="item-tit">
                  <p><span class="num">06</span>アフターカウンセリング</p>
                </h4>
                <div class="item-img view-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/conunceling_4.jpg" alt="">
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">お召しかえ後、本日お受けになったコース後のご感想をお伺いいたします。
                    本日の成果を持続し、次回にはより良い効果を提供させていただくためのご提案とお客さまの肌質にあったホームケアのご紹介をいたします。
                    お客さまが継続してトリートメントをお考えの際には、親身に対応いたします。</p>
                </div>
              </div>
            </div>
          </section>
          <section id="flow07" class="c-flow-item">
            <div class="c-container">
              <div class="item-img view-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling_3.jpg" alt="">
              </div>
              <div class="item-wrap">
                <h4 class="item-tit">
                  <p><span class="num">07</span>お会計</p>
                </h4>
                <div class="item-img view-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling_3.jpg" alt="">
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">RivRoundでは分かりやすい料金体系、明朗会計がお客様からお喜び頂いているところの一つになります。</p>
                  <p class="c-txt-sm">*お支払いには各種クレジットカードがご利用可能です。</p>
                </div>
              </div>
            </div>
          </section>
          <section id="flow08" class="c-flow-item">
            <div class="c-container">
              <div class="item-img view-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/calender.jpg" alt="">
              </div>
              <div class="item-wrap">
                <h4 class="item-tit">
                  <p><span class="num">08</span>またのご来店お待ちしております。</p>
                </h4>
                <div class="item-img view-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/calender.jpg" alt="">
                </div>
                <div class="item-desc">
                  <p class="c-txt-sm">
                    お帰りの際、次回のご予約(3ヵ月先まで)を承っております。
                  </p>
                  <p class="c-txt-sm">
                    ＊キャンセルの場合は、お電話にてご一報くださいますよう、お願いいたします。
                  </p>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="more-btn item">
          <a href=" <?php echo esc_url( home_url('/faq')); ?>" class="more-btn__link slide-bg animsition-link">
            <span class="c-txt-sm">よくあるご質問</span>
            <span class="bg"></span></a>
        </div>
      </section>
      <!-- /.c-flow -->
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