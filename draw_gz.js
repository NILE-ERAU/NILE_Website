let canvas = document.querySelector('#canvas');
if(canvas.getContext) {
   let ctx = main.getContext('2d');
}

ctx.fillStyle = 'green';
ctx.fillRect(10, 10, 150, 100);
