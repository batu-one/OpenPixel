var pixelcanvas = [];
var eyedropper = false;

for (i = 0; i < 32; i++) {
  pixelcanvas[i] = '#545454';
}

var currentcolor = '#FE0000';

function setColor(color) {
  if (eyedropper) {
    eyedropper = false;
  }
  currentcolor = color;
  document.getElementById('currentcolor').style.backgroundColor = currentcolor;
  console.log('picked ' + currentcolor);
}

function drawPixel(id) {
  if (eyedropper) {
    eyedropper = false;
    currentcolor = document.getElementById(id).style.backgroundColor;
    document.getElementById('currentcolor').style.backgroundColor = currentcolor;
    console.log('picked ' + currentcolor);
  } else {
  pixelcanvas[id] = currentcolor;
  document.getElementById(id).style.backgroundColor = currentcolor;
  console.log('pixel ' + id + ' set to ' + currentcolor);
  }
}

function saveImage() {
  if (eyedropper) {
    eyedropper = false;
  }
  $.ajax({
  type: 'POST',
  url: 'sendimg.php',
  data: {pixelcanvas: JSON.stringify(pixelcanvas)},
  success: function(data){
      $("#go").html('Pixels submitted!');
      $("#go").css('background', '#00ff01');
      setTimeout(function() {
        $("#go").html('I\'m done, let\'s go!');
        $("#go").css('background', '#aaa493');
      }, 2000);
    }
  });
  console.log(pixelcanvas);
}

function eyeDropper() {
  eyedropper = true;
  console.log('eyedropper selected');
}
