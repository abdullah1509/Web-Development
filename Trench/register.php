<?php
			$day=date("j M Y");
			$time=date("g:i:sa");
?>
<html>
<head><title>NIPSS Registration</title></head>

<body bgcolor="#FFFFFF">
<center><table border="0" width="75%" cellpadding="1" cellspacing="1">
	<tr>
		<td><center><table border="0" width="100%" height="5%" cellpadding="0" cellspacing="0">
						<tr>
							<td><div><img src="images/banner.JPG" width="984" height="94" longdesc="http://localhost/NIPSS/images/banner.JPG" /></div></td></tr></table></center></td>
	</tr>
	<tr><td align="center" background="images/bof_01.jpg"><a href="index.html"><img src="images/bof_00.jpg"></a><a href="register.php"><img src="images/bof_02.jpg"></a><a href="index.php"><img src="images/bof_03.jpg"></a><img src="images/bof_04.jpg"><img src="images/bof_05.jpg"><img src="images/bof_06.jpg"></td></tr>
</table></center>
	
<br><br>
<form action="./registerwrite.php" method="post" name="register">
  <center><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  	<tr>
		<td colspan="2"><hr></td>
	</tr>
    <tr> 
      <td colspan="2"><div align="center"><font size="3" face="verdana" color="blue"><img src="./images/newuser.jpg"><b>New Student Register</b></font></div></td>
    </tr>
	<tr>
		<td colspan="2"><hr></td>
	</tr>
	<tr>
		<td colspan="1"><hr></td>
	</tr>
	<tr>
		<td align="left"><font face="Verdana" size="3" color="red">Username and Password Details</font></td>
	</tr>
	<tr>
		<td colspan="1"><hr></td>
	</tr>
    <tr> 
      <td height="26" align="right"><font size="2" face="verdana">Username </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="newname" size="40"></font></td>
    </tr>
    <tr> 
      <td height="28" align="right"><font size="2" face="verdana">Password </font><font color="red" size="2" face="verdana">* </font></td>
      <td><div><font size="2" face="verdana"><input type="password" name="newpass" size="40" maxlength="40"></font></div></td>
    </tr>
    <tr> 
      <td height="28" align="right"><font size="2" face="verdana">Confirm Password </font><font color="red" size="2" face="verdana">* </font></td>
      <td><div><font size="2" face="verdana"><input type="password" name="conpass" size="40" maxlength="40"></font></div></td>
    </tr>
	<tr>
		<td colspan="1"><hr></td>
	</tr>
	<tr>
		<td align="left"><font face="Verdana" size="3" color="red">Personal Details</font></td>
	</tr>
	<tr>
		<td colspan="1"><hr></td>
	</tr>

    <tr> 
      <td height="25" align="right"><font size="2" face="verdana">Surname </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="firstName" size="40"></font></td>
    </tr>
	
    <tr> 
      <td height="25" align="right"><font size="2" face="verdana">Firstname </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="lastName" size="40"></font></td>
    </tr>
	
    <tr> 
      <td height="25" align="right"><font size="2" face="verdana">Middlename </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="others" size="40"></font></td>
    </tr>

    <tr> 
      <td height="26" align="right"><font size="2" face="verdana">Email address </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="email" size="40"></font></td>
    </tr>
	
    <tr> 
      <td height="26" align="right"><font size="2" face="verdana">Phone number </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="phone" maxlength="20" size="40"></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">Sex </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><select name="sex">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Please Select" selected="selected">Please Select</option>
										</select></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">Blood Group </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><select name="bg">
										<option value="0+"> 0+ </option>
										<option value="0-"> 0- </option>
										<option value="A+"> A+ </option>
										<option value="A-"> A- </option>
										<option value="B+"> B+ </option>
										<option value="B-"> B- </option>
										<option value="AB+"> AB+ </option>
										<option value="AB-"> AB- </option>
										<option value="Please Select" selected="selected">Please Select</option>
										</select></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">Genotype </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><select name="genotype">
										<option value="AA"> AA </option>
										<option value="AS"> AS </option>
										<option value="SS"> SS </option>
										<option value="Please Select" selected="selected">Please Select</option>
										</select></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">Date Of Birth </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="dob" maxlength="11" size="40"></font><font size="2" face="verdana" color="red">&nbsp;example (i.e "dd/mm/yyyy")</font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">Address </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><textarea rows="5" cols="30" name="address"></textarea></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">State </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="state" size="40"></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">LGA </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="lga" size="40"></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">Nationality </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="nationality" size="40"></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">Security Question </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><select name="sq">
										<option value="">What is my mothers maiden name</option>
										<option value="">What is the make of my first phone</option>
										<option value="">What is the name of my child hood hero</option>
										<option value="">What is my phone number</option>
										<option value="">What is the name of my primary school</option>
										<option value="Please Select" selected="selected">Please Select</option>
										</select></font></td>
    </tr>
	
	<tr> 
      <td height="26" align="right"><font size="2" face="verdana">Security Answer </font><font color="red" size="2" face="verdana">* </font></td>
      <td><font size="2" face="verdana"><input type="text" name="sa" size="40" maxlength="100"></font></td>
    </tr>
	
	<tr> 
      <td align="right">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr> 
      <td> 
        <input type="hidden" name="day" value="<?php echo $day; ?>">
		<input type="hidden" name="time" value="<?php echo $time; ?>">
      </td>
	</tr>
	</table></center>
	
	<center><table border="0" width="75%" cellpadding="1" cellspacing="1">
	  <tr>
      <td align="center"><input type="image" src="images/register.jpg" name="submit"></td>
    </tr>
	
    <tr> 
      <td colspan="2"><hr></td>
    </tr>
	</table></center>
  
</form>
<center><table border="0" width="75%" cellpadding="1" cellspacing="1">
	<tr> 
      <td colspan="2" valign="bottom"><div align="center"><font size="2" face="verdana">Copyright &copy 2007  By <a href="http://theleadershipuniversity.org">Crystal Software Studio</a></font></div></td>
    </tr>
  </table></center>
</body>
</html>
