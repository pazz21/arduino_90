<html>
<?php
if(isset($_POST['state']))
{
if($_POST['state']=="ON")
exec('serial_out_1.bat');
else 
exec('serial_out_0.bat');
}
?>
<head>
<style>
body {
background-color : #000030;
}
div{
margin-top : 220px;
margin-left : 460px;
}
input[type=submit] {
    width: 50%;
    background-color: #6666ff;
    color: black;
    padding: 14px 20px;
    border-radius: 4px;
	
}
input[type=submit]:hover {
    background-color: #3333ff;
	}
	p{
	color : white;
	text-align : center;
	text-decoration: underline;
	text-indent : 50px;
	letter-spacing : 2px;
	font-size : 50px;
	margin-top : 100px;
	}
</style>
</head>
<body>
<p>Press switch to turn LED On/OFF</p>
<div>
<form action="new.php" method="post">
<input type="submit" name="state" value="ON">
<input type="submit" name="state" value="OFF">
</form>
</div>
</body>
</html>
