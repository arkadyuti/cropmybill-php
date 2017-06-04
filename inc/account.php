<link href="../static/css/account.css" rel="stylesheet" type="text/css">
<div style="min-width:1152px;">
	<div class="account-body">
		<div style="width:100%;">
			<div class="acc_body">
				<div class="left-part">
					<div class="profile_img">
						<div class="img_rounded">
							<img src="../static/images/dp.png" width=100%>
						</div>
					</div>
					<div class="all_options">
						<div class="one_option active" id="acc_1">
							Account Settings
							<div class="triangle">
							</div>
						</div>
						<div class="one_option" id="acc_2">
							My Earnings
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
							Basic Info
						</div>
						<div class="one_tab" id="button2" onclick=tabchange('tab2')>
							Change Password
						</div>
					</div>
					<div id="tab1">
						<form id="update_basic" class="myform" method="post">
							<div class="row">
								<label for="update_name">Full Name</label>
								<input type="text" name="update_name" id="update_name" value="Rounak Agarwal"/>
							</div>
							<div class="row">
								<label for="update_eamil">Email Address</label>
								<input type="email" name="update_eamil" id="update_eamil" value="rounak@gmail.com" disabled/>
							</div>
							<div class="row">
								<label for="update_phone">Phone Number</label>
								<input type="text" name="update_phone" id="update_phone" value="7567567557"/>
							</div>
							<div class="row">
								<label for="update_gender">Gender</label>
								<select class="form-control">
									<option> -- Select -- </option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
							<input onclick="sendupdate();" class="update_button" style="color:#fff; width:160px;margin-right:400px;" type="button" name="update_account" id="update_account" value="Save Changes"/>
						</form>
						<div id="update_error" style="float:right;color:red;"></div>
					</div>
					<div id="tab2" style="display:none;">
						<form id="update_pass" class="myform" method="post">
							<div class="row">
								<label for="update_opass">Previous Password</label>
								<input type="password" name="update_opass" id="update_opass" value=""/>
							</div>
							<div class="row">
								<label for="update_pass">New Password</label>
								<input type="password" name="update_pass" id="update_pass" value=""/>
							</div>
							<div class="row">
								<label for="update_cPass">Confirm Password</label>
								<input type="password" name="update_cPass" id="update_cPass"/>
							</div>
							<input onclick="sendupdate();" class="update_button" style="color:#fff; width:160px;margin-right:400px;" type="button" name="update_pass" id="update_pass" value="Save Changes"/>
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
	<script type="text/javascript">
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
	