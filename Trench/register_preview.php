<?php	
	$username =$_POST["newname"];
	$password =$_POST["newpass"];
	$cpassword =$_POST["conpass"];
	$firstname =$_POST["firstName"];
	$lastname =$_POST["lastName"];
	$others =$_POST["others"];
	$email =$_POST["email"];
	$phone =$_POST["phone"];
	$sex =$_POST["sex"];
	$bg =$_POST["bg"];
	$genotype =$_POST["genotype"];
	$dob =$_POST["dob"];
	$address =$_POST["address"];
	$state =$_POST["state"];
	$lga =$_POST["lga"];
	$nationality =$_POST["nationality"];
	$sq =$_POST["sq"];
	$sa =$_POST["sa"];
	$time =$_POST["time"];
	$day =$_POST["day"];
?>
<html>
<head>
<title>Preview Members Data</title>
</head>
<body bgcolor='#333333'>

<?php
include("./DB/config.php");
$sql = "SELECT * FROM  members WHERE username='$username' and Email='$email'";
$result = mysql_query($sql) or die("SQL select statement failed");

while ($row = mysql_fetch_array($result))  {
			$user=$row["username"];
			$email=$row["Email"];
			$fname=$row["Firstname"];
			$lname=$row["Lastname"];
			$others=$row["Others"];
			$phone=$row["Phone"];
			$day=$row["day"];
?>
<?PHP
$Pass=MD5($password);
	
		$SQL = "Insert into member(Username,createDate,createTime,Password,CPassword,email,sq,sa) Values ('','$username','$day','$time','$Pass','$cpassword','$email','$sq','$sa')";
		$results = mysql_query($SQL) or die(mysql_error());
?>
<br><br><br><br><br><br><br><br>
  
<table width="50%" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#000000">
  <tr align="center"> 
    <td colspan="3"><font color="#00FF00" size="1" face="verdana">Welcome to nipss!</font></td>
  </tr>
  <tr> 
    <td align="right">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td width="37%" align="right"><font color="#00FF00" size="2" face="arial"><b>Username</b></font></td>
    <td width="7%" align="center"><font color="#00FF00" size="2" face="arial">:</font></td>
    <td width="56%"><font color="#00FF00" size="2" face="arial"><b><?php echo"$user"; ?></b></font></td>
  </tr>
  <tr> 
    <td align="right"><font color="#00FF00" size="2" face="arial"><b>Email Address</b>
      </font></td>
    <td align="center"><font color="#00FF00" size="2" face="arial">:</font><br> 
    </td>
    <td><font color="#00FF00" size="2" face="arial"><b><?php echo"$email"; ?></b></font></td>
  </tr>
  <tr> 
    <td align="right"><font color="#00FF00" size="2" face="arial"><b>Full Name</b></font></td>
    <td align="center"><font color="#00FF00" size="2" face="arial">:</font><br> 
    </td>
    <td><font color="#00FF00" size="2" face="arial"><b><?php echo"$fname"; ?> &nbsp;&nbsp;<?php echo"$lname"; ?> &nbsp;&nbsp;<?php echo"$others"; ?></b></font></td>
  </tr>
  <tr> 
    <td align="right"><font color="#00FF00" size="2" face="arial"><b>Phone Number</b></font></td>
    <td align="center"><font color="#00FF00" size="2" face="arial">:</font><br> 
    </td>
    <td><font color="#00FF00" size="2" face="arial"><b><?php echo"$phone"; ?></b></font></td>
  </tr>
  <tr> 
    <td align="right">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td><a href="./index.php"><img src="./images/nutton.jpg" name="signin"></a></td>
  </tr>
</table>
<?php
	}
?>
</body>
</html>
