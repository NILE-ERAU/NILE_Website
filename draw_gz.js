function drawShape() {
  var canvas = document.getElementById('canvas');

  // Make sure we don't execute when canvas isn't supported
  if (canvas.getContext) {

    // use getContext to use the canvas for drawing
    var ctx = canvas.getContext('2d');
    var img = new Image();
    img.src = "images/nile_field.png";
    ctx.drawImage(img, 0, 0);
    // Draw shapes

  }
}
