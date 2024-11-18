<?php
/*
Template Name: お問い合わせ
*/
get_header();
?>
<main class="pages-main">
  <div class="section_bg">
    <div></div>
    <div></div>
    <div></div>
  </div>
  <div class="w-1200">
    <h2 class="pages-title">
      Contact
      <span class="sub">お問い合わせ</span>
    </h2>
    <article class="contact-form">
      <p class="form-info">
        ご不明点や気になることなどございましたらいつでもお気軽にお問い合わせください。<br>
        確認次第すぐに返信いたします。
      </p>
      <?php echo do_shortcode('[contact-form-7 id="ef2edbc" title="お問い合わせフォーム"]'); ?>
    </article>
  </div>
</main>
<?php get_footer(); ?>