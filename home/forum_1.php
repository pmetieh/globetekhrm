<!DOCTYPE HTML>
<html>
<body>
<div>
<button onclick="playPause()">Play</button> 
  <button onclick="stop()">Pause</button>
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br/> 
</div>
<div>
<video id="video1" width="420" height="560" controls>
  <source src="videos/Working With Document Templates2.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
</div>
<p>
<a href="index.php"><b>Home</b></a>
</p>
<script> 
var myVideo=document.getElementById("video1"); 

function playPause()
{ 
//if (myVideo.paused) 
  myVideo.play(); 
//else 
 // myVideo.pause(); 
} 

function makeBig()
{ 
    myVideo.width=560; 
} 

function makeSmall()
{ 
    myVideo.width=320;    
} 

function makeNormal()
{ 
    myVideo.width=560; 
} 
function stop()
{  
    myVideo.pause();    
}
</script> 
</body>
</html>