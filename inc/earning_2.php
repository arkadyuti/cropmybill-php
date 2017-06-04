<?php
echo '
	<div style="padding: 0px 30px 14px 100px;">
		<div style="padding: 0px 20px 0px 20px;">
			<div id="menu" class="menu">
				<a class="afont" href="/account"><div id="myacc" class="float">My Account</div></a>
				<a class="afont" href="/earning"><div id="earning" class="float" style="background-color: rgba(243, 240, 255, 0.8);color: black;">Earnings</div></a>
				<a class="afont" href="/redeem"><div id="redeem" class="float" >Redeem</div></a>
			</div>
	
		
		<style>
			table.earning tr:nth-child(odd) {
				background-color: #f1f1f1;
				border: 1px solid grey;
				border-collapse: collapse;
			}
			table.earning tr:nth-child(even) {
				background-color: #ffffff;
				border: 1px solid grey;
				border-collapse: collapse;
			}
			table.earning td:nth-child(odd) {
				border: 1px solid grey;
				border-collapse: collapse;
				padding: 15px 25px 10px 25px;
			}
			table.earning td:nth-child(even) {
				border: 1px solid grey;
				border-collapse: collapse;
				padding: 15px 25px 10px 25px;
			}
			table.earning {
				border: 1px solid grey;
				border-collapse: collapse;
				text-align:center;
				text-transform: uppercase;
				align:center;
				width:100%;
			}
		</style>';
		
			$email= $session;
		
		date_default_timezone_set("Asia/Kolkata");
		$today 		= date("Y-m-d");
		$q 			= "SELECT pending,confirmed,refer_code FROM login WHERE signup_email = '$email'";
		$re 		= mysql_query($q) ;
		$qre 		= mysql_fetch_array($re, MYSQL_ASSOC) ;
		//$temp 	= explode(" ",$qre['signup_name']);
		$confirmed	= $qre['confirmed'];
		$pending 	= $qre['pending'];
		$refer_code = $qre['refer_code'];
		$query		= mysql_query("SELECT active,refer_code,referral_name from refer where refer_code = '$refer_code'");
		//$res		= mysql_fetch_array($query, MYSQL_ASSOC);
		$count_ref	= 0;
		$count_act	= 0;
		$name_pend	= array();
		$name_conf	= array();
		WHILE($res = mysql_fetch_array($query))
		{
			if($res['active'] == 1)
			{
				$count_act++;
				$name_conf[] = $res['referral_name'];
			}
			else
			{
				$count_ref++;
				$name_pend[] = $res['referral_name'];
			}
		}
		$count_ref	= $count_ref * 10;
		$count_act	= $count_act * 10;
		echo '
			<div style="background-color:white; width:750px;min-height: 600px;">
				<div class="earning_body" style="padding-bottom:50px;padding-top:50px;">';
					echo '
					<h2 align="left" style="font-size:2em; font-weight: normal;color:#1F68A5;margin-left:10px;font-family: Arial,Helvetica,sans-serif;">
					Your Earning Summary
					</h2>
					<h2 align="left" style="font-size:1.6em; font-style: italic;font-weight: normal;color:#5e7e9e;margin-left:40px;">
					<table>
					<tr>
					<td style="font-size:1.6em; font-weight: normal;color:#5e7e9e;margin-left:40px;font-family: latoregular,Arial,sans-serif;">Pending Cash</td><td style="padding:30px; font-style: normal; font-size: 1.6em; color:#194775;font-family: sans-serif;">
						Rs. '.$pending.'</td></tr>
					<tr>
					<td style="font-size:1.6em; font-weight: normal;color:#5e7e9e;margin-left:40px;font-family: latoregular,Arial,sans-serif;">Confirmed Cash</td><td style="padding:30px; font-style: normal; font-size: 1.6em; color:#194775;font-family: sans-serif;">
						Rs. '.$confirmed.'</td></tr></table>
					</h2>
					<h2 align="left" style="font-size:2em; font-weight: normal;color:#1F68A5;margin-left:10px;font-family: Arial,Helvetica,sans-serif;">
					Your Referral Summary
					</h2>
					<h2 align="left" style="font-size:1.6em; font-style: italic;font-weight: normal;color:#5e7e9e;margin-left:40px;">
					<table>
					<tr>
					<td style="font-size:1.6em; font-weight: normal;color:#5e7e9e;margin-left:40px;font-family: latoregular,Arial,sans-serif;">Referral Point</td><td style="padding:30px; font-style: normal; font-size: 1.6em; color:#194775;font-family: sans-serif;">
						 '.$count_ref.'</td>
					<td>
					';
					print_r ($name_pend);
					echo '</td>
					</tr>
					<tr>
					
					';
					if($count_act != 0)
					{
					echo '
					<td style="font-size:1.6em; font-weight: normal;color:#5e7e9e;margin-left:40px;font-family: latoregular,Arial,sans-serif;">Confirmed Referral Point</td><td style="padding:30px; font-style: normal; font-size: 1.6em; color:#194775;font-family: sans-serif;">
						 '.$count_act.'</td>
					<td>
					';
					print_r ($name_conf);
					echo '</td>
					</tr>
					</h2>
					';
					}
					echo '</table>';
					$result = mysql_query("SELECT * FROM redirect3 WHERE session='$email' ORDER BY `timestamp` DESC LIMIT 20") or die("query1");
					$count=1;
					echo '
					<table class="earning">
					<tr>
					<td>ID</td>
					<td>Merchant</td>
					<td>Last Click</td>
					<td>Number of clicks</td>
					</tr>
					';
					WHILE($rows = mysql_fetch_array($result))
					{
						$product_name = $rows['cname'];
						$time = $rows['timestamp'];
						$result2=mysql_query("SELECT count(cname) as total from redirect3 WHERE cname='$product_name' AND session='$email'");
						$data=mysql_fetch_assoc($result2);
						$clicks=$data['total'];
						echo '
						<tr>
						<td>'.$count.'</td>
						<td>'.$product_name.'</td>
						<td>'.$time.'</td>
						<td>'.$clicks.'</td></tr>
						';
						$count = $count+1;
					}
					echo '</table>';
					
					echo '
				</div>
			</div>';
?>
		</div>
	</div>