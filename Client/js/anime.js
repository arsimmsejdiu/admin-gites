//header
const header = document.querySelector("#header1");

//banner
const banner = document.querySelector("#bannerBg1");
const bannerAddition = document.querySelector("#bannerBgAddition1");

//content
const h1Line = document.querySelectorAll(".line1 span");
const contentP = document.querySelector(".content-inner1 p");
const contentButton = document.querySelector(".content-inne1r .btn-row1");
const playVideo = document.querySelector(".play-video1 span");
const playVideoCover = document.querySelector(".play-video1 .cover");

//image
const handImg = document.querySelector(".image-inner1 img");
const featureBanner = document.querySelector("#featureBanner1");
const featureBannerGreen = document.querySelector("#featureBannerGreen1");

//feauters
const featuresContentTitle = document.querySelector(".features-content1 h3");
const featuresContentP = document.querySelector(".features-content1 p");
const featuresContentButton = document.querySelector(
  ".features-content1 .btn-row1"
);
const featuresList = document.querySelectorAll(".features-list1 li");

const bannerTL = gsap.timeline();

bannerTL
  .from([bannerAddition, banner], {
    duration: 1.2,
    width: 0,
    skewX: 4,
    ease: "power3.inOut",
    stagger: {
      amount: 0.2,
    },
  })
  .from(header, {
    delay: -0.2,
    y: 16,
    opacity: 0,
    duration: 0.8,
    ease: "power3.inOut",
  })
  .from(h1Line, {
    delay: -0.4,
    y: 80,
    duration: 0.8,
    ease: "power3.out",
    stagger: {
      amount: 0.2,
    },
  })
  .from([contentP, contentButton], {
    delay: -0.6,
    y: -40,
    duration: 0.8,
    opacity: 0,
    ease: "power3.out",
    stagger: {
      amount: 0.2,
    },
  })
  .to([playVideo, playVideoCover], {
    delay: -0.6,
    opacity: 1,
    duration: 0,
  })
  .to(playVideoCover, {
    delay: -0.6,
    height: 0,
    duration: 1,
    ease: "power3.out",
  });

gsap.from(handImg, {
  delay: 2.2,
  x: -100,
  skewX: 2,
  duration: 0.8,
  opacity: 0,
  ease: "power3.out",
});

gsap.from([featureBanner, featureBannerGreen], {
  delay: 2.4,
  x: -60,
  skewX: 6,
  duration: 0.8,
  opacity: 0,
  ease: "power3.out",
  stagger: {
    amount: 0.2,
  },
});

const featuresTl = gsap.timeline();

featuresTl
  .from([featuresContentTitle, featuresContentP, featuresContentButton], {
    opacity: 0,
    y: 40,
    duration: 0.6,
    ease: "powe3.out",
    stagger: {
      amount: 0.2,
    },
  })
  .from(featuresList, {
    delay: -0.4,
    opacity: 0,
    y: 40,
    duration: 0.6,
    ease: "power3.out",
    stagger: {
      amount: 0.4,
    },
  });

const controller = new ScrollMagic.Controller();
const scene = new ScrollMagic.Scene({
  triggerElement: "#featureBannerGreen",
  triggerHook: 0,
  reverse: false,
})
  .addIndicators()
  .setTween(featuresTl)
  .addTo(controller);
