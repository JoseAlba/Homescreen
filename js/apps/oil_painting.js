// Oil Painting
// Ported from flash project - http://wonderfl.net/c/92Ul
//
//
function OilPainting(){

    var canvas;
    var context;

    var width;
    var height;

    var startPos = {x: window.innerWidth/2, y: window.innerHeight/2};
    var prevPos = {x: window.innerWidth/2, y: 0};
    var dist = {x: 0, y: 0};
    var colour = '#'+Math.floor(Math.random()*16777215).toString(16);


    this.initialize = function(){
        canvas  = document.getElementById("canvas");
        context = canvas.getContext('2d');

        width = window.innerWidth
        height = window.innerHeight

        canvas.width = width;
        canvas.height = height;

        canvas.addEventListener('mousemove', MouseMove, false);
        canvas.addEventListener('click', MouseDown, false);
        canvas.addEventListener('dblclick', MouseDbl, false);
    }


    var MouseMove = function(e) {
        var distance = Math.sqrt(Math.pow(prevPos.x - startPos.x, 2) +
            Math.pow(prevPos.y - startPos.y, 2));

        var a = distance * 10 * (Math.pow(Math.random(), 2) - 0.5);

        var r = Math.random() - 0.5;

        var size = (Math.random() * 15) / distance;

        dist.x = (prevPos.x - startPos.x) * Math.sin(0.5) + startPos.x;
        dist.y = (prevPos.y - startPos.y) * Math.cos(0.5) + startPos.y;

        startPos.x = prevPos.x;
        startPos.y = prevPos.y;

        prevPos.x = (e.layerX);
        prevPos.y = (e.layerY);

        // ------- Draw -------
        var lWidth = (Math.random()+20/10-0.5)*size+(1-Math.random()+30/20-0.5)*size;
        context.lineWidth = lWidth;
        context.strokeWidth = lWidth;

        context.lineCap = 'round';
        context.lineJoin = 'round';

        context.beginPath();
        context.moveTo(startPos.x, startPos.y);
        context.quadraticCurveTo(dist.x, dist.y, prevPos.x, prevPos.y);

        context.fillStyle = colour;
        context.strokeStyle = colour;

        context.moveTo(startPos.x + a, startPos.y + a);
        context.lineTo(startPos.x + r + a, startPos.y + r + a);

        context.stroke();
        context.fill();

        context.closePath();
    }

    var MouseDown = function(e) {
        e.preventDefault();
        colour = '#'+Math.floor(Math.random()*16777215).toString(16);
        context.fillStyle = colour;
        context.strokeStyle = colour;
    }

    var MouseDbl = function(e) {
        e.preventDefault();
        context.clearRect(0, 0, width, height);
    }

}

var app = new OilPainting();
app.initialize();