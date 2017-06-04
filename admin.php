<?php
session_start();
?>
<html>
<head>
<script src="/js.js"></script>
<style>
h1 {
    border-bottom: 3px solid #cc9900;
    color: #996600;
    font-size: 30px;
}
table, th , td {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 5px;
}
table tr:nth-child(odd) {
    background-color: #f1f1f1;
}
table tr:nth-child(even) {
    background-color: #ffffff;
}
</style>
</head>
<body>
<a style="margin-right:25px;float:right;" href="/lgot.php">Logout</a>
<?php
if(isset($_POST['admin_submit']))
{
	$user = mysql_real_escape_string($_POST['name']);
	$pass = md5(mysql_real_escape_string($_POST['password']));
	$adm_lim = mysql_real_escape_string($_POST['number_lim']);
	if((($_POST['name']=='arka')&&($pass == 'af22efea978081f83727880941ccd56d'))||(($_POST['name']=='rounak')&&($pass == 'af22efea978081f83727880941ccd56d')))
	{
		$_SESSION["admin"] = $user;
		
		echo '<script>SC("adm_lim", '.$adm_lim.', 30);</script>';
	}
}
if(!isset($_SESSION["admin"]))
{
	echo '
	<form action="" method="post">
		User: <input type="text" name="name">
		Password: <input type="password" name="password">
		Limit: <input type="tel" name="number_lim" value="10">
		<input type="submit" name="admin_submit">
	</form>
	';
	die("Not Authorize");
}
?>
<form action="" method="post" enctype="multipart/form-data">
    Select File to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
	<a style="margin-left:25px;" href="/manual_records/confirmed_user.xlsx" download>confirmed_user.xlsx sheet download</a>
</form>
<?php
if(isset($_POST['submit']))
{
	$target_dir = "manual_records/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>
<?php		
$conn = mysql_connect("localhost",'arka_cropmybill','9735525775') or die ("connection error");
mysql_select_db('arka_cropmybill', $conn) or die ("database not selected");
		$limit = $_COOKIE['adm_lim'];
		$q = "SELECT * from Recharge ORDER BY datestamp DESC LIMIT $limit";
		$result = mysql_query($q) or die("query1");
		echo '<table>';
		WHILE($rows = mysql_fetch_array($result))
		{
			$ID 			= $rows['ID'];
			$re_phone 		= $rows['re_phone'];
			$re_operator 	= $rows['re_operator'];
			$re_amount 		= $rows['re_amount'];
			$re_email 		= $rows['re_email'];
			$active 		= $rows['active'];
			$datestamp 		= $rows['datestamp'];
			$check			= '';
			if($active == '0')
			{
				$checked = 'checked';
				$status = 'Done';
			}
			else
			{
				$checked = '';
				$check = 'checked';
				$status = 'Pending';
			}
			echo '<tr id="'.$ID.'">';
			echo '<td>'.$ID.'</td>';
			echo '<td>'.$re_phone.'</td>';
			echo '<td>'.$re_operator.'</td>';
			echo '<td>'.$re_amount.'</td>';
			echo '<td>'.$re_email.'</td>';
			echo '<td>'.$datestamp.'</td>';
			echo '<td>	
					<form action="">
						<input type="radio" name="process" value="done" onClick="process_rec(`'.$ID.'`);" '.$checked.'> done<br>
						<input type="radio" name="process" value="pending" onClick="process_pending(`'.$ID.'`);" '.$check.'> pending
					</form>
				</td>';	
			echo '<td id="status_'.$ID.'">'.$status.'</td>';
			if($active == '1')
			{
				echo '<td><input type="button" value="refund" onClick="process_refund(`'.$ID.'`);"></input></td>';
			}
			echo '</tr>';
		}
		echo '</tr></table>';
mysql_close($conn);
?>
<script type="text/javascript">
	function process_refund(e){
	var p="process_refund="+"process_refund"+"&refund_ID="+e+"&refund_session="+"arka";
	var g="";
	var Li="/code.php";
	var el="update_error";
	lod(g,p,Li,el);
	document.getElementById("status_"+e).innerHTML = "Refunded";
	document.getElementById(e).style.display = "none";
	console.log(e);
	}
	function process_rec(e){
	var p="recharge_process="+"recharge_process"+"&recharge_ID="+e+"&recharge_session="+"arka";
	var g="";
	var Li="/code.php";
	var el="update_error";
	lod(g,p,Li,el);
	document.getElementById("status_"+e).innerHTML = "Done";
	console.log(e);
	}
	function process_pending(e){
	var p="recharge_declined="+"recharge_process"+"&recharge_ID="+e+"&recharge_session="+"arka";
	var g="";
	var Li="/code.php";
	var el="update_error";
	lod(g,p,Li,el);
	document.getElementById("status_"+e).innerHTML = "Pending";
	console.log(e);
	}
</script>
</body>
</html>
