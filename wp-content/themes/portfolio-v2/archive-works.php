<?php get_header(); ?>
<main id="archive-works" class="pages-main archive-main">
  <div class="section_bg">
    <div></div>
    <div></div>
    <div></div>
  </div>
  <div class="w-1200">
    <h2 class="pages-title">
      Works
      <span class="sub">今までのサイト制作実績</span>
    </h2>
    <ul class="archive-list">
      <?php
      if (wp_is_mobile()) {
        $num = -1; // スマホの表示数(全件は-1)
      } else {
        $num = -1; // PCの表示数(全件は-1)
      }
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = [
        'post_type' => 'works', // カスタム投稿の投稿タイプスラッグ
        'paged' => $paged, // ページネーションがある場合に必要
        'posts_per_page' => $num, // 表示件数
      ];
      $wp_query = new WP_Query($args);
      if (have_posts()): while (have_posts()): the_post();
      ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="archive-img">
                <?php the_post_thumbnail('full') ?>
              </div>
              <p><?php the_title(); ?></p>
            </a>
          </li>
        <?php endwhile;
      else: ?>
      <?php endif ?>
      <?php wp_reset_postdata(); ?>
  </div>
  </div>
</main>
<?php get_footer(); ?>