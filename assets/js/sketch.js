
/*
<><><><><><><><><><><><><><><><><>
----------------------------------
example in P5js
duplicate
by frmurgia © 2017-18 MIT License
DSII2018 Lab @UNIRSM
----------------------------------
<><><><><><><><><><><><><><><><><>
*/
// let inconsolata;
// function preload() {
//   inconsolata = loadFont('assets/inconsolata.otf');
// }


var blockSize = 200;
var countBorder = 3;
var wdt = blockSize * countBorder;
var hgt = 200;
//var modes = [semiDual, shark, oneSemi, mess, rotateSemi, pear, chain];
var modes = [rotateSemi,chain];
var currModeFn = rotateSemi;
var colorSchemes = [
  [ '#152A3B', '#158ca7', '#F5C03E', '#D63826', '#F5F5EB' ],

];
var queueNum = [ 0, 1, 2, 3 ];
var clrs = colorSchemes[0];

function setup() {
  blockSize=windowWidth/10;
  // frameRate(0.3);
  // createCanvas(windowWidth, windowHeight/2);
    
  let cnv = createCanvas(windowWidth, windowHeight/2);
  // Assigns a CSS selector class 'small'
  // to the canvas element.
  cnv.parent('banner');
  cnv.position(0,0);
  cnv.style('z-index','-2')
  rectMode(CENTER);
  noStroke();
  reDraw();


}

function draw() {
  // resetPatchwork();
 




 
}

function reDraw(){
  for (var y = blockSize / 2; y < height; y+=blockSize) {
    for (var x = blockSize / 2; x < width; x+=blockSize) {
      queueNum = shuffleArray([ 0, 1, 2, ]);
      fill(clrs[queueNum[0]]);
      rect(x, y, blockSize, blockSize);

      push();
      translate(x, y);
      currModeFn(0, 0, clrs);
      pop();
    }
  }
  paper();


}

function chain(x, y, clrs) {
  rotate(radians(90 * Math.round(random(1, 5))));
  fill(clrs[queueNum[1]]);
  arc(x - blockSize / 2, y, blockSize, blockSize, radians(270), radians(450));
  fill(clrs[queueNum[2]]);
  arc(x + blockSize / 2, y, blockSize, blockSize, radians(90),  radians(270));

  rotate(radians(90 * Math.round(random(1, 5))));
  fill(clrs[queueNum[1]]);
  arc(x, y + blockSize / 2, blockSize, blockSize, radians(180), radians(360));
  fill(clrs[queueNum[2]]);
  arc(x, y - blockSize / 2, blockSize, blockSize, radians(0),   radians(180));
}

 

function rotateSemi(x, y, clrs) {
  rotate(radians(90 * Math.round(random(1, 5))));
  fill(clrs[queueNum[1]]);
  arc(-blockSize / 2, 0, blockSize, blockSize, radians(270), radians(450));
}

 

function shuffleArray(array) {
  var j, temp;
  for (var i = array.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    temp = array[i];
    array[i] = array[j];
    array[j] = temp;
  }

  return array;
}

function resetPatchwork(modeFn) {
  currModeFn = modeFn || modes[Math.floor(random(modes.length))];
  //clrs = colorSchemes[Math.floor(random(colorSchemes.length))];
  redraw();
}

function mousePressed(){
  resetPatchwork();
  reDraw()
}

function keyPressed(e){
  switch(e.key.toLowerCase()){
 
    case '5': resetPatchwork(rotateSemi); break;
 
    case '7': resetPatchwork(chain); break;
 
    default: resetPatchwork(); break;
  }
}

function paper() {
  push();
  strokeWeight(1);
  noStroke();
  for (var i = 0; i<width-1; i+=2) {
    for (var j = 0; j<450; j+=2) {
      fill(random(205-40, 205+30), 25);
      rect(i, j, 2, 2);
    }
  }

  for (var i = 0; i<30; i++) {
    fill(random(130, 215), random(100, 170));
    rect(random(0, width-2), random(0, height-2), random(1, 3), random(1, 2));
  }

  pop();
}
function windowResized() {
  resizeCanvas(windowWidth, windowHeight/2);
  reDraw()
}