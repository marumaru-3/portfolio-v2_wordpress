<?php get_header(); ?>
<main>
  <section id="top">
    <p class="top-text">
      どのデバイスでも使いやすい<br class="top-text_br" />サイト制作を心がけています
    </p>
    <div class="section_bg">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="window-click-contents window-modal-open">
      <img src="<?php echo get_theme_file_uri('/images/top/visual/visual-sp.svg'); ?>"
        alt="詳しくはこちらをクリック！" />
    </div>
    <div class="window-modal">
      <div class="modal-close window-modal-close">×</div>
      <div class="window-contents window-contents-main pc-view">
        <ul class="tab-menu">
          <li class="tab-menu_item tab-menu_switch">
            <span class="material-symbols-outlined"> devices </span>
          </li>
          <?php
          $args = [
            'post_type' => 'works',
            'tax_query' => array(
              array(
                'taxonomy' => 'works-category', // タクソノミーのスラッグ
                'terms' => 'top-window', // タームのスラッグ
                'field' => 'slug',
              ),
            )
          ];
          $wp_query = new WP_Query($args);
          if (have_posts()): while (have_posts()): the_post();
          ?>
              <li class="tab-menu_item tab<?php echo $wp_query->current_post == 0 ? " is-active" : ""; ?>">
                <div class="item_inner">
                  <span class="material-symbols-outlined">globe</span>
                  <span class="tab-text"><?php the_title(); ?></span>
                  <div class="tab-menu_line"></div>
                </div>
              </li>
            <?php endwhile; ?>
          <?php endif ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <?php
        $args = [
          'post_type' => 'works',
          'tax_query' => array(
            array(
              'taxonomy' => 'works-category', // 制作実績カテゴリー
              'terms' => 'top-window', // トップウィンドウ表示
              'field' => 'slug',
            ),
          )
        ];
        $wp_query = new WP_Query($args);
        if (have_posts()): while (have_posts()): the_post();
        ?>
            <div class="tab-content<?php echo $wp_query->current_post == 0 ? " is-display" : ""; ?>">
              <img class="pc-view"
                src="<?php the_field('pc_img01'); ?>"
                alt=""
                loading="lazy" />
              <img class="sp-view"
                src="<?php the_field('sp_img01'); ?>"
                alt=""
                loading="lazy" />
            </div>
          <?php endwhile; ?>
        <?php endif ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <section id="about">
    <div class="w-1200">
      <div class="section_bg pc-none">
        <div></div>
        <div></div>
      </div>
      <div class="about-flex">
        <div class="about-left">
          <div class="title-circle">
            <h2>
              About
              <span>私について</span>
            </h2>
          </div>
          <div class="img-circle">
            <img src="<?php echo get_theme_file_uri('./images/top/about/about-img.webp'); ?>"
              alt="" />
          </div>
          <div class="section_bg tb-none">
            <div></div>
            <div></div>
          </div>
        </div>
        <div class="about-right">
          <div class="about-text-contents">
            <div class="about-text">
              <h3>
                Suzuki Yukinaga
                <span class="tiny">鈴木　幸長</span>
              </h3>
              <p>
                2000年1月15日生まれ。愛知県在住。<br />
                高校卒業後は山崎製パン株式会社に入社し、名古屋工場にて製造業に従事。機械オペレーターやライン作業員、現場リーダーを担当。<br />
                退職後、職業訓練のWebデザイナー科でWebページの作成に楽しさとやりがいを感じ、現職である株式会社アンドアイに入社。<br />
                現在はWeb制作部でコーダー業務に従事。主に公営競技のLPや特設サイト、企業のホームページ制作、自社のECサイト制作運用を担当。
              </p>
            </div>
            <div class="about-text">
              <h4>
                Web制作に興味を抱いた<span class="in-bl">きっかけ</span>
              </h4>
              <p>
                以前工場勤務をしていたときに、漠然とクリエイティブな仕事がしたいと思っていました。そのとき色々な仕事を調べていく中で出会ったのがWeb制作です。パソコン1台あればどこでも好きな場所で働けるという点が、工場勤務で寮生活という閉鎖空間で働いていた自分にとってすごく魅力的に思いました。<br />
                それから仕事を退職し、プログラミングスクールや職業訓練のWebデザイナー科にて、Web制作のデザインからコーディングまで色々学び、Webサイトを制作していく中で、コードを書いていく楽しさに気づきました。
              </p>
            </div>
            <div class="about-text">
              <h4>
                Web制作をしていく上での<span class="in-bl">こだわり</span>
              </h4>
              <ul class="about-text_list">
                <li>
                  <h5 class="list-num-title">
                    <span class="num">1.</span>
                    <span class="title">
                      どのデバイスサイズでも<span class="in-bl">見やすいサイトを意識</span>
                    </span>
                  </h5>
                  <p>
                    一般的なスマートフォンの横幅より少し小さい360px以上のデバイスサイズからのレスポンシブ対応を行っており、それ以上の画面幅のデバイスで最適な見やすさを意識してサイトを制作しております。
                  </p>
                </li>
                <li>
                  <h5 class="list-num-title">
                    <span class="num">2.</span>
                    <span class="title">サイトの表示速度</span>
                  </h5>
                  <p>
                    重いサイトを開くとローディングがどうしても長くなってしまい、そのせいでユーザーが離脱してしまうことがよくあります。そんな事態を避けるため、画像の軽量化や外部ライブラリの使用を制限するなどの対処を行っております。
                  </p>
                </li>
                <li>
                  <h5 class="list-num-title">
                    <span class="num">3.</span>
                    <span class="title">
                      サイト運用を前提に考えた<span class="in-bl">コーディング</span>
                    </span>
                  </h5>
                  <p>
                    更新が頻繁にあるページやクライアントが更新するページには、CSVファイルやWordPressの場合には（カスタム）投稿ページにて、簡単に更新が出来るような仕組み化を行っています。<br />
                    また、コードの修正を容易にするため、自分以外のコーダーが修正を対応してもわかりやすいコーディングを意識しています。
                  </p>
                </li>
              </ul>
            </div>
            <div class="about-text">
              <h4>趣味・好きなもの</h4>
              <ul class="about-text_list">
                <li>
                  <h5>散歩</h5>
                  <p>
                    外の空気や音を感じて景色を楽しんでいます。散歩をすると心が落ち着くので大好きです。
                  </p>
                </li>
                <li>
                  <h5>筋トレ</h5>
                  <p>
                    週4でチョコザップに通い、毎日腕立て伏せと腹筋をしています。適度に効く程度くらいが好きです。
                  </p>
                </li>
                <li>
                  <h5>食べること</h5>
                  <p>
                    お寿司やラーメン、カレーや唐揚げが好きです。食べ放題のお店に行くと元を取りたくなります。
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="skills"
    class="bubbles-contents">
    <div class="w-1200">
      <p class="skill-info">
        各スキル項目をクリックして<span class="in-bl">詳細表示</span>
      </p>
      <h2>
        Skills
        <span>制作スキル</span>
      </h2>
      <ul class="skill-bubbles">
        <li data-skill="html-css">
          <img src="<?php echo get_theme_file_uri('/images/top/skills/css-logo.png'); ?>" alt="">
          <span class="skill-text">HTML/CSS</span>
        </li>
        <li data-skill="js">
          <img src="<?php echo get_theme_file_uri('/images/top/skills/js-logo.png'); ?>" alt="">
          <span class="skill-text">JavaScript</span>
        </li>
        <li data-skill="vue-js">
          <img src="<?php echo get_theme_file_uri('/images/top/skills/vue-logo.png'); ?>" alt="">
          <span class="skill-text">Vue.js</span>
        </li>
        <li data-skill="php">
          <img src="<?php echo get_theme_file_uri('/images/top/skills/php-logo.png'); ?>" alt="">
          <span class="skill-text">PHP</span>
        </li>
        <li data-skill="wordpress">
          <img src="<?php echo get_theme_file_uri('/images/top/skills/wp-logo.png'); ?>" alt="">
          <span class="skill-text">WordPress</span>
        </li>
        <li data-skill="shopify">
          <img src="<?php echo get_theme_file_uri('/images/top/skills/shopify-logo.png'); ?>" alt="">
          <span class="skill-text">Shopify</span>
        </li>
        <li data-skill="studio">
          <img src="<?php echo get_theme_file_uri('/images/top/skills/studio-logo.jpg'); ?>" alt="">
          <span class="skill-text">Studio</span>
        </li>
      </ul>
      <div class="skill-detail">
        <div id="html-css"
          class="skill-detail_contents">
          <h3>HTML/CSS</h3>
          <p>
            どのデザインでもWebページ上に構築することができます。<br />
            レスポンシブ対応も360px以上の画面幅から対応し、それ以上の画面幅のデバイスで最適な見やすさを意識してサイトを制作しています。<br />
            自分以外の方がコードを修正する場合でもわかりやすいように記述することを心がけています。
          </p>
        </div>
        <div id="js"
          class="skill-detail_contents">
          <h3>JavaScript</h3>
          <p>
            Webページに動きを付けるためのアニメーションや、モーダルなどの表示を対応できます。外部のJavaScriptライブラリを使用する場面も多いですが、使用しすぎた場合サイトの表示速度低下に繋がるため、自分で構築できる箇所は出来るだけライブラリを使用しないようにしています。<br />
            コード量を減らすために効率的な記述を意識しています。
          </p>
        </div>
        <div id="vue-js"
          class="skill-detail_contents">
          <h3>Vue.js</h3>
          <p>
            趣味でWebアプリを制作する際に使用しています。JavaScriptでは記述が複雑になるDOM要素の操作を容易にしてくれるため採用しました。<br />
            現在はViteで開発環境を構築して制作しています。まだまだ勉強中です。
          </p>
        </div>
        <div id="php"
          class="skill-detail_contents">
          <h3>PHP</h3>
          <p>
            現在勤めている会社で、サイト制作やWordPress開発のときに使用しています。主にPHPファイルを使用してWebページを表示させることが多いです。HTML構文の中にPHPを差し込めるため、コンポーネント化やCSVファイルからの読み込み、if文やfor文、関数を使用してコードを効率化したい場面などで活用しています。
          </p>
        </div>
        <div id="wordpress"
          class="skill-detail_contents">
          <h3>WordPress</h3>
          <p>
            有料テーマを使った制作、オリジナルテーマ制作どちらにも対応できます。<br />
            プラグインの使用を必要最低限にすることでページの表示速度への影響を減らしたり、コードの保守性を高めるように心がけています。<br />
            またサイト制作のみならず、セキュリティ対策や投稿マニュアルの作成、Google
            Analyticsなどへの紐づけも行います。
          </p>
        </div>
        <div id="shopify"
          class="skill-detail_contents">
          <h3>Shopify</h3>
          <p>
            既存のテーマを使用した制作に対応できます。<br />
            テンプレートやセクション、スニペットは要望通りのデザインや機能のものを制作できます。既存の商品ページにデザインを変更したい、機能を追加したいといった要望も対応可能です。<br />
            Shopifyの専用言語であるLiquidを使用したカスタマイズも可能です。<br />
            現在は勤め先のピアノ販売のECサイトにて使用されており、制作運営を担当しています。
          </p>
        </div>
        <div id="studio"
          class="skill-detail_contents">
          <h3>Studio（ノーコードツール）</h3>
          <p>
            デザインカンプをもとにノーコードでサイト制作が出来ます。そのためシンプルなデザインの場合は短納期での制作が可能です。
            スクロール位置や向きによって動作を制御したいなど、JavaScriptを使用した操作が必要な場合には、有料プラン契約していただくことにより可能です。<br />
            最近ではWordPressに代わってStudioで制作する案件が増えてきました。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="works">
    <div class="section_bg">
      <div></div>
      <div></div>
    </div>
    <div class="w-1200">
      <h2>
        Works
        <span>今までのサイト制作実績</span>
      </h2>
      <p class="works-att">※こちらの制作事例はあくまで参照ですので、データの印刷等は御控えください。</p>
      <div class="works-box_wrapper">
        <?php
        $args = [
          'post_type' => 'works',
          'tax_query' => array(
            array(
              'taxonomy' => 'works-category', // 制作実績カテゴリー
              'terms' => 'top-works', // トップ実績掲載
              'field' => 'slug',
            ),
          )
        ];
        $wp_query = new WP_Query($args);
        if (have_posts()): while (have_posts()): the_post();
        ?>
            <div class="works-box">
              <div class="works-info">
                <div class="works-info_contents">
                  <h3><?php the_title(); ?></h3>
                  <div class="works-img">
                    <?php the_post_thumbnail('full') ?>
                  </div>
                  <p class="works-text">
                    <?php the_field('overview'); ?>
                  </p>
                </div>
                <div class="point-box">
                  <div class="point-box_inner">
                    <h4>制作のポイント</h4>
                    <p>
                      <?php the_field('point'); ?>
                    </p>
                    <a class="btn"
                      href="<?php the_permalink(); ?>">詳細を見る</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <a href="<?php echo esc_url(home_url('/')); ?>works"
        class="btn works-btn">制作実績をもっと見る</a>
    </div>
  </section>
  <section id="web-app">
    <div class="w-1200">
      <div class="section_bg">
        <div></div>
        <div></div>
      </div>
      <h2>
        Web Application
        <span>趣味で作ったウェブアプリ</span>
      </h2>
      <?php
      $args = [
        'post_type' => 'web-app',
        'name' => 'web-app01'
      ];
      $wp_query = new WP_Query($args);
      if (have_posts()): the_post();
      ?>
        <div class="web-app-box">
          <h3><?php the_title(); ?></h3>
          <div class="web-app-flex">
            <div class="web-app-flex_left">
              <h4>
                0秒思考メモを<span class="in-bl">Webで簡単にアウトプット</span>
                <span class="in-bl">即断力を高めよう</span>
              </h4>
              <p>
                <?php the_field('overview'); ?>
              </p>
              <a href="<?php the_permalink(); ?>"
                class="btn">詳細を見る</a>
            </div>
            <div class="web-app-flex_right">
              <div class="web-app-img">
                <?php the_post_thumbnail('full') ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
      <?php wp_reset_postdata(); ?>
      <div class="other-group">
        <h4>その他のWebアプリ</h4>
        <ul class="other-list">
          <?php
          // 現在の投稿IDを取得
          $current_post_id = 'web-app01';

          // 現在の記事の投稿日時を取得
          $current_post_date = get_the_date('Y-m-d H:i:s', $current_post_id);

          // WP_Query で前の記事を最大3つ取得
          $args_previous = array(
            'post_type'      => 'web-app',  // カスタム投稿タイプを指定
            'posts_per_page' => 3,       // 最大3つまで取得
            'post__not_in'   => array($current_post_id), // 現在の投稿を除外
            'orderby'        => 'date',  // 投稿日時順
            'order'          => 'DESC',  // 降順
            'post_status'    => 'publish', // 公開されている投稿のみ
            'date_query'     => array(
              array(
                'before' => $current_post_date, // 現在の記事の投稿日より前の記事を取得
              ),
            ),
          );

          $query_previous = new WP_Query($args_previous);

          // 取得した前の記事の数をカウント
          $previous_posts_count = $query_previous->found_posts;

          // 前の記事が3つ未満の場合、残りを最新記事で補充
          $remaining_posts_count = max(0, 3 - $previous_posts_count);

          // 前の記事が3件未満で、残りを最新記事で補充する場合のみ最新記事を取得
          $args_latest = array();
          if ($remaining_posts_count > 0) {
            $args_latest = array(
              'post_type'      => 'web-app', // カスタム投稿タイプを指定
              'posts_per_page' => $remaining_posts_count, // 前の記事が足りない場合にその数だけ取得
              'orderby'        => 'date',
              'order'          => 'DESC',
              'post_status'    => 'publish',
            );
          }

          $query_latest = new WP_Query($args_latest);

          // 前の記事を表示
          if ($query_previous->have_posts()) :
            while ($query_previous->have_posts()) : $query_previous->the_post();
          ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="other-img">
                    <?php the_post_thumbnail('full') ?>
                  </div>
                  <p><?php the_title(); ?></p>
                </a>
              </li>
            <?php
            endwhile;
            wp_reset_postdata(); // クエリ後にリセット
          endif;

          // 最新の記事を表示（前の記事の後に表示）
          if ($query_latest->have_posts()) :
            while ($query_latest->have_posts()) : $query_latest->the_post();
            ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="other-img">
                    <?php the_post_thumbnail('full') ?>
                  </div>
                  <p><?php the_title(); ?></p>
                </a>
              </li>
          <?php
            endwhile;
            wp_reset_postdata(); // クエリ後にリセット
          endif;
          ?>
          <p class="scroll-att pc-none">
            <span class="scroll-att_inner">
              Scroll <span class="material-symbols-outlined">
                arrow_forward_ios
              </span>
            </span>
          </p>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>