<?php
 /* Template Name: contact
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>事業案内 | エステテンプレート1</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper c-contact">
    <div class="pageBg">
      <span class="lines"> </span>
      <span class="txt">Riv<br />estesalon</span>
    </div>
    <!-- /.pageBg -->
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.header -->
    <section class="c-topview">
      <div class="c-topview__img">
        <img src="/images/home/top_1@pc.jpg" alt="">
      </div>
      <div class="c-container">
        <h2 class="c-title">
          <span class="en">contact</span>
          <span class="ja">お問い合わせ</span>
        </h2>
        <p class="c-txt-sm">初めての方、<br>まずはお気軽に体験してみませんか？<br>経験豊富なエステティシャンが丁寧にご案内いたします。</p>
      </div>
    </section>
    <!-- /.c-topview -->
    <div class="contact-form">
      <div class="c-container">
        <p class="c-contact-text">以下必要事項をご記入の上、「送信する」ボタンを押して下さい。</p>
        <div role="form" class="wpcf7" id="wpcf7-f13-o1" lang="ja" dir="ltr">
          <div class="screen-reader-response">
            <p role="status" aria-live="polite" aria-atomic="true"></p>
            <ul></ul>
          </div>
          <form action="/contact/#wpcf7-f13-o1" method="post" class="wpcf7-form init" novalidate="novalidate"
            data-status="init">
            <div style="display: none;">
              <input type="hidden" name="_wpcf7" value="13">
              <input type="hidden" name="_wpcf7_version" value="5.5.1">
              <input type="hidden" name="_wpcf7_locale" value="ja">
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f13-o1">
              <input type="hidden" name="_wpcf7_container_post" value="0">
              <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <dl class="ct-name">
              <dt class="must">氏名</dt>
              <dd><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                    aria-invalid="false" placeholder="田中　太郎"></span></dd>
            </dl>
            <dl class="ct-mail">
              <dt class="must">メールアドレス</dt>
              <dd><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value=""
                    size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                    aria-required="true" aria-invalid="false" placeholder="example@mail.com"></span>
              </dd>
              <dd>
              </dd>
            </dl>
            <dl class="ct-tel">
              <dt class="must">電話番号</dt>
              <dd><span class="wpcf7-form-control-wrap tel-42"><input type="tel" name="tel-42" value="" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                    aria-required="true" aria-invalid="false" placeholder="0120-123-456"></span>
              </dd>
              <dd>
              </dd>
            </dl>
            <dl class="ct-request">
              <dt class="must">希望(ご選択下さい)</dt>
              <dd><span class="wpcf7-form-control-wrap menu-802"><select name="menu-802"
                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true"
                    aria-invalid="false">
                    <option value="">---</option>
                    <option value="無料体験">無料体験</option>
                    <option value="無料見学">無料見学</option>
                    <option value="入会手続き">入会手続き</option>
                    <option value="お問い合わせ">お問い合わせ</option>
                  </select></span></dd>
            </dl>
            <div class="ct-flex">
              <dl class="ct-sex">
                <dt class="must">性別</dt>
                <dd><span class="wpcf7-form-control-wrap menu-72"><select name="menu-72"
                      class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true"
                      aria-invalid="false">
                      <option value="男性">男性</option>
                      <option value="女性">女性</option>
                    </select></span></dd>
              </dl>
              <dl class="ct-age">
                <dt class="free">年齢</dt>
                <dd>
                  <span class="wpcf7-form-control-wrap menu-802"><select name="menu-802"
                      class="wpcf7-form-control wpcf7-select age" aria-invalid="false">
                      <option value="">---</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>
                      <option value="39">39</option>
                      <option value="40">40</option>
                      <option value="41">41</option>
                      <option value="42">42</option>
                      <option value="43">43</option>
                      <option value="44">44</option>
                      <option value="45">45</option>
                      <option value="46">46</option>
                      <option value="47">47</option>
                      <option value="48">48</option>
                      <option value="49">49</option>
                      <option value="50">50</option>
                      <option value="51">51</option>
                      <option value="52">52</option>
                      <option value="53">53</option>
                      <option value="54">54</option>
                      <option value="55">55</option>
                      <option value="56">56</option>
                      <option value="57">57</option>
                      <option value="58">58</option>
                      <option value="59">59</option>
                      <option value="60">60</option>
                      <option value="61">61</option>
                      <option value="62">62</option>
                      <option value="63">63</option>
                      <option value="64">64</option>
                      <option value="65">65</option>
                      <option value="66">66</option>
                      <option value="67">67</option>
                      <option value="68">68</option>
                      <option value="69">69</option>
                      <option value="70">70</option>
                    </select></span></dd>
              </dl>
            </div>
            <div class="ct-flex">
              <dl class="ct-date">
                <dt class="free">予約希望日</dt>
                <dd><span class="wpcf7-form-control-wrap date-487"><input type="date" name="date-487" value=""
                      class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false"></span></dd>
              </dl>
              <dl class="ct-time">
                <dt class="free">時間</dt>
                <dd><span class="wpcf7-form-control-wrap menu-802"><select name="menu-802"
                      class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                      <option value="">---</option>
                      <option value="9:00">9:00</option>
                      <option value="9:30">9:30</option>
                      <option value="10:00">10:00</option>
                      <option value="10:30">10:30</option>
                      <option value="11:00">11:00</option>
                      <option value="11:30">11:30</option>
                      <option value="12:00">12:00</option>
                      <option value="12:30">12:30</option>
                      <option value="13:00">13:00</option>
                      <option value="13:30">13:30</option>
                      <option value="14:00">14:00</option>
                      <option value="14:30">14:30</option>
                      <option value="15:00">15:00</option>
                      <option value="15:30">15:30</option>
                      <option value="16:00">16:00</option>
                      <option value="16:30">16:30</option>
                      <option value="17:00">17:00</option>
                      <option value="17:30">17:30</option>
                      <option value="18:00">18:00</option>
                      <option value="18:30">18:30</option>
                      <option value="19:00">19:00</option>
                      <option value="19:30">19:30</option>
                      <option value="20:00">20:00</option>
                    </select></span></dd>
              </dl>
            </div>
            <dl class="ct-other">
              <dt class="free">備考・特に気になる事</dt>
              <dd><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10"
                    class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </dd>
            </dl>
            <p class="privacy"><span class="wpcf7-form-control-wrap acceptance-377"><span
                  class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><input type="checkbox"
                      name="acceptance-377" value="1" aria-invalid="false"></span></span></span><a href="/privacy"
                class="ms-1">プライバシーポリシー</a>に同意する</p>
            <div class="submit-btn"><input type="submit" value="送信" class="wpcf7-form-control has-spinner wpcf7-submit"
                disabled=""><span class="wpcf7-spinner"></span></div>
            <p>
              <script>
                document.addEventListener('wpcf7mailsent', function (event) {
                  location = 'http://example.com/';
                }, false);
              </script>
            </p>
            <div class="inv-recaptcha-holder">
              <div class="grecaptcha-badge" data-style="inline"
                style="width: 256px; height: 60px; box-shadow: gray 0px 0px 5px;">
                <div class="grecaptcha-logo"><iframe title="reCAPTCHA"
                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le07ogcAAAAAJZJdKDJh2v430Ueglm7oj-l1mI4&amp;co=aHR0cDovL2hhaXJzYWxvbjMubG9jYWw6ODA.&amp;hl=ja&amp;v=qljbK_DTcvY1PzbR7IG69z1r&amp;size=invisible&amp;badge=inline&amp;cb=ksa2h786c3lu"
                    width="256" height="60" role="presentation" name="a-62516w9kx0ep" frameborder="0" scrolling="no"
                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                </div>
                <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
              </div><iframe style="display: none;"></iframe>
            </div>
            <div class="wpcf7-response-output" aria-hidden="true"></div>
          </form>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
</body>

</html>