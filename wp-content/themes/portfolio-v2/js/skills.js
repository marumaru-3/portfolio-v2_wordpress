const skillBubbles = document.querySelectorAll("#skills .skill-bubbles li");
const skillDetail = document.querySelector("#skills .skill-detail");
const skillDetailContents = document.querySelectorAll(
  "#skills .skill-detail_contents"
);

skillBubbles.forEach((skillBubble) => {
  skillBubble.addEventListener("click", () => {
    if (!skillDetail.classList.contains("show")) {
      skillDetail.classList.add("show");
    }
    skillDetailContents.forEach((content) => {
      if (skillBubble.dataset.skill === content.getAttribute("id")) {
        content.classList.add("show");
      } else {
        content.classList.remove("show");
      }
    });
    skillDetail.scrollIntoView({
      block: "center",
      behavior: "smooth",
    });
  });
});
