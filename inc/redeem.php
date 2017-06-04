<link href="../static/css/redeem.css" rel="stylesheet" type="text/css">
<div style="min-width:1152px;">
	<div class="redeem-body">
		<div style="width:100%;">
			<div class="red_body">
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
						<div class="one_option" id="acc_2">
							My Earnings
						</div>
						<div class="one_option active" id="acc_2">
							Redeem
							<div class="triangle">
							</div>
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
							Phone Recharge
						</div>
						<div class="one_tab" id="button2" onclick=tabchange('tab2')>
							Bank Transfer
						</div>
						<div class="one_tab" id="button3" onclick=tabchange('tab3')>
							Online Wallet
						</div>
					</div>
					<div id="tab1">
						<form id="phone_recharge" class="myform" method="post">
							<div class="row">
								<label for="mobile number">Mobile Number</label>
								<input type="number" name="update_name" id="update_name" value="7675875675"/>
							</div>
							<div class="row">
								<label for="update_gender">Select Operater</label>
								<select class="form-control">
									<option> -- Select -- </option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
							<div class="row">
								<label for="update_eamil">Enter Amount</label>
								<input type="number" name="update_eamil" id="update_eamil"/>
							</div>
							<input onclick="sendupdate();" class="update_button" style="color:#fff; width:160px;margin-right:400px;" type="submit" name="update_account" id="update_account" value="Submit"/>
						</form>
						<div id="update_error" style="float:right;color:red;"></div>
					</div>
					<div id="tab2" style="display:none;">
						<form id="bank_transfer" class="myform" method="post">
							<div class="row">
								<label for="update_opass">Account Holder's Name</label>
								<input type="text" name="update_opass" id="update_opass" value=""/>
							</div>
							<div class="row">
								<label for="update_pass">Account Number</label>
								<input type="number" name="update_pass" id="update_pass" value=""/>
							</div>
							<div class="row">
								<label for="update_pass">Bank Name</label>
								<input type="text" name="update_pass" id="update_pass" value=""/>
							</div>
							<div class="row">
								<label for="update_pass">IFSC Code</label>
								<input type="text" name="update_pass" id="update_pass" value=""/>
							</div>
							<div class="row">
								<label for="update_pass">Amount</label>
								<input type="number" name="update_pass" id="update_pass" value=""/>
							</div>
							<input onclick="sendupdate();" class="update_button" style="color:#fff; width:160px;margin-right:400px;" type="submit" name="update_pass" id="update_pass" value="Submit"/>
						</form>
						<div id="update_error" style="float:right;color:red;"></div>
					</div>
					<div id="tab3" style="display:none;">
						<form id="online_wallet" class="myform" method="post">
							<div class="row">
								<label for="update_gender">Select Wallet</label>
								<select class="form-control">
									<option> -- Select -- </option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
							<div class="row">
								<label for="update_opass">Mobile Number linked with Paytm</label>
								<input type="number" name="update_opass" id="update_opass" value=""/>
							</div>
							<div class="row">
								<label for="update_pass">Amount</label>
								<input type="number" name="update_pass" id="update_pass" value=""/>
							</div>
							<input onclick="sendupdate();" class="update_button" style="color:#fff; width:160px;margin-right:400px;" type="submit" name="update_pass" id="update_pass" value="Submit"/>
						</form>
						<div id="update_error" style="float:right;color:red;"></div>
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