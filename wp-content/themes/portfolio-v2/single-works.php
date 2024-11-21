<?php get_header(); ?>
<main id="single-works"
      class="pages-main single-main">
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
  <div class="single-top">
    <div class="section_bg">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="window-click-contents window-modal-open">
      <?php the_post_thumbnail('full') ?>
    </div>
    <div class="window-modal">
      <div class="modal-close window-modal-close">×</div>
      <div class="window-contents window-contents-works pc-view">
        <ul class="tab-menu">
          <li class="tab-menu_item tab-menu_switch">
            <span class="material-symbols-outlined">devices</span>
          </li>
          <li class="tab-menu_item tab is-active">
            <div class="item_inner">
              <span class="material-symbols-outlined">globe</span>
              <span class="tab-text"><?php the_field('pc_text01'); ?> | <?php the_title(); ?></span>
              <div class="tab-menu_line"></div>
            </div>
          </li>
          <li class="tab-menu_item tab">
            <div class="item_inner">
              <span class="material-symbols-outlined">globe</span>
              <span class="tab-text"><?php the_field('pc_text02'); ?> | <?php the_title(); ?></span>
              <div class="tab-menu_line"></div>
            </div>
          </li>
          <li class="tab-menu_item tab">
            <div class="item_inner">
              <span class="material-symbols-outlined">globe</span>
              <span class="tab-text"><?php the_field('pc_text03'); ?> | <?php the_title(); ?></span>
              <div class="tab-menu_line"></div>
            </div>
          </li>
          <li class="tab-menu_item tab">
            <div class="item_inner">
              <span class="material-symbols-outlined">globe</span>
              <span class="tab-text"><?php the_field('pc_text04'); ?> | <?php the_title(); ?></span>
              <div class="tab-menu_line"></div>
            </div>
          </li>
        </ul>
        <div class="tab-content is-display">
          <img class="pc-view"
               src="<?php the_field('pc_img01'); ?>"
               alt=""
               loading="lazy" />
          <img class="sp-view"
               src="<?php the_field('sp_img01'); ?>"
               alt=""
               loading="lazy" />
        </div>
        <div class="tab-content">
          <img class="pc-view"
               src="<?php the_field('pc_img02'); ?>"
               alt=""
               loading="lazy" />
          <img class="sp-view"
               src="<?php the_field('sp_img02'); ?>"
               alt=""
               loading="lazy" />
        </div>
        <div class="tab-content">
          <img class="pc-view"
               src="<?php the_field('pc_img03'); ?>"
               alt=""
               loading="lazy" />
          <img class="sp-view"
               src="<?php the_field('sp_img03'); ?>"
               alt=""
               loading="lazy" />
        </div>
        <div class="tab-content">
          <img class="pc-view"
               src="<?php the_field('pc_img04'); ?>"
               alt=""
               loading="lazy" />
          <img class="sp-view"
               src="<?php the_field('sp_img04'); ?>"
               alt=""
               loading="lazy" />
        </div>
      </div>
    </div>
    <p class="single-att">※画像をタップでページ一覧が確認できます</p>
    <h2 class="single-title"><?php the_title(); ?></h2>
  </div>
  <div class="single-info works-info">
    <div class="w-1200">
      <div class="single-info_flex">
        <div class="single-info_left">
          <ul>
            <?php if (get_field('work_date')) : ?>
            <li>
              <h3>制作期間</h3>
              <p>
                <?php the_field('work_date'); ?>
              </p>
            </li>
            <?php endif; ?>
            <?php if (get_field('pic')) : ?>
            <li>
              <h3>担当領域</h3>
              <p>
                <?php the_field('pic'); ?>
              </p>
            </li>
            <?php endif; ?>
            <?php if (get_field('use_tool')) : ?>
            <li>
              <h3>使用言語・ツール</h3>
              <p>
                <?php the_field('use_tool'); ?>
              </p>
            </li>
            <?php endif; ?>
            <?php if (get_field('team')) : ?>
            <li>
              <h3>制作体制</h3>
              <p>
                <?php the_field('team'); ?>
              </p>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="single-info_right">
          <ul>
            <?php if (get_field('url')) : ?>
            <li>
              <h3>サイトURL</h3>
              <p>
                <a href="<?php the_field('url'); ?>"
                   target="_blank"><?php the_field('url'); ?></a>
              </p>
            </li>
            <?php endif; ?>
            <?php if (get_field('overview')) : ?>
            <li>
              <h3>概要</h3>
              <p>
                <?php the_field('overview'); ?>
              </p>
            </li>
            <?php endif; ?>
            <?php if (get_field('purpose')) : ?>
            <li>
              <h3>顧客の目的・課題</h3>
              <p>
                <?php the_field('purpose'); ?>
              </p>
            </li>
            <?php endif; ?>
            <?php if (get_field('point')) : ?>
            <li>
              <h3>制作のポイント</h3>
              <p>
                <?php the_field('point'); ?>
              </p>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="other-works">
    <div class="w-1200">
      <div class="other-group">
        <h3>
          Other Works
          <span>その他の制作実績</span>
        </h3>
        <ul class="other-list">
          <li>
            <div class="other-img">
              <img src="<?php echo get_theme_file_uri('/images/top/web-app/app-sample.webp'); ?>"
                   alt="" />
            </div>
            <p>ホームページタイトル | 省略名称</p>
          </li>
          <li>
            <div class="other-img">
              <img src="<?php echo get_theme_file_uri('/images/top/web-app/app-sample.webp'); ?>"
                   alt="" />
            </div>
            <p>ホームページタイトル | 省略名称</p>
          </li>
          <li>
            <div class="other-img">
              <img src="<?php echo get_theme_file_uri('/images/top/web-app/app-sample.webp'); ?>"
                   alt="" />
            </div>
            <p>ホームページタイトル | 省略名称</p>
          </li>
        </ul>
        <a href="#"
           class="btn works-btn">制作実績をもっと見る</a>
      </div>
    </div>
  </div>
  <?php endwhile;
  endif; ?>
</main>
<?php get_footer(); ?>