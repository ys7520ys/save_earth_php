// ----------첫 번째 섹션 start----------
gsap.registerPlugin(ScrollTrigger);
gsap.fromTo(
".firstSection .section-title, .firstSection .section-subtitle, .firstSection .card-title, .firstSection .card-subtitle", 
{ opacity: 0, y: 100 }, 
{ 
  opacity: 1, 
  y: 0, 
  duration: 1, 
  scrollTrigger: {
    trigger: ".firstSection .section-title, .firstSection .section-subtitle, .firstSection .card-title, .firstSection .card-subtitle", 
    start: "top 70%",
    end: "top 50%", 
    scrub: 1,
    markers: false 
  }
}
);
gsap.fromTo(
  ".firstSection .img_box:nth-of-type(1)", 
  { opacity: 0, x: -300 }, 
  { 
    opacity: 1, 
    x: 0, 
    duration: 1, 
    scrollTrigger: {
      trigger: ".firstSection .img_box img", 
      start: "top 90%",
      end: "top 60%", 
      scrub: 1, 
      markers: false 
    }
  }
);
gsap.fromTo(
  ".firstSection .img_box:nth-of-type(2)", 
  { opacity: 0, x: 300 }, 
  { 
    opacity: 1, 
    x: 0, 
    duration: 1, 
    scrollTrigger: {
      trigger: ".firstSection .img_box img", 
      start: "top 90%",
      end: "top 60%", 
      scrub: 1, 
      markers: false 
    }
  }
);
// ----------첫 번째 섹션 end----------

// ----------두 번째 섹션 start----------
gsap.fromTo(
".secondSection .text_box", 
{ opacity: 0, x: 100 }, 
{ 
  opacity: 1, 
  x: 0, 
  duration: 1, 
  scrollTrigger: {
    trigger: ".secondSection .text_box", 
    start: "top 70%", 
    end: "top 60%", 
    scrub: 1,
    markers: false 
  }
}
);
gsap.fromTo(
  ".secondSection .img_box", 
  { opacity: 0, x: -100 },
  { 
    opacity: 1, 
    x: 0, 
    duration: 1, 
    scrollTrigger: {
      trigger: ".secondSection .img_box",
      start: "top 70%", 
      end: "top 60%", 
      scrub: 1, 
      markers: false 
    }
  }
);
// ----------두 번째 섹션 end----------

// ----------세 번째 섹션 start----------
gsap.fromTo(
  ".thirdSection .section-title, .thirdSection .section-subtitle", 
  { opacity: 0, y: 100 }, 
  { 
    opacity: 1, 
    y: 0, 
    duration: 1, 
    scrollTrigger: {
      trigger: ".thirdSection .section-title, .thirdSection .section-subtitle",
      start: "top 90%",
      end: "top 30%", 
      scrub: 1, 
      markers: false 
    }
  }
);
gsap.fromTo(
  ".thirdSection .card_box>div:nth-of-type(1)", 
  { opacity: 0, y: 200 }, 
  { 
    opacity: 1, 
    y: 0, 
    duration: 1, 
    scrollTrigger: {
      trigger: ".thirdSection .card_box>div:nth-of-type(1)",
      start: "top 95%", 
      end: "top 65%", 
      scrub: 1, 
      markers: false
    }
  }
);
gsap.fromTo(
  ".thirdSection .card_box>div:nth-of-type(2)", 
  { opacity: 0, y: 200 },
  { 
    opacity: 1, 
    y: 0, 
    duration: 1, 
    scrollTrigger: {
      trigger: ".thirdSection .card_box>div:nth-of-type(2)",
      start: "top 85%",
      end: "top 65%", 
      scrub: 1, 
      markers: false 
    }
  }
);
gsap.fromTo(
  ".thirdSection .card_box>div:nth-of-type(3)", 
  { opacity: 0, y: 200 }, 
  { 
    opacity: 1, 
    y: 0, 
    duration: 1, 
    scrollTrigger: {
      trigger: ".thirdSection .card_box>div:nth-of-type(3)",
      start: "top 75%", 
      end: "top 65%", 
      scrub: 1, 
      markers: false 
    }
  }
);
// ----------세 번째 섹션 end----------

// ----------네 번째 섹션 start----------
gsap.registerPlugin(ScrollTrigger);
gsap.fromTo(
  "section.fourthSection h2.section-title, section.fourthSection h3.section-subtitle", 
  { opacity: 0, y: 100 }, 
  { 
    opacity: 1, 
    y: 0, 
    duration: 1, 
    scrollTrigger: {
      trigger: "section.fourthSection h2.section-title, section.fourthSection h3.section-subtitle", 
      start: "top 65%",
      end: "top 60%", 
      scrub: 1,
      markers: false 
    }
  }
  );
gsap.to(".fourthSection .card:nth-of-type(1), .fourthSection .card:nth-of-type(2), .fourthSection .card:nth-of-type(3)", {
  scrollTrigger: {
    trigger: ".fourthSection .card:nth-of-type(1), .fourthSection .card:nth-of-type(2), .fourthSection .card:nth-of-type(3)",
    start: "top 80%", 
    end: "top 70%", 
    scrub: true, 
    markers: false,
  },
  rotateX: 0, 
  opacity: 1
});
gsap.to(".fourthSection .card:nth-of-type(4), .fourthSection .card:nth-of-type(5), .fourthSection .card:nth-of-type(6)", {
  scrollTrigger: {
    trigger: ".fourthSection .card:nth-of-type(4), .fourthSection .card:nth-of-type(5), .fourthSection .card:nth-of-type(6)", 
    duration: 2,
    start: "top 80%", 
    end: "top 70%", 
    scrub: true, 
    markers: false, 
  },
  rotateX: 0, 
  opacity: 1
});
// ----------네 번째 섹션 end----------
