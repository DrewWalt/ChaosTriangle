<html>
 
<head>
 
<meta charset="UTF-8">
 
<title>Chaos Triangle</title>
 
</head>
 
<body>

 
<p>
<canvas id="canvas" width=400 height=346></canvas>
</p>
 

Number of points : <input type="number" id="num" name="numberofdots">
<input type="button" value="submit" onclick="chaosTriangle()">

<button onClick="window.location.reload();">Reset</button>

 
<script>
 
function chaosTriangle() {
    var canv = document.getElementById('canvas').getContext('2d');
    var x = Math.random() * 400;
    var y = Math.random() * 346;
    var num = document.getElementById("num").value;
    for (var i=0; i<num; i++) {
        var vertex = Math.floor(Math.random() * 3);
        switch(vertex) {
            case 0:
                x = x / 2;
                y = y / 2;
                canv.fillStyle = 'green';
                break;
            case 1:
                x = 200 + (200 - x) / 2
                y = 346 - (346 - y) / 2
                canv.fillStyle = 'red';
                break;
            case 2:
                x = 400 - (400 - x) / 2
                y = y / 2;
                canv.fillStyle = 'blue';
        }
        canv.fillRect(x,y, 1,1);
    }
}
 
</script>

<h1> Instructions </h1>
<p>In order to use the simulation please enter the number of points you would like added to the image and click submit.  The submit button can be clicked multiple times throught out each simulation and the number of points can be changed for each submission.  If you would like to start the simulation over click the reset button.</p>

<h1> Works Cited </h1>
<a href="https://www.youtube.com/watch?v=kbKtFN71Lfs">Numberphile video describing process that is being replicated.</a> <br />
<a href="https://rosettacode.org/wiki/Chaos_game#JavaScript">Code used as inspriation for my code</a> 


 
</body>
 
</html>