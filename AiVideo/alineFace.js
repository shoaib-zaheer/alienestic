const density ="◙◙◙◙○○○○  ••••◘◘◘◘.....";

let video;
let vPlay = false;
let asciiDiv;
let button;

function setup() {
  noCanvas();
  video = createCapture(VIDEO);
  video.size(64, 70);
  asciiDiv = createDiv();
  video.hide();
  button = createButton("Play Video");
  button.mousePressed(toggleVideo);
}
function toggleVideo(){
    if (vPlay){
        video.pause();
        button.html("Play Video");
    }else{
        video.loop();
        button.html("pause");
    }
    vPlay = !vPlay;
}
function draw() {   
    video.loadPixels();
    let asciiImage = "";
    for (let j = 0; j < video.height; j++) {
      for (let i = 0; i < video.width; i++) {
        const pixelIndex = (i + j * video.width) * 4;
        const r = video.pixels[pixelIndex + 0];
        const g = video.pixels[pixelIndex + 1];
        const b = video.pixels[pixelIndex + 2];
        const avg = (r + g + b) / 3;
        const len = density.length;
        const charIndex = floor(map(avg, 0, 255, 0, len));
        const c = density.charAt(charIndex);
        if (c == " ") asciiImage += "&nbsp;";
        else asciiImage += c;
      }
      asciiImage += '<br/>';
    }
    asciiDiv.html(asciiImage);
}
