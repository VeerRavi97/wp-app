
document.addEventListener("DOMContentLoaded", function (event) {
  let Ele = document.querySelector(".NX_logo");
  let BgEle = document.querySelector(".BG_logo");
  console.log("Javascript file loaded", theme_directory, Ele,BgEle);
  lottie.loadAnimation({
    container: Ele, // the dom element that will contain the animation
    renderer: "svg",
    loop: true,
    autoplay: true,
    path: `${theme_directory}/assets/anim/NX_logo.json` // the path to the animation json
  });
  lottie.loadAnimation({
    container: BgEle, // the dom element that will contain the animation
    renderer: "svg",
    loop: true,
    autoplay: true,
    path: `${theme_directory}/assets/anim/NX_BGP_v1.json` // the path to the animat
});
});
