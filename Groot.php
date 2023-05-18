<?php ?>
<!DOCTYPE html>
<html>
<head>
  <title>Groot</title>
  <style>
    canvas {
      border: 1px solid #000;
    }
  </style>
</head>
<body>
  <canvas id="grootCanvas" width="400" height="400"></canvas>

  <script>
    // Get the canvas element and its 2D context
    const canvas = document.getElementById('grootCanvas');
    const context = canvas.getContext('2d');

    // Groot position and size
    let grootX = canvas.width / 2;
    let grootY = canvas.height / 2;
    const grootSize = 100;

    // Groot motion
    let dx = 2;
    let dy = -2;

    // Draw Groot
    function drawGroot() {
      // Clear canvas
      context.clearRect(0, 0, canvas.width, canvas.height);

      // Head
      context.fillStyle = '#704214';
      context.fillRect(grootX, grootY, grootSize, grootSize);

      // Eyes
      context.fillStyle = '#ffffff';
      context.fillRect(grootX + 15, grootY + 20, 20, 20);
      context.fillRect(grootX + 65, grootY + 20, 20, 20);

      // Mouth
      context.fillStyle = '#000000';
      context.fillRect(grootX + 15, grootY + 50, 70, 10);

      // Branches
      context.fillStyle = '#538235';
      context.fillRect(grootX - 20, grootY, 20, grootSize);
      context.fillRect(grootX + grootSize, grootY, 20, grootSize);

      // Body
      context.fillStyle = '#538235';
      context.fillRect(grootX + 20, grootY + grootSize, grootSize - 40, grootSize * 0.7);
    }

    // Update Groot's position
    function updatePosition() {
      grootX += dx;
      grootY += dy;

      // Reverse direction if Groot hits the canvas boundaries
      if (grootX + grootSize > canvas.width || grootX < 0) {
        dx = -dx;
      }
      if (grootY + grootSize > canvas.height || grootY < 0) {
        dy = -dy;
      }
    }

    // Animation loop
    function animate() {
      // Clear canvas
      context.clearRect(0, 0, canvas.width, canvas.height);

      // Update Groot's position
      updatePosition();

      // Draw Groot
      drawGroot();

      // Request the next animation frame
      requestAnimationFrame(animate);
    }

    // Call the animate function to start the animation
    animate();
  </script>
</body>
</html>
    
<?php ?>