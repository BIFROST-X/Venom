
  <!doctype html>
  <?php
?>
  <html>
  <head><title>Nexus</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Caesar+Dressing' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="style2.css" rel="stylesheet">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<style>

.head
{
  width:100%;
  height:auto;
  background:rgba(5,5,5,.8);
  /*background-image: url('bg5.png'); */
  background-position:right;
  position: fixed;
  border-radius: 0px 0px 5px 5px;
  opacity: .9;
}  
.marquee
{
  color:yellow;
}
body
{

background:linear-gradient(to bottom,white 10%);
background-attachment: fixed;
background-position:center-right;
     }

 nav
 {
  margin-top:-6%;
  color: black;
 
 }
 .info
 {
  margin-top:40%;
  width:100%;
  height:150%;
  
  border-radius: 2px;
  color:white;
  background:rgba(225,225,225,.9);
  position: center;
  border-radius: 0px,5px,5px,0px;
 }

.info2
{
 margin-top:-27%;
 margin-left: 13%;
  width:85%;
  height:150%;
  border-radius: 2px;
  color:white;
  background:rgba(40,40,40,1);
  border-radius: 0px,5px,5px,0px;

}
   .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     height: 4%;
     background-color: whitesmoke;
     color: black;
     text-align: center;
     font-family: Calibri;
     line-height:230%;
  }

  a
  {
    color: white;
    font-weight: bold;
    font-size: 1.8em;
font-family:monospace;

  }
  .carousel-inner img {
  width: 100%;

}

.item {
  height: 500px;
}
.active
{
  color:red;
}


.bold {
font-weight:bold;
font-size:3em;
}

.color {
color:silver;


}

.box
{
  width:30%;
   background:rgba(40,40,40,1);
   height:100%;
   margin-top: 5%;
}
h2
{
    font-size: 4em;
}
p
{
  font-size: 2em;
  text-align: justify;
  margin-right: 1%;
}

.animation-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}

.animation-container span {
  color: black;
  display: block;
  font-size: 30px;
    font-weight: bold;
  font-family: 'Helvetica';
  text-shadow: 0 0 1px white;
  position: absolute;
  user-select: none;
  pointer-events: none;
  cursor: default;
  z-index: 1;
  opacity: 0;
  will-change: transform, opacity;
  animation-timing-function: ease-out;
  animation-name: move;
}

@keyframes move {
  0% {
    opacity: 0;
    transform: translateY(100vh);
  }
  25% {
    opacity: 1;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    transform: none;
  }
}



.navbar-custom {
    color: #FFFFFF;
    background-color: rgba(10,100,200,1);
    box-shadow: 1px 1px 1px black;

}
input[type=text] {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    display: inline-block;
    border: .1em solid #ccc;
    box-sizing: border-box;
    font-weight: bold;
    color: black;
}

.btn2
{
  width:20%;
  height:45px;
}

.animation-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}

.animation-container span {
  color:black;
  display: block;
  font-size: 18px;
  font-family: 'Helvetica';
  text-shadow: 0 0 1px white;
  position: absolute;
  user-select: none;
  pointer-events: none;
  cursor: default;
  z-index: 1;
  opacity: 0;
  will-change: transform, opacity;
  animation-timing-function: ease-out;
  animation-name: move;
}

@keyframes move {
  0% {
    opacity: 0;
    transform: translateY(100vh);
  }
  25% {
    opacity: 1;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    transform: none;
  }
}





</style>
<script>

'use strict';

var app = {
  chars: [''],

  init: function () {
    app.container = document.createElement('div');
    app.container.className = 'animation-container';
    document.body.appendChild(app.container);
    window.setInterval(app.add, 100);
  },

  add: function () {
    var element = document.createElement('span');
    app.container.appendChild(element);
    app.animate(element);
  },

  animate: function (element) {
    var character = app.chars[Math.floor(Math.random() * app.chars.length)];
    var duration = Math.floor(Math.random() * 15) + 1;
    var offset = Math.floor(Math.random() * (100 - duration * 2)) + 3;
    var size = 10 + (15 - duration);
    element.style.cssText = 'right:'+offset+'vw; font-size:'+size+'px;animation-duration:'+duration+'s';
    element.innerHTML = character;
    window.setTimeout(app.remove, duration * 1000, element);
  },

  remove: function (element) {
    element.parentNode.removeChild(element);
  },

};

document.addEventListener('DOMContentLoaded', app.init);

 $(window).on('load',function(){
        $('#myModalr1').modal('show');
    });


</script>
</head>
<body oncontextmenu="return false">
<nav class="navbar navbar-expand-md bg-indo navbar-dark navbar-fixed-top navbar-custom" style="margin-top: .5%;">
  
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
   <ul class="nav navbar-nav">
      
                <li><a href="idea.php" class="">STUDENT</a></li>
                <li><a href="idea2.php" class="">RESEARCHER</a></li>
            <li ><a href="logout.php" >LOGOUT</a></li>
    </ul> 

  </div>

    <h2>Nexus</h2>
       
</nav>






<center>
      <img src="bmy_logo2.png" width="45%"  class="img-responsive" style="margin-top: -5%;" align="middle">
</center>
<br>


 
<div class="footer">
&copy; Nexus 2018 
</div> 

</center>
</body>
</html>
