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
    const loading = document.getElementById('loading');

    window.addEventListener('load', () => {
      loading.classList.add('load-end');

      setTimeout(() => {
        loading.classList.add('hide');
      }, 3000)
    }, false);
  </script>
<?php endif; ?>