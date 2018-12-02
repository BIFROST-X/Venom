<!doctype html>
<?php
$m=new Mongo();
//echo "connection success";
$db=$m->bmf;
//echo "database selected";
$collection=$db->createCollection("users");
//echo "collection created";
?>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins');


html {
 
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
  background-color: firebrick;
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

input[type=mail] ,input[type=password],input[type=tel] {
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
  background-color: crimson;
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

<table>
  <tr>
    <td>
	<div class="wrapper fadeInDown">
  <div id="formContent">
 <h2>Nexus</h2>
    <div class="fadeIn first">
      <h3>REGISTER <br><font color="firebrick">Students / Researcher</font></h3>
    </div>
    <form method="POST">
      <input type="mail" id="login" class="fadeIn second" name="l1" placeholder="Email" required="">
      <input type="tel" id="login" class="fadeIn second" name="l2" placeholder="College Name ( optional )" >
      <input type="password" id="password" class="fadeIn third" name="l3" placeholder="Password" required="">
      <input type="password" id="password" class="fadeIn third" name="l4" placeholder="Confirm Password" required=""><br>
      <input type="radio" name="utype" value="student" required>Student <input type="radio" name="utype" value="Researcher" required> Researcher <br>
      <input type="checkbox" name="terms" required=""><b><a href="terms.php">Accept <u>Terms and conditions</u></a></b><br>
   <button class="fadeIn fourth" name="b2">REGISTER</button> 
    </form> 
    <div id="formFooter">
             <a href="blogin.php" class="inactive underlineHover">Sign In</a> 
    </div>

  </div>
</div>
</td>
<!-- <td>
    <div class="wrapper fadeInDown">
  <div id="formContent">
 <h2>Nexus</h2>
    <div class="fadeIn first">
      <h3>REGISTER<font color="firebrick">Researchers</font></h3>
    </div>
    <form method="POST">
      <input type="mail" id="login" class="fadeIn second" name="l1" placeholder="Email" required="">
      <input type="tel" id="login" class="fadeIn second" name="l2" placeholder="Organization Name ( optional )" >
      <input type="password" id="password" class="fadeIn third" name="l3" placeholder="Password" required="">
      <input type="password" id="password" class="fadeIn third" name="l4" placeholder="Confirm Password" required=""><br>
      <input type="checkbox" name="terms" required=""><b><a href="terms.php">Accept <u>Terms and conditions</u></a></b><br>
   <button class="fadeIn fourth" name="b2">REGISTER</button> 
    </form> 
    <div id="formFooter">
             <a href="blogin.php" class="inactive underlineHover">Sign In</a> 
    </div>

  </div>
</div></td> -->
</tr>
</table>

<center>
<img src="bmy_logo2.png" width="40%"  class="img-responsive" style="margin-top: -45%;margin-right: 10%;" align="right">
</center>
<?php
if(isset($_POST["b2"])){
$user=array('email'=>$_POST['l1'],'phone'=>$_POST['l2'],'pass'=>$_POST['l3'],'cpass'=>$_POST['l4'],'c1'=>$_POST['utype']);
$db->users->insert($user);
$us = $_POST['c1'];
echo '
         <script> 
    alert("Registration Successfull");
     window.location="blogin.php";
    </script>';
}
?>  
</body>
</html>
