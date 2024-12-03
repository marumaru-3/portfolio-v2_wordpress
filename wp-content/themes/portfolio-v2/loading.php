<?php if (is_front_page()) : ?>
  <div id="loading"
    class="loading-wrapper">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <div class="icon-group">
      <div class="icon fire">
        <span class="material-symbols-outlined"> local_fire_department </span>
        <p>Challenge</p>
      </div>
      <div class="icon laptop">
        <span class="material-symbols-outlined"> laptop_windows </span>
        <p>Coding</p>
      </div>
      <div class="icon smile">
        <span class="material-symbols-outlined"> sentiment_satisfied </span>
        <p>Charming</p>
      </div>
    </div>
  </div>

  <script>
    // セッションストレージからフラグを取得
    const isFirstLoad = sessionStorage.getItem('isFirstLoad');

    const loading = document.getElementById('loading');

    window.addEventListener('load', () => {
      if (isFirstLoad !== 'true') {
        loading.classList.add('load-end');

        setTimeout(() => {
          loading.classList.add('hide');
          // セッションストレージにフラグを保存
          sessionStorage.setItem('isFirstLoad', true);
        }, 3000)

      } else {
        loading.classList.add('hide');
      }
    }, false);
  </script>
<?php endif; ?>