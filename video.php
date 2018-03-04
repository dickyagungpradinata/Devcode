<html>
    <head>
        <title>TUTORIAL LOGIN</title>
        <meta charset="UTF-8">
            <body style="background-color:cornsilk;"> 
           <ul>
               <li class="active"><a href="index.php">Home</a></li>
                <li><a href="sidebar.php">Article</a></li>
                <li><a href="video.php">Video</a></li>
                <li><a href="image.php">Image</a></li>
                <li><a href="login.php">Biodata</a></li>
            </ul> 
                <div style="text-align:center"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="420">
    <source src="Image/Downhill  is Awesome 2015_(480p).mp4" type="video/mp4">
    <source src="Image/Downhill  is Awesome 2015_(480p).mp4" type="video/ogg">
    Your browser does not support HTML5 video.
  </video>
</div> 

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 720; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 480; 
} 
</script> 

<p>Video courtesy of <a href="Image/Downhill  is Awesome 2015_(480p).mp4" target="_blank">Downhill</a>.</p>
<h1 style="background-color:DodgerBlue;"><b><center>VIDEO DOWNHILL MONTAIN</center></b></h1>
                <video width="320" height="240" controls>
                    <source src="Image/_PEOPLE ARE AWESOME_ - BEST OF MOUNTAIN BIKING 2014!_(480p).mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
                <video width="320" height="240" controls>
                    <source src="Image/THIS is Freeride Mountain Biking_(360p).mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
                <video width="320" height="240" controls>
                    <source src="Image/THIS is Freeride Mountain Biking_(360p).mp4" type="video/mp4">
                    Your browser does not support the <code>video</code> tag.
                </video>
            </body>        
    </head>
</html>

