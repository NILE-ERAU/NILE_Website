function drawShape(coords) {
  var canvas = document.getElementById('canvas');
  const pos = coords.split(",");

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


    var x_ee = Math.cos(pos[0]*Math.PI/180.0)*pos[1]*(canvas.width / 2*0.84615384615) +canvas.width / 2;
    var y_ee = -Math.sin(pos[0]*Math.PI/180.0)*pos[1]*(canvas.height / 2*0.84615384615) +canvas.height / 2;
    // Draw shapes
    ctx.beginPath();
    ctx.arc(x_ee, y_ee, 6, 0, 2 * Math.PI, false);
    ctx.lineWidth = 3;
    ctx.strokeStyle = '#FF0000';
    ctx.stroke();
  }
}
