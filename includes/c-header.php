    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class="logo__img">
          <a href=" <?php echo esc_url( home_url('/')); ?>">
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
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/first')); ?>"><span>初めての方へ</span>
                <small>FIRST</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/price')); ?>"><span>料金体系</span><small>PRICE</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href=" <?php echo esc_url( home_url('/staff')); ?>"><span>スタッフ紹介</span><small>STAFF</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span><small>FAQ</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span><small>NEWS</small></a>
            </li>
          </ul>
          <div class="pc-contact">
            <a class="pc-tel" href="tel:092-686-7954">0120-123-456</a>
            <a target="_blank" class="pc-net" href=" <?php echo esc_url( home_url('https://beauty.hotpepper.jp/')); ?>">オンライン予約</a>
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
            <a class="net" target="_blank" href=" <?php echo esc_url( home_url('https://beauty.hotpepper.jp/')); ?>">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>