<?php 
ob_start();
session_start();
$pt=$_SERVER['DOCUMENT_ROOT']."/innoconsul2";

//$pt="/home/innovativeconsul/public_html";

//$pt="";

//if(!isset($_SESSION['login']) && empty($_SESSION['login'])){
//header("Location:login.php");
//}

include($pt."/classes_php/DBSQLi.php");
  //$id=$_SESSION['id'];
  //$db =new DBSQLi();
  //$conn=$db->getCon();
  //$sql="Select Shopid,shopname from tbl_shop Where addedby=$id";
   //$result=mysqli_query($conn, $sql);
   //if (mysqli_num_rows($result) > 0) {
   //header("Location:admin.php?msg=1");
   //}
   //$db->close($conn);





  if(isset($_POST['doit'])&& !empty($_POST['doit'])){
  $db =new DBSQLi();
  $conn=$db->getCon();
  $fn=trim($_POST['fname']);
  $fn=html_entity_decode($fn, ENT_COMPAT, 'UTF-8');		
  $e=trim($_POST['email']);
  $e=html_entity_decode($e, ENT_COMPAT, 'UTF-8');		
  $age=trim($_POST['age']);
  $age=html_entity_decode($age, ENT_COMPAT, 'UTF-8');		
  $g=trim($_POST['gender']);
  $g=html_entity_decode($g, ENT_COMPAT, 'UTF-8');		
  $r=trim($_POST['role']);
  $r=html_entity_decode($r, ENT_COMPAT, 'UTF-8');
 
  //$p=trim($_POST['p']);
  //$p=html_entity_decode($q, ENT_COMPAT, 'UTF-8');		
 
  $q=trim($_POST['qu']);
  $q=html_entity_decode($q, ENT_COMPAT, 'UTF-8');		
  //$resl=trim($_POST['responsive']);
  //$resl=html_entity_decode($resl, ENT_COMPAT, 'UTF-8');		
  $c1=trim($_POST['contact1']);
  $c1=html_entity_decode($c1, ENT_COMPAT, 'UTF-8');		
  $c2=trim($_POST['contact2']);
  $c2=html_entity_decode($c2, ENT_COMPAT, 'UTF-8');		
  
  
  	
 
  //if (isset($_POST['ios']) && ($_POST['ios'] == "yes")) {
  //$iosapp="yes";
  //}else{
  //$iosapp="no";
  //}
  $d=date("Y-m-d h:i:s");
  $lastlogin=$d;
  $ip=$_SERVER['REMOTE_ADDR'];
  $p=trim($_POST['pwd']);
  $p=html_entity_decode($p, ENT_COMPAT, 'UTF-8');		
  
  //$badd=trim($_POST['addbiz']);
  //$badd=html_entity_decode($badd, ENT_COMPAT, 'UTF-8');		
  
  //$btel=trim($_POST['tel']);
  //$btel=html_entity_decode($btel, ENT_COMPAT, 'UTF-8');		
  
  
  $sql="INSERT into tbl_uzer set usysid=0, name='$fn',email='$e',age=$age, gender='$g',position='$r',
 qualifi='$q',contact1='$c1',contact2='$c2',pass='$p',datereg='$d',dateupdate='$d',ip_reg='$ip',acode='0', ctimes=1, approved='no'";
  echo $sql;
   mysqli_query($conn, $sql);
   $db->close($conn);
 //  echo "<h3>You have added your business sucessfully!</h3>";
  
  unset($_POST['doit']);
  //header("Location:admin.php?msg=succ");
}

?>

<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-462TFR3GVZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-462TFR3GVZ');
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" type="image/jpg" href="favimg/ficoninconsul3232.jpg"/>
<link rel=”apple-touch-icon” href="favimg/aticon.png">
<title>Register Online STEP 1 of 2| www.innovatiuveconsultingpk.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Register Online at Innovative Consulting">
<meta name="keywords" content="Register at innovative Consulting , Online Registration ">
<meta name="robots" content="index,follow">

<?php include($pt."/include/style.php"); ?>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<?php include($pt."/include/script.php"); ?>
<?php include($pt."/include/css.php"); ?>
</head>

 <body style="background-color:#FF6600; height:auto;">

  <div class="container">
  <?php include($pt."/include/nav.php"); ?>
</div>

<!-- Page Content -->

 <div class="container" style="background-color:#FFFFFF; color:#000000; margin-top:60px;">
<div class="row">
  <div class="col-sm-3">
