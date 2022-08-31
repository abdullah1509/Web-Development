<html>
<head>
</head>
<body>
<form name="phpform" action="recomplain.php" method="post" enctype="multipart/form-data">
<table width="400px" align="center">
<tr>
<td>COMPLAINT ID:</td>
<td><input type="text" name="id" /></td>
</tr>
<tr>
<td> DESCRIPTION:</td>
<td><input type="text" name="descri" /></td>
</tr>
<tr>
<td>POLICE STATION ID:</td>
<td><input type="text" name="add" /></td>
</tr>
<br />
<td height="30px" colspan="2">
<?php
if(isset($_GET['message']))
{
    if($_GET['message']=="yes")
    {
        echo "<font color=green>COMPLAINT 
        added Successfully!</font>";
    }
    else if($_GET['message']=="no")
    {
        echo "<font color=red>COMPLAINT 
        is not added!</font>";
    }
    
}
?>

</td>

</tr>
<tr>
<td></td>
<td><input type="submit" name="btn" value="REGISTER" /></td>
</tr>

</table>
<br /><br /><br /><br /><br /><br />
<a href="home_page1.php">GO TO HOME</a>
</form>

</body>
</html>
</body>
</html>



