<?php 
if ($session == null)
{
	if(isset($_GET['ref']))
	{
		echo '<script>SC("cmb_r", "'.$_GET['ref'].'", 30);</script>';
		//echo $_GET['ref'].'<br>';
		echo '
		<script>
		joinus();
		document.getElementById("sign_in1").click();
		</script>
		';
	}
	else
	{
		if(isset($_COOKIE['cmb_r']))
		{
			if($_COOKIE['cmb_r'] != md5('0000'))
			{	
				echo '
				<script>
				document.getElementById("sign_in1").click();
				</script>
				';
			}
			else
				echo '<script>SC("cmb_r", "'.md5('0000').'", 30);</script>';
		}
		else
			echo '<script>SC("cmb_r", "'.md5('0000').'", 30);</script>';
		
	}
}
?>
<script>

//window.onload = function() {
  //joinus();
  //document.getElementById("sign_in1").click();
//};
</script>