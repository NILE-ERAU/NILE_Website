function drawShape() {
  var canvas = document.getElementById('canvas');

  // Make sure we don't execute when canvas isn't supported
  if (canvas.getContext) {

    // use getContext to use the canvas for drawing
    var ctx = canvas.getContext('2d');

    // Draw shapes
    ctx.fillRect(25,25,100,100);
    ctx.clearRect(45,45,60,60);
    ctx.strokeRect(50,50,50,50);
  }
}
