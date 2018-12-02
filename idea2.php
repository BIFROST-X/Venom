<!doctype html>
<?php
session_start();
$m=new Mongo();
$db=$m->bmf;
$collection=$db->createCollection("research");
$collection=$db->selectCollection("research");
$collection2=$db->selectCollection("users");
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
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

.active
{
  color:firebrick;
  background-color:firebrick;
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





.navbar-custom {
    color: #FFFFFF;
    background-color: rgba(10,100,200,1);
    box-shadow: 1px 1px 1px black;

}
input[type=text],input[type=date],input[type=phone],input[type=number],input[type=mail] {
    width: 49%;
    padding: 12px;
    margin: 8px 0;
    display: inline-block;
    border: .1em solid #ccc;
    box-sizing: border-box;
    font-weight: bold;
    color: black;
}

.btn
{
  width:12%;
  height:45px;
  font-size: 3vh;
  font-weight: bolder;
}

.btn2
{
  width:22%;
  height:25px;
  font-size: 1.5vh;
  font-weight: bolder;
  border-radius: 2%;
}

.btn3
{
  width:100%;
  font-size: 1.2em;
  font-weight: bolder;
  font-family: 'Open Sans',sans-serif;
  background-color:whitesmoke;
  color: black;
  border:solid 2px;
  border-radius: 1px;
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
}

*{
  -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
  box-sizing: border-box;
}

html, body{
  background-color:#F2F2F2;
  font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;

  width:100%;
  text-align:center;
  color:#404040;
  position:relative;
}

a{
  -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.wrapper{
  width:99%;
  margin-left: .5%;
  background-color:#FFFFFF;
  -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
  box-sizing: border-box;
   box-shadow: 1px 1px 1px silver;
}

header{
  text-align:left;
  padding:10px;
  margin-bottom:10px;
  background-color:#5DBA9D;
}

header a{
  font-size:20px;
  color:#FFFFFF;
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:10px;
  text-align:center;
  display:inline-block;
}

header a:hover, .list-mode header a.hide-list:hover{
  background-color:#11956c;
}

header a.hide-list{
  background-color:#11956c;
}

.list-mode header a.hide-list{
  background-color:#5DBA9D;
}

.list-mode header a.show-list{
  background-color:#11956c;
}

.container:after{
  content:"";
  clear:both;
  display:table;
}

.container{
  padding:10px 0 10px 10px;
}

.box{

  width:auto;
  height:auto;
  margin:0 10px 10px 0;
  background-color:#CCCCCC;
  -webkit-transition:all 1.0s ease;
  -moz-transition:all 1.0s ease;
  transition:all 1.0s ease;
  transition:all 1.0s ease;
}

.wrapper.list-mode .container{
  padding-right:10px;
}

.wrapper.list-mode .box{
  width:100%;
}


b
{

  font-size: 5vh;

}
strong
{

font-size: 8vh;
font-family: calibri;
}

i
{
font-size: 2vh;
font-weight: bold;
}

mark
{
  font-size: 6vh;
  border-radius: 2%;
  border:2px solid black;
  background-color: whitesmoke;
}

a:link
{
  text-decoration: none;
}

mark.hover
{
  background-color:  rgba(10,100,200,1);
}


.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}


</style>
<script>

$('.show-list').click(function(){
  $('.wrapper').addClass('list-mode');
});

$('.hide-list').click(function(){
  $('.wrapper').removeClass('list-mode');
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
    <li><a href="idea2.php" class="" ">RESEARCHER<sup></a></li>
          <li><a href="idea3.php" class="">BLOGS</a></li>
        <li ><a href="logout.php" >LOGOUT</a></li>
    </ul> 

  </div>

 <h2>Nexus</h2>
       
</nav>



      <div class="wrapper">
  <header>
    <h3>WELCOME : <font color="olive"><?php echo $_SESSION['l1'];?></font></h3>
 <h1 style="margin-top: 1%;">IDEAS POSTED By <font color="firebrick"> RESEARCHERS </font></h1>
 
 
 <a href="createidea2.php" class="btn btn-light" style="margin-left: 88%;margin-top: -4%;">POST AN IDEA</a>

    </header>

    
    <div class="container">

      <?php 
      $var=$collection->find();
      foreach($var as $vari)
      {
        
      

?>

      <div class="box">

        
<br>
<a href="#" data-toggle="modal" data-target="#myModal1"><mark><strong><?php echo $vari['it'] ?></strong></mark></a><br>
<i><?php echo $vari['idesc'] ?></i><br>
Posted on : <i style="color:whitesmoke;"><?php echo $vari['pdate'] ?></i>
<br>
Click Idea Title for more info 

            


 <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
 
        <div class="modal-header">
          <h2 class="modal-title"><?php echo $vari['it'] ?></h2>
         
        </div>
        <div class="modal-body">
        <ul type="disc" style="font-weight:bold;text-align: justify;font-size: 1.5em;">
          <i>Organization Name : <font color="firebrick"><?php echo $vari['oname'] ?> </font></i><br>
        <i>Name : <font color="firebrick"><?php echo $vari['name']?></font></i><br>
        <i>Contact Number: <font color="firebrick"><?php echo $vari['pho'] ?></font></i><br> 
              <i>Email : <font color="firebrick"><?php echo $vari['em'] ?></font></i> <br> 
              <i>Looking For : <font color="firebrick"><?php echo $vari['lf'] ?></font></i><br>
              <i>Location : <font color="firebrick"><?php echo $vari['loc'] ?></font></i><br>
            <ul>
            </ul>
          </li>
        </ul>

        </div>
        <div class="modal-body">
           <hr>
          <h3>Sample Test</h3>
          <i><?php echo $vari['test'] ?></i>

        </div>
        <div class="modal-footer">
        <a href=""><button class="btn3">Contact</button></a>
        </div>
      </div>
    </div>
  </div>

      </div>
      <br>
<?php
}
?>
      
</div>



   <?php 
      $var=$collection->find();
      foreach($var as $vari)
      {
        
      

?>
 

  <?php } ?>
<div class="footer">
&copy; Nexus 2018 
</div> 

</center>


</body>
</html>
