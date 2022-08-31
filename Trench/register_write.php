<?php	
	$username =$HTTP_POST_VARS["newname"];
	$password =$HTTP_POST_VARS["newpass"];
	$cpassword =$HTTP_POST_VARS["conpass"];
	$firstname =$HTTP_POST_VARS["firstName"];
	$lastname =$HTTP_POST_VARS["lastName"];
	$others =$HTTP_POST_VARS["others"];
	$email =$HTTP_POST_VARS["email"];
	$phone =$HTTP_POST_VARS["phone"];
	$sex =$HTTP_POST_VARS["sex"];
	$bg =$HTTP_POST_VARS["bg"];
	$genotype =$HTTP_POST_VARS["genotype"];
	$dob =$HTTP_POST_VARS["dob"];
	$address =$HTTP_POST_VARS["address"];
	$state =$HTTP_POST_VARS["state"];
	$lga =$HTTP_POST_VARS["lga"];
	$nationality =$HTTP_POST_VARS["nationality"];
	$sq =$HTTP_POST_VARS["sq"];
	$sa =$HTTP_POST_VARS["sa"];
	$time =$HTTP_POST_VARS["time"];
	$day =$HTTP_POST_VARS["day"];
	
	if (!$username || !$password || !$cpassword || !$firstname || !$lastname || !$others || !$email || !$phone || !$sex || !$bg || !$genotype || !$dob || !$address || !$state || !$lga || !$nationality || !$sq || !$sa)
	{
	echo "<center><table border=\"0\" width=\"75%\" cellpadding=\"1\" cellspacing=\"1\">
	<tr>
		<td><center><table border=\"0\" width=\"100%\" height=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
						<tr>
							<td><div><img src=\"images/banner.JPG\" width=\"984\" height=\"94\" longdesc=\"http://localhost/NIPSS/images/banner.JPG\" /></div></td></tr></table></center></td>
	</tr>
	<tr><td align=\"center\" background=\"images/bof_01.jpg\"><a href=\"index.html\"><img src=\"images/bof_00.jpg\"></a><a href=\"register.php\"><img src=\"images/bof_02.jpg\"></a><a href=\"index.php\"><img src=\"images/bof_03.jpg\"></a><img src=\"images/bof_04.jpg\"><img src=\"images/bof_05.jpg\"><img src=\"images/bof_06.jpg\"></td></tr>
</table></center>";
echo "<div align=\"center\"><img src=\"./images/progress_med2.gif\">";
	include ("./error1.php");
	echo "<center>You Have Not Entered All The Required Details.<p><a href='javascript:window.history.go(-1)'<img src='./images/goback.jpg'></a>";
  include("./error2.php");
exit;
}

include("./DB/config.php");
	$sql2 = "INSERT INTO myacct(acct, card, fname, lname, depo, day)
		VALUES ('$acct', '$card', '$fname', '$lname', '$depo', '$day')";

	$result2 = mysql_query($sql2)
			or die("
		<script language='JavaScript'>
		window.alert('Sorry, you already register!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=register.php'>
		");

	$sql3 = "INSERT INTO login(acct, card, fname, lname, pword, role)
		VALUES ('$acct', '$card', '$fname', '$lname',  MD5('$pword'), 'user')";

	$result3 = mysql_query($sql3)
			or die("<div align='center'><img src='./images/userexist.png'>Sorry, you are already registered!</div>
		<meta http-equiv='REFRESH' content='0; url=register.php'>

		");

	$sql4 = "INSERT INTO event(acct, depo, event, time, day)
		VALUES ('$acct', '$depo', 'Deposit',  '$time', '$day')";

	$result4 = mysql_query($sql4);

	$sql5 = "UPDATE acct_no SET used = 'yes' WHERE acct = '$acct'";
	$result5 = mysql_query($sql5);
	
		header("Location: register_preview.php");
//		header("Location: register_preview.php?acct=$acct");	
		}
		else{
		die(mysql_error());
		}
	else{
	echo "<script language='JavaScript'>
		window.alert('System error, Ask administration for further detail!')
		</script>
		<meta http-equiv='REFRESH' content='0; url=index.php'>";
	}
?>