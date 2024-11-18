const headerMenu = document.querySelector(".header-menu");
const menuBtn = document.querySelector(".header-menu_btn");
const menuBtnText = document.querySelector(".header-menu_btn .menu-text");
const menuListLink = document.querySelectorAll(".header-menu_list a");

const mediaQueryMenu = window.matchMedia("(max-width: 699px)");

const menuToggle = () => {
  headerMenu.classList.toggle("open");

  if (headerMenu.classList.contains("open")) {
    menuBtnText.textContent = "CLOSE";
  } else {
    menuBtnText.textContent = "MENU";
  }
};

const menuClose = () => headerMenu.classList.remove("open");

const listenerMenu = (event) => {
  // リサイズ時に行う処理
  if (event.matches) {
    menuBtn.addEventListener("click", menuToggle);
  } else {
    menuClose();
    menuBtn.removeEventListener("click", menuToggle);
  }
};
// リスナー登録
mediaQueryMenu.addEventListener("change", listenerMenu);

// 初期化処理
listenerMenu(mediaQueryMenu);

// メニューリンククリック時
menuListLink.forEach((link) => {
  link.addEventListener("click", () => {
    menuClose();
  });
});
