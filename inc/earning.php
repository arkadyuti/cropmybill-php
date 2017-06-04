<link href="../static/css/earning.css" rel="stylesheet" type="text/css">
<div style="min-width:1152px;">
	<div class="earning-body">
		<div style="width:100%;">
			<div class="ear_body">
				<div class="left-part">
					<div class="profile_img">
						<div class="img_rounded">
							<img src="../static/images/dp.png" width=100%>
						</div>
					</div>
					<div class="all_options">
						<div class="one_option" id="acc_1">
							Account Settings
						</div>
						<div class="one_option active" id="acc_2">
							My Earnings
							<div class="triangle">
							</div>
						</div>
						<div class="one_option" id="acc_2">
							Redeem
						</div>
						<div class="one_option" id="acc_2">
							Missing Cashback
						</div>
						<div class="one_option" id="acc_2">
							Refer & Earn
						</div>
					</div>
				</div>
				<div class="right-part">
					<div class="all_tabs">
						<div class="one_tab tab_active" id="button1" onclick=tabchange('tab1')>
							Earnings Summary
						</div>
						<div class="one_tab" id="button2" onclick=tabchange('tab2')>
							Cashback Earnings
						</div>
						<div class="one_tab" id="button3" onclick=tabchange('tab3')>
							Referral Earnings
						</div>
						<div class="one_tab" id="button4" onclick=tabchange('tab4')>
							Clicks History
						</div>
					</div>
					<div id="tab1">
						<div class="account_head" style="font-size:24px;margin: 30px 30px 0;">Earnings Summary</div>
						<div class="earning_box">
							<table class="acc_table" style="width:400px;">
								<tr>
									<td>Earning</td><td>Amount</td>
								</tr>
								<tr>
									<td>Total Earnings</td><td>&#8377; 89.7</td>
								</tr>
								<tr>
									<td>Paid Earnings</td><td>&#8377; 0.00</td>
								</tr>
								<tr>
									<td>Earnings Available for payment</td><td>&#8377; 89.7</td>
								</tr>
								<tr>
									<td>Cashback waiting retailer approval</td><td>&#8377; 0</td>
								</tr>
								<tr>
									<td>Referral Earnings</td><td>&#8377; 0</td>
								</tr>
							</table>
						</div>
					</div>
					<div id="tab2" style="display:none;">
						<div class="account_head" style="font-size:24px;margin: 30px 30px 0;">Cashback Earnings (&#8377; <span id="cashback_earning"></span>)</div>
						<table class="acc_table" style="width:700px;">
							<tr>
								<td>Date</td>
								<td>Merchant</td>
								<td>Amount</td>
								<td>Status</td>
								<td>Probable Confirmed Date</td>
							</tr>
							<?php
							$total = 0;
							$approved = 0;
							/*$email = $session;
							$q = "SELECT flipkart.id as id,flipkart.Title as Offer_name, flipkart.status as status, flipkart.payout, flipkart.OrderDate as datetime, redirect3.session as session
									FROM flipkart
									INNER JOIN redirect3
									ON flipkart.`affiliate_info1`=redirect3.aff_sub and redirect3.session = '$email'
									GROUP BY flipkart.id order by flipkart.`affiliate_info1` desc;";
							$result = mysql_query($q) or die("query1");
							WHILE($rows = mysql_fetch_array($result))
							{
								echo '<tr>';
								
								//echo $rows['id'].'-		-Flipkart-	-'.$rows['status'].'-	-'.$rows['payout'].'-	-'.$rows['datetime'].'-	-'.$rows['session'];
								$payout = (number_format(($rows['payout']), 2, '.', ''));
								$datestamp = date_format(new DateTime($rows['datetime']), 'jS F Y');
								$probable = date('jS F Y',strtotime(''.$datestamp.' + 90 days'));
								if(isset($rows['status']))
								{
									if ($rows['status'] == 'tentative')
										$status = 'Pending';
									elseif($rows['status'] == 'processed')
										$status = 'Confirmed';
									else
										$status = 'Pending';
								}
								echo '<td>'.$datestamp.'</td><td>Flipkart</td><td>'.(number_format(($payout*(.9)), 2, '.', '')).'</td><td>'.$status.'</td><td>'.$probable.'</td>';
								echo '</tr>';
								if($rows['status'] == 'processed')
									$approved = $approved + (number_format(($payout*(.9)), 2, '.', ''));
								$total = $total + number_format(($payout*(.9)), 2, '.', '');
							}*/
							/*$q = "SELECT vcommision.id as id,vcommision.Offer_name as Offer_name, vcommision.status as status, vcommision.payout, vcommision.datetime as datetime, redirect3.aff_sub as session
									FROM vcommision
									INNER JOIN redirect3
									ON vcommision.`affiliate_info1`=redirect3.aff_sub and redirect3.session = '$email'
									GROUP BY vcommision.id order by vcommision.datetime desc;";
							$result = mysql_query($q) or die("query1");
							
							WHILE($rows = mysql_fetch_array($result))*/
							$t=10;
							WHILE($t--)
							{
								echo '<tr>';
								/*$Offer_name = explode('.',$rows['Offer_name']);
								$payout = (number_format(($rows['payout']), 2, '.', ''));
								$datestamp = date_format(new DateTime($rows['datetime']), 'jS F Y');
								$approve_date = date('jS F Y');

								//echo $approve_date.'<br>';
								//echo $datestamp.'<br>';
								$datetime1 = date_create($approve_date);
								$datetime2 = date_create($datestamp);
								$interval = date_diff($datetime1, $datetime2);
								$d_dif = $interval->format('%a');
								$status = 'Pending';
								if(($rows['status'] == 'approved') && ($d_dif>30))
								{
									$approved = $approved + (number_format(($payout*(.9)), 2, '.', ''));
									$status = 'Confirmed';
								}
								$total = $total + number_format(($payout*(.9)), 2, '.', '');
								$probable = date('jS F Y',strtotime(''.$datestamp.' + 90 days'));*/
								echo '<td>21st August 2015</td><td>Amazon</td><td>36.32</td><td>Confirmed</td><td>19th November 2015</td>';
								echo '</tr>';
								
							}
							?>
						</table>
					</div>
					<div id="tab3" style="display:none;">
						<?php
						/*$q 			= "SELECT pending,confirmed,refer_code FROM login WHERE signup_email = '$email'";
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
						$name_conf	= array();*/
						/*WHILE($res = mysql_fetch_array($query))
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
						$count_act	= $count_act * 10;*/
						echo '
						<div class="account_head" style="font-size:24px;margin: 30px 30px 0;">Referral Earnings(&#8377; 123)</div>
						<table class="acc_table" style="width:550px;">
							<tr>
								<td>ID</td>
								<td>Friend&#39s Name</td>
								<td>Status</td>
								<td>Bonus</td>
							</tr>
							';
							$count_id = 1;
							$loop_size=100;
							//foreach ($name_conf as $value) 
							WHILE($count_id<=5)
							{
								echo '<tr><td>'.$count_id.'</td>';
								echo '<td>Sanchit</td>';
								echo '<td>Active</td>';
								echo '<td>Rs. 10</td></tr>';
								$count_id++;
							}
							//foreach ($name_pend as $value) 
							WHILE($count_id<=$loop_size)
							{
								echo '<tr><td>'.$count_id.'</td>';
								echo '<td>Sanchit</td>';
								echo '<td>Not Active</td>';
								echo '<td>Rs. 10</td></tr>';
								$count_id++;
							}
						?>
						</table>
					</div>
					<div id="tab4" style="display:none;">
						<div class="account_head" style="font-size:24px;margin: 30px 30px 0;">Clicks History</div>
						<table class="acc_table" style="width:650px;">
							<tr>
								<td>ID</td>
								<td>Merchant</td>
								<td>Time</td>
								<td>Total Clicks</td>
							</tr>
							<?php
							//$result = mysql_query("SELECT * FROM redirect3 WHERE session='$email' ORDER BY `timestamp` DESC LIMIT 5") or die("query1");
							$count=1;
							//WHILE($rows = mysql_fetch_array($result))
							WHILE($count<=$loop_size)
							{
								/*$product_name = $rows['cname'];
								$time = date_format(new DateTime($rows['timestamp']), 'jS F Y g:ia');
								$aff_sub = $rows['aff_sub'];
								$result2=mysql_query("SELECT count(cname) as total from redirect3 WHERE cname='$product_name' AND session='$email'");
								$data=mysql_fetch_assoc($result2);
								$clicks=$data['total'];*/
								echo '
								<tr>
								<td>20160107000357</td>
								<td>Amazon</td>
								<td>15th September 2015 11:19pm</td>
								<td>5</td></tr>
								';
								$count = $count+1;
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript">
	tab_active='tab1';
	function tabchange(name)
	{
		document.getElementById(tab_active).style.display="none";
		document.getElementById(name).style.display="block";
		document.getElementById('button'+tab_active[3]).className="one_tab";
		document.getElementById('button'+name[3]).className="one_tab tab_active";
		tab_active=name;
	}
	function sendupdate(){
	var name = document.getElementById("update_name").value;
	var cpass = document.getElementById("update_cPass").value;
	var pass = document.getElementById("update_pass").value;
	if((pass=='')||(cpass=='')||(cpass==''))
	{
		alert("Please fill up the form");
		return false;
	}
	if(cpass!=pass)
	{
		alert("Password does not match");
		return false;
	}
	var p="update_name="+document.getElementById("update_name").value+"&update_phone="+document.getElementById("update_phone").value
			+"&update_cPass="+document.getElementById("update_cPass").value
			+"&update_eamil="+document.getElementById("update_eamil").value;
	var g="";
	var Li="/code.php";
	var el="update_error";
	lod(g,p,Li,el);
	}
	</script>

	
<?php
/*$result		= mysql_query("SELECT (SELECT SUM(transfer_amount) as tmp1 from BankTransfer where bank_email = '$email') as bank,
						(SELECT SUM(re_amount) as tmp2 from Recharge where re_email = '$email') as recharge
						FROM BankTransfer, Recharge ");
	if($result)
	{
		$paid 		= mysql_fetch_array($result, MYSQL_ASSOC);
		$bank 		= $paid['bank'];
		$recharge	= $paid['recharge'];
	}else
	{
		$bank 		= 0;
		$recharge	= 0;
	}
*/
?>

<script>
	/*document.getElementById("cashback_earning").innerHTML = "<?php echo $total;?>";
	document.getElementById("total_earning").innerHTML = "<?php echo $total+$count_ref+$count_act;?>";
	document.getElementById("paid_earning").innerHTML = "<?php echo $bank + $recharge;?>.00";
	<?php 
	if((($approved+$count_act)-($bank + $recharge))<0)
		$available_e = 0;
	else
		$available_e = (($approved+$count_act)-($bank + $recharge))
	?>		
	document.getElementById("available_earning").innerHTML = "<?php echo $available_e;?>";
	document.getElementById("waiting_earning").innerHTML = "<?php echo $total - $approved;?>";
	document.getElementById("refer_earning").innerHTML = "<?php echo $count_ref+$count_act;?>";*>*/
</script>