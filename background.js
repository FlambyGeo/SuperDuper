var c = document.getElementById("background");
var cw =c.width = window.innerWidth;
var ch = c.height = window.innerHeight;
var ctx = c.getContext("2d");
var snd_mod_x = 90;
var i = 0;
var max_range = 90;
var r = 5;
var x1dir = -1;
var rand = undefined;
var col = undefined;
var randf = undefined;

var draw = function (smx) {
  randf = Math.random();
  rand = Math.floor(Math.random()*80);
  ctx.beginPath();
  console.log(rand);
  col = 'hsla(23, 90%, '+ rand +'%, '+ randf+ ')';
  if (x1dir === -1) {
      r += 1;
     (r > 99) ? x1dir = 1 :"";
  } else {
    r -= 1;
    (r < 0) ? x1dir = -1 :"";
  };

  ctx.moveTo(cw*((-10+rand)/100),ch*(r/100));
  //1p-ctr-x, 1p-ctr-y, 2p-ctr-x, 2p-ctr-y, 2p-x, 2py
  ctx.bezierCurveTo(
   cw*(50/100), ch*((90+rand)/100),
   cw*(smx/100), ch*(10/100),
    cw*((90+rand)/100), ch*((100-r)/100));
  ctx.strokeStyle = col;
  ctx.stroke();
};



draw (1);
draw (2);
draw (3);
draw (4);
draw (5);



