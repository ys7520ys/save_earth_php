// 앵커 스무스 - 상단 이동
$('header a, .btn-gototop').click(function(){
  $.scrollTo(this.hash || 0, 500);
})

// 앵커 체인지 - 각 섹션으로 이동
gsap.registerPlugin(ScrollToPlugin);
const sections = document.querySelectorAll(".section");
let currentIndex = 0;
let isScrolling = false;
const scrollToSection = (index) => {
  if (index < 0 || index >= sections.length) return;
  isScrolling = true;
  gsap.to(window, {
    scrollTo: sections[index],
    duration: 0.5,
    ease: "power1.inOut",
    onComplete: () => {
      currentIndex = index; 
      isScrolling = false; 
    },
  });
};
window.addEventListener("wheel", (event) => {
  if (isScrolling) return;
  if (event.deltaY > 0) {
    scrollToSection(currentIndex + 1);
  } else {
    scrollToSection(currentIndex - 1); 
  }
});