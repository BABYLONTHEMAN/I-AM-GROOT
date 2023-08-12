<?php ?>
<!DOCTYPE html>
<html>
<head>
<title>Matrix Rain</title>
<style>
body {
  background-color: black;
}

.matrix-rain {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}

.matrix-rain div {
  position: absolute;
  width: 10px;
  height: 10px;
  background-color: green;
  border-radius: 50%;
  animation: matrix-rain 1s infinite;
}

@keyframes matrix-rain {
  0% {
    top: 0;
    left: 0;
  }

  100% {
    top: -100%;
    left: 100%;
  }
}

.matrix-rain div:hover {
  animation-play-state: paused;
}
</style>
</head>
<body>
<div class="matrix-rain">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>
<script>
document.addEventListener("mousemove", function(event) {
  var matrixRain = document.querySelector(".matrix-rain");
  var matrixRainDivs = matrixRain.querySelectorAll("div");
  for (var i = 0; i < matrixRainDivs.length; i++) {
    matrixRainDivs[i].style.top = event.clientY - matrixRainDivs[i].height / 2 + "px";
    matrixRainDivs[i].style.left = event.clientX - matrixRainDivs[i].width / 2 + "px";
  }
});
</script>
</body>
</html>

<?php ?>