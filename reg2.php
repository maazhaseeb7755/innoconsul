<?php 
ob_start();
session_start();
$pt=$_SERVER['DOCUMENT_ROOT']."/innoconsul2";
//$pt="/home/innovativeconsul/public_html";
include($pt."/classes_php/DBSQLi.php");

if(isset($_POST['dobiz'])&& !empty($_POST['dobiz'])){
  $db =new DBSQLi();
  $conn=$db->getCon();
  $bn=trim($_POST['comp']);
  $bn=html_entity_decode($bn, ENT_COMPAT, 'UTF-8');	
  $btype=trim($_POST['ctype']);
  $btype=html_entity_decode($btype, ENT_COMPAT, 'UTF-8');			
  $ins=trim($_POST['industry']);
  $ins=html_entity_decode($ins, ENT_COMPAT, 'UTF-8');		
  
  
  //$rev=trim($_POST['rev']);
  if (isset($_POST['rev']) && ($_POST['rev'] == "yes")) {
  $rev="yes";
  }else{
  $rev="no";
  }
  //$rev=html_entity_decode($rev, ENT_COMPAT, 'UTF-8');		
  $web=trim($_POST['web']);
  $web=html_entity_decode($web, ENT_COMPAT, 'UTF-8');		
  
  
  $add=trim($_POST['address']);
  $add=html_entity_decode($add, ENT_COMPAT, 'UTF-8');		
  $pro=trim($_POST['province']);
  $pro=html_entity_decode($pro, ENT_COMPAT, 'UTF-8');		
  $c=trim($_POST['city']);
  $c=html_entity_decode($c, ENT_COMPAT, 'UTF-8');
 
  //$p=trim($_POST['p']);
  //$p=html_entity_decode($q, ENT_COMPAT, 'UTF-8');		
 
  $cty=trim($_POST['country']);
  $cty=html_entity_decode($cty, ENT_COMPAT, 'UTF-8');		
  		
  
 $d=date("Y-m-d h:i:s");
  $lastlogin=$d;
  $ip=$_SERVER['REMOTE_ADDR'];
  	
  
  
  $sql="INSERT into tbl_biz43 set bizsysid=0, userid=2, bname='$bn',btype='$btype',industry='$ins', revenue='$rev',website='$web',
 baddress='$add',bcity='$c',bprovince='$pro',bcountry='$cty',dateadded='$d',bdateupdate='$d',bip_reg='$ip'";
  echo $sql;
   mysqli_query($conn, $sql);
   $db->close($conn);
   echo "<h3>You have added your business sucessfully!</h3>";
  
  unset($_POST['dobiz']);
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
<title>Register Online STEP 2 of 2| www.innovatiuveconsultingpk.com</title>
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
  
  <h1 class="mt-4">Register Online ! - STEP 2 of 2 </h1>
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
  

  <form class="form-group" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <span> <h3> Organization Information!</h3></span><span style="visibility:hidden;">some Spacesome Spacesome Spacesome Spacevvvvvsome Spacesome Spacesome Spacesome Spacesome Spacesome Spacesome Spacesome Spacesome Spacesome Spacesome Space</span>
 </br> <label for="comp" class="mr-sm-2">Company/Org. Name:</label>
  <input type="text" class="form-control mb-2 mr-sm-2"  maxlength="30" placeholder="Enter Name of your Company!" id="comp" name="comp" required>
 </br>
  <label for="ctype" class="mr-sm-2">Company type:</label>
   <select class="form-control mb-2 mr-sm-2" name="ctype">
   <option id="ctype" value="Sole Proprietor">Sole Proprietor</option>
   <option id="ctype" value="Public">Public</option>
   <option id="ctype" value="Private" selected="selected">Private</option>
   <option id="ctype" value="Corporate">Corporate</option>
   </select>
   </br>
  <label for="industry" class="mr-sm-2">Industry</label>
  <input type="text"  class="form-control mb-2 mr-sm-2" maxlength="15" placeholder="Enter industry!" id="industry" name="industry" required>
    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Industry must be Non Menufacturing Preferably services!">Help!</a>
  <span style="visibility:hidden;">some areasome areasome areasome areasome areasome areasome areasome areasome areasome areasome areasome areasome area</span></br>
 
 <label for="rev" class="mr-sm-2"><h4>Revenue</h4> ( Atleast 2m per month for private/corp.)</label></br>
    <input  id="rev" type="checkbox" class="form-check-input mb-2 mr-sm-2"  name="rev" value="yes"> YES
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="For Sole Prop. atleast 5 lacs rupees per Month!">Help!</a>
	<span style="visibility:hidden;">some areasome areasome areasome areasome areasome areasome areasome areasome areasome areasome areasome areasome area</span>
	</br>
	
 <label for="web" class="mr-sm-2">Website</label>
    <input  id="web" type="url" class="form-control mb-2 mr-sm-2"  name="web" placeholder="Enter url of business!"> 
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Include http:// with domain name!">Help!</a>
	</br>
	<h2>Address of the Business</h2>
	<div class="form-group">
  <label for="addres">Address:</label>
  <textarea class="form-control" rows="4" id="address"  name="address" required></textarea>
</div>
   </br>
   
   <div class="form-group">
  <label for="city">Select City:</label>
  <select class="form-control"  name="city" id="city">
  	<option value="Karachi">Karachi</option>
    <option value="Lahore">Lahore</option>
    <option value="Islamabaad">Islamabaad</option>
    <option value="Faislabaad">Faislabaad</option>
	<option value="Rawalpindi">Rawalpindi</option>
	<option value="Multan">Multan</option>
	<option value="Sialkot">Sialkot</option>
	<option value="Hyderabaad">Hyderabaad</option>
	<option value="Sukkar">Sukkar</option>
	<option value="Peshawar">Peshawar</option>
    <option value="Other">Other</option>
  </select>
</div>
   </br>
   <div class="form-group">
  <label for="province">Select Province:</label>
  <select class="form-control"  name="province" id="province">
  	<option value="KP">KP</option>
    <option value="Punjab">Punjab</option>
    <option value="Sindh">Sindh</option>
    <option value="Balochistan">Balochistan</option>
	<option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
	
    
  </select>
</div>
  

    <label for="country">Country </label>
      <input id="country" name="country" class="form-control mb-2 mr-sm-2" type="text" value="Pakistan" required> 
   </br>
<input name="dobiz" type="hidden" value="yes">
  <button type="submit" class="btn btn-primary mb-2">Complete Registeration</button>
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