<?php include($pt."/include/sidebar_nav.php"); ?>
 </div>
  
 
  <div class="col-sm-9" style="float:right;">
  
  <h1 class="mt-4">Register Online ! - STEP 1 of 2 </h1>
  <p class="mt-4">&nbsp; </p>
  <p></p>
  <p>
  <table id="t01">
  <!--<tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>-->
  

  <form class="form-group" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
  <span> <h3> Personal Information!</h3></span>
  <label for="fname" class="mr-sm-2">Full Name:</label>
  <input type="text" class="form-control mb-2 mr-sm-2"  maxlength="30" placeholder="Enter Full Name!" id="fname" name="fname" required>
 </br>
  <label for="email" class="mr-sm-2">Email address:</label>
  <input type="email" class="form-control mb-2 mr-sm-2"  maxlength="40" placeholder="Enter email" id="email"  name="email" required>
   </br>
  <label for="age" class="mr-sm-2">Age:</label>
  <input type="text"  class="form-control mb-2 mr-sm-2" maxlength="2" placeholder="Enter age!" id="age"  name="age" required>
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Your Minimum Age must be 32 to 50 years maximum!">Help!</a></br>
  <label for="gender" class="mr-sm-2">Select Gender:</label>
  Male:  <input name="gender" type="radio" value="male" checked> <span style=" visibility:hidden">h sbdjajhdb</span>
  Female:  <input name="gender" type="radio" value="female">
 </br>
 <label for="role" class="mr-sm-2">Position/Role:</label>
  <input type="text"  class="form-control mb-2 mr-sm-2" placeholder="Enter Role!" id="role" name="role">   
    </br>
   <label for="qu" class="mr-sm-2">Qualification:</label>
  <input type="text"  class="form-control mb-2 mr-sm-2"  maxlength="60" placeholder="Enter Qualification!" id="qu" name="qu" required>   
   <a href="#" data-toggle="tooltip" data-placement="bottom" title="Enter your Diploma or Degree Title like BBA/BS Only!">Help!</a>
   </br><label for="contact" class="mr-sm-2">Contact Details:</label>
  Contact 1: <input type="text" maxlength="18" class="form-control mb-2 mr-sm-2" placeholder="Enter Contacts 1" id="contact" name="contact1" required>
  <input type="text" maxlength="18" class="form-control mb-2 mr-sm-2" placeholder="Enter Contacts 2" id="contact2" name="contact2">
   <a href="#" data-toggle="tooltip" data-placement="bottom" title="Enter Your Contacts Jazz/Warid ro Telenor No. With WhatsApp preferably">Help!</a>
   </br><label for="pwd" class="mr-sm-2">Password:</label>
  <input type="password" class="form-control mb-2 mr-sm-2"  maxlength="10" placeholder="Enter password"  name="pwd"id="pwd" required>
  </br>
  
  	<div class="form-group">
	<label for="cpt"><h4>Enter Captcha:</h4><?php 
	 include($pt."/classes_php/Random.class.php");	
      $actc=new Random();
      $actcode=$actc->getCaptcha();
	  //$_SESSION['cpt']=$actcode;  
	 ?><div id="captcha" style="background-color:#00FFFF; display:block; height:40px; width:100px; padding:7px 7px 7px 7px; cursor:none; font-size:16px;"><?php echo $actcode; ?> </div></label>
      <input type="text"  class="form-control" id="cpct"  name="cpct" value="" placeholder="Enter Capctha" required> 
    </div> 
   <input name="doit" type="hidden" id="doit" value="yes">
  <div class="form-check mb-2 mr-sm-2">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Register</button>
</form> 
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </table>
  </p>
  <p style="visibility:hidden;">kasdfjkasdfjksadfjksdnckjsndckjscndjsndckjnsdkjcsdjcnkjsdcnksjdcnksdjcsdncjnsdckjcnkjdscnjskdcnksjdcnspofite ropitegtjlkdgjlkdfjgkrtj oiykdlfglkdfmnklsdjfisjfoiwejsrijflksdjflksjifoweuriwjseflkdfljdsfoiwerfw9eirsjdfksdjflkwsejoriwusfejflksdjflksdjfisewfojfksjdfkljsdfkjsfijswfiojwsefijwkfjklwsejflkswjfeiwejfiwejfiwejfkjewkfjkwjefijwefijiwefijweifj&nbsp;</p>
<p>&nbsp;</p>
  </div>
</div>
  </div>
<?php include($pt."/include/footer.php"); ?>
</body>
</html>
