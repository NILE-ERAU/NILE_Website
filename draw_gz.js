function drawShape() {
  var canvas = document.getElementById('canvas');

  // Make sure we don't execute when canvas isn't supported
  if (canvas.getContext) {

    // use getContext to use the canvas for drawing
    var ctx = canvas.getContext('2d');
    var img = new Image();
    img.src = "images/nile_field.png";
    var scale = Math.min(canvas.width / img.width, canvas.height / img.height);
    // get the top left position of the image
    var x = (canvas.width / 2) - (img.width / 2) * scale;
    var y = (canvas.height / 2) - (img.height / 2) * scale;
    ctx.drawImage(img, x, y, img.width * scale, img.height * scale);
    // Draw shapes

  }
}
