const background = {};
const bubblesContents = document.querySelector(".bubbles-contents");

background.initializer = function () {
  // options
  this.id = "background_bubbles";
  this.style = {
    bubbles_color: "#fff",
    stroke_width: 0,
    stroke_color: "black",
  };
  this.bubbles_number = 30;
  this.speed = [4000, 12000];
  this.max_bubbles_height = this.height;
  this.shape = false;

  const elementExists = document.getElementById(this.id);
  if (elementExists) {
    elementExists.remove();
  }

  this.object = document.createElement("div");
  this.object.style =
    "z-index:0;margin:0;padding:0;overflow:hidden;position:absolute;bottom:0";
  this.object.id = this.id;
  bubblesContents.prepend(this.object);

  this.ww = window.innerWidth;
  this.wh = bubblesContents.offsetHeight;

  let timer = 0;
  window.addEventListener("resize", () => {
    if (timer > 0) {
      clearTimeout(timer);
    }
    timer = setTimeout(() => {
      this.ww = window.innerWidth;
      this.wh = bubblesContents.offsetHeight;
    }, 200);
  });
  this.object.style.width = "100%";
  this.object.style.height = "100%";

  const style = document.createElement("style");
  style.textContent = `
    .shape_background {
      transform-origin: center;
      width: 80px;
      height: 80px;
      background: ${this.style.bubbles_color};
      position: absolute;
    }
  `;
  document.head.appendChild(style);

  for (let i = 0; i < this.bubbles_number; i++) {
    this.generate_bubbles();
  }
};

background.generate_bubbles = function () {
  const base = document.createElement("div");
  base.classList.add("shape_background");

  let bolla;

  bolla = base;
  bolla.style.borderRadius = "50%";

  const rn_size = this.rn(0.2, 1.2);
  bolla.style.transform = `scale(${rn_size}) rotate(${this.rn(-360, 360)}deg)`;
  bolla.style.top = `${this.wh + 100}px`;
  bolla.style.left = `${this.rn(-60, this.ww + 60)}px`;

  this.object.appendChild(bolla);

  const animationDuration = this.rn(this.speed[0], this.speed[1]);
  bolla.animate(
    [
      { top: `${this.wh + 100}px`, opacity: 1 },
      { top: "10%", opacity: 0 },
    ],
    {
      duration: animationDuration,
      easing: "linear",
      fill: "forwards",
    }
  ).onfinish = () => {
    bolla.remove();
    this.generate_bubbles();
  };
};

background.rn = function (from, to) {
  return Math.random() * (to - from) + from;
};
background.initializer();
