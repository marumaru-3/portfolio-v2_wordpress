const contactCheck = document.querySelector(".check");
const soushinBtn = document.querySelector(".btn.soushin");

contactCheck.addEventListener("click", () => {
  if (soushinBtn.classList.contains("disabled")) {
    soushinBtn.classList.remove("disabled");
  } else {
    soushinBtn.classList.add("disabled");
  }
});
