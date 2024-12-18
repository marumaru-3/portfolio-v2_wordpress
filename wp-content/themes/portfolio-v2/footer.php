<footer>
  <div class="footer-inner">
    <div class="w-1200">
      <div class="footer-flex">
        <div class="footer-flex_left">
          <h2 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <span class="name"> 鈴木 幸長 | Suzuki Yukinaga </span>
              Web Portfolio
            </a>
          </h2>
          <ul class="footer-menu">
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>#about">About</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>#skills">Skills</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>works">Works</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>#web-app">Web App</a>
            </li>
          </ul>
        </div>
        <div class="footer-flex_right">
          <a href="https://github.com/marumaru-3"
            target="_blank"
            class="btn github">
            <p class="title">
              <img src="<?php echo get_theme_file_uri('./images/sns-logo/github-mark.svg'); ?>"
                alt="" />
            </p>
            <p class="sub">GitHub</p>
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>contact"
            class="btn contact">
            <p class="title">Contact Us</p>
            <p class="sub">お問い合わせ</p>
          </a>
        </div>
      </div>
      <p class="recaptcha-text">
        このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy">プライバシーポリシー</a>と<a href="https://policies.google.com/terms">利用規約</a>が<span class="in-bl">適用されます。</span>
      </p>
      <p class="copyright">© 2024 SUZUKI YUKINAGA.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>