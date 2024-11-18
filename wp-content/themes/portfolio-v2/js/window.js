// SP用モーダル
//要素を取得
const windowModal = document.querySelector(".window-modal"),
  windowOpen = document.querySelector(".window-modal-open"),
  windowClose = document.querySelector(".window-modal-close");
body = document.querySelector("body");

//「開くボタン」をクリックしてモーダルを開く
function modalOpen() {
  windowModal.classList.add("modal-active");
  body.classList.add("modal-active");
}
windowOpen.addEventListener("click", modalOpen);

//「閉じるボタン」をクリックしてモーダルを閉じる
function modalClose() {
  windowModal.classList.remove("modal-active");
  body.classList.remove("modal-active");
}
windowClose.addEventListener("click", modalClose);

//「モーダルの外側」をクリックしてモーダルを閉じる
function modalOut(e) {
  if (e.target === windowModal) {
    windowModal.classList.remove("modal-active");
    body.classList.remove("modal-active");
  }
}
addEventListener("click", modalOut);

const mediaQueryList = window.matchMedia("(min-width: 900px)");
const listener = (event) => {
  // リサイズ時に行う処理
  if (event.matches) {
    modalClose();
  }
};
// リスナー登録
mediaQueryList.addEventListener("change", listener);

// 初期化処理
listener(mediaQueryList);
// / SP用モーダル

// タブ切り替え
const targets = document.getElementsByClassName("tab");
const tabContents = document.querySelectorAll(".tab-content");
for (let i = 0; i < targets.length; i++) {
  targets[i].addEventListener("click", changeTab, false);
}
// タブメニューボタンをクリックすると実行
function changeTab() {
  // タブのclassを変更
  document.getElementsByClassName("is-active")[0].classList.remove("is-active");
  this.classList.add("is-active");
  // コンテンツのclassの値を変更
  document
    .getElementsByClassName("is-display")[0]
    .classList.remove("is-display");
  const arrayTabs = Array.prototype.slice.call(targets);
  const index = arrayTabs.indexOf(this);
  document
    .getElementsByClassName("tab-content")
    [index].classList.add("is-display");

  // スクロール位置戻す
  tabContents.forEach((tabContent) => {
    tabContent.scrollTop = 0;
  });
}
// / タブ切り替え

// タブPC・SP表示切り替え
const tabSwitch = document.querySelector(".tab-menu_switch");
const windowContents = document.querySelector(".window-contents");
tabSwitch.addEventListener("click", () => {
  if (windowContents.classList.contains("pc-view")) {
    windowContents.classList.remove("pc-view");
    windowContents.classList.add("sp-view");
  } else {
    windowContents.classList.remove("sp-view");
    windowContents.classList.add("pc-view");
  }
  // スクロール位置戻す
  tabContents.forEach((tabContent) => {
    tabContent.scrollTop = 0;
  });
});
// / タブPC・SP表示切り替え
