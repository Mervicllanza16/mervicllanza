<html>
<body>

<form action="" method="post">
Enter First number:<br>
<input type="text" name="no1"><br>
<br><br>Enter Second number :<br>
<input type="text" name="no2"><br><br>
<h1><input type="submit" name="submit" value="SUM "><br></h1>
</form>
</html>
</body>
<?php
$sum="";
if(isset($_POST['submit']))
{
	$no1=$_POST['no1'];
	$no2=$_POST['no2'];
	$sum=$no1+$no2;
	
}
?>
Result:<br><input type="text" value="<?php echo $sum; ?>"><br>	