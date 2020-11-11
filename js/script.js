
document.addEventListener("DOMContentLoaded", function (event) {
    let Ele = document.querySelector(".logo");
    console.log("Javascript file loaded", theme_directory, Ele);
    lottie.loadAnimation({
      container: Ele, // the dom element that will contain the animation
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: `${theme_directory}/assets/NX_logo.json` // the path to the animation json
    });
  });
  