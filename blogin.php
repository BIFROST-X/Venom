<!doctype html>
<?php
$m=new Mongo();
//echo "connection success | ";
$db=$m->bmf;
//echo "database selected | ";
$collection=$db->selectCollection("users");
echo "Welcome to Nexus.com";
?>
<html>
<head>
	<title>Nexus</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins');


html {
  background-color:whitesmoke;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
  position: fixed;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}




.wrapper {
  display: flex;
  align-items: left;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  height: 100%;
  padding: 10px;
}

#formContent {

  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}





h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}
input[type=button], input[type=submit], input[type=reset],button  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  transform: scale(0.95);
}

input[type=mail] ,input[type=password] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  transition: all 0.5s ease-in-out;
  border-radius: 5px 5px 5px 5px;
}

input[type=mail]:focus,input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=mail]:focus,input[type=password]:placeholder {
  color: #cccccc;
}

.fadeInDown {
  animation-name: fadeInDown;
  animation-duration: 1s;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  animation:fadeIn ease-in 1;
  animation-fill-mode:forwards;
  animation-duration:1s;
}

.fadeIn.first {
  animation-delay: 0.4s;
}

.fadeIn.second {
  animation-delay: 0.6s;
}

.fadeIn.third {
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  animation-delay: 1s;
}

.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: gold;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: black;
}

.underlineHover:hover:after{
  width: 100%;
}

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}

* {
  box-sizing: border-box;
}
h2
{
	font-family: Calibri;
	font-size: 4vh;
	color: black;
}
</style>
<script type="text/javascript">
	

</script>
</head>
<body>

	<div class="wrapper fadeInDown">
  <div id="formContent">
       <h2>LOGIN</h2>
    <div class="fadeIn first">
      <img src="user.png" id="icon" alt="User Icon" style="width:30%;" />
    </div>
    <form method="POST">
      <input type="mail" id="login" class="fadeIn second" name="l1" placeholder="email" required="">
      <input type="password" id="password" class="fadeIn third" name="l3" placeholder="password" required=""> <br>
      <input type="checkbox" name="terms" required=""><b><a href="terms.php">Accept <u>Terms and conditions</u></a></b><br>
      <button name="b1">LOGIN</button> 
    </form>
    <div id="formFooter">
  
         <a href="bregister.php" class="inactive underlineHover">Sign Up</a> 
    </div>

  </div>
</div>
   <img src="bmy_logo2.png" width="40%"  class="img-responsive" style="margin-top: -45%;margin-right: 10%;" align="right">
<?php
if(isset($_POST["b1"])){
	$count=0;
$uname=$_POST['l1'];
$pass=$_POST['l3'];
$user=array('email'=>$_POST['l1'],'pass'=>$_POST['l3']);
	$document = $collection->findOne($user);

if($document==NULL){
	echo '
         <script> 
		alert("Invalid Username or Password");
		 window.location="blogin.php";
		</script>	
	';
}
else{
	session_start();
    $_SESSION['l1']=$uname;
	echo '
         <script> 
		alert("Login Successfull");
		 window.location="idea.php";
		</script>';
}  
}
?>
<div class="footer">
&copy; Nexus 2018 
</div> 
</body>
</html>
