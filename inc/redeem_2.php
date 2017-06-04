<style>
.crop_dialog_overlay
{
   position: fixed;
   top: 0;
   right: 0;
   bottom: 0;
   left: 0;
   height: 100%;
   width: 100%;
   margin: 0;
   padding: 0;
   background: #000000;
   opacity: .65;
   filter: alpha(opacity=15);
   -moz-opacity: .15;
   z-index: 101;
   display: none;
   background: url("images/bs-overlay.png");
}
.recharge_submit
{
   display: none;
   position: fixed;
   width: 390px;
   height: 202px;
   top:50%;
   left:50%;
   align:center;
   margin-left: -190px;
   margin-top: -100px;
   background-color: #ffffff;
   border: 1px solid #336699;
   border-radius:5px;
   padding: 0px;
   z-index: 102;
}
.menu {
	height:34px;
	padding-bottom:5px;
}
.float{
	text-align:center;
	float:left;
	padding:7px;
	cursor:pointer;
	background-color:#34495e;
	border-left: 2px solid #34495e;
	border-top: 2px solid #34495e;
	border-right: 2px solid #34495e;
	border-radius:2px 2px 0px 0px;
	margin:2px;
	width:100px;
}
.selected{
	background-color:rgba(243, 240, 255, 0.8);
	color:black;
}
.aboutus_body
{
	width:670px;
	text-align:left;
	display:none;
}
.FAQs_body
{
	width:100%;
	text-align:left;
	display:block;
}
.myacc_body
{
	width:670px;
	text-align:left;
	display:block;
}
.earning_body
{
	width:99-%;
	text-align:left;
	display:block;
}
.redeem_body
{
	width:100%;
	text-align:left;
	display:block;
}
.afont
{
	color:white;
	font-size: 1.1em;
	font-family: Arial,Helvetica,sans-serif;
}
.headerclass_a
{
	display: block;
	padding: 10px 0;
	font-size:1.2rem;
	font-weight:bold;
	color:#b7c3c7;
}
</style> 
<script src="/js/jquery-1.11.0.min.js"></script>
<div style="padding: 0px 30px 14px 100px;">
		<div style="padding: 0px 20px 0px 20px;">
			<div id="menu" class="menu">
				<a class="afont" href="/account"><div id="myacc" class="float">My Account</div></a>
				<a class="afont" href="/earning"><div id="earning" class="float">Earnings</div></a>
				<a class="afont" href="/redeem"><div id="redeem" class="float" style="background-color: rgba(243, 240, 255, 0.8);color: black;">Redeem</div></a>
			</div>
		<?php
		$email= $session;
		$conn_redeem	= mysql_connect("localhost","arka_cropmybill","9735525775");
		mysql_select_db("arka_cropmybill", $conn_redeem);
		$q = "SELECT signup_name FROM login WHERE signup_email = '$email'";
		$re = mysql_query($q);
		$qre = mysql_fetch_array($re, MYSQL_ASSOC);
		$temp = explode(" ",$qre['signup_name']);
		$signup_name = $temp[0];
		mysql_close($conn_redeem);
		echo '		
		<script>
		$("#redeem").addClass("selected");
		</script>
		<div id="overlay" class="crop_dialog_overlay"></div>
		<div id="dialog" class="recharge_submit">
		<div style="width:100%;padding-left:20px;" align="left">
		<img width="70%" height="auto" align="center" src="img/logoPopup.png"/>
		<hr width="90%">
		</div>
		<div style="width:100%;padding:0px 20px 0px 20px;" align="left">
		<p style="font-size: 1.4em;color: #34495e; font-weight:bold;">Congratulations '.$signup_name.'</p>
		</div>
		<div style="width:100%;" align="left">
		<p style="width:90%;font-size: 1.1em;color: #34495e;padding-left:20px;text-justify: inter-word;">We have received 
		your request. Your recharge will be processed within 48 working hours.</p>
		</div>
		</div>
		<!--bank transfer-->
		<div id="overlay2" class="crop_dialog_overlay"></div>
		<div id="dialog2" class="recharge_submit">
		<div style="width:100%;padding-left:20px;" align="left">
		<img width="70%" height="auto" align="center" src="img/logoPopup.png"/>
		<hr width="90%">
		</div>
		<div style="width:100%;padding:0px 20px 0px 20px;" align="left">
		<p style="font-size: 1.4em;color: #34495e; font-weight:bold;">Congratulations '.$signup_name.'</p>
		</div>
		<div style="width:100%;" align="left">
		<p style="width:90%;font-size: 1.1em;color: #34495e;padding-left:20px;text-justify: inter-word;">We have received 
		your request. Your transfer will be processed within 12 working days.</p>
		</div>
		</div>
				<div style="background-color:white; width:750px;min-height: 600px;">
					<div class="redeem_body" style="padding-bottom:50px;padding-top:50px;">
						<a id="phoneR" align="left" style="font-family: Arial,Helvetica,sans-serif;cursor:pointer;font-size:2em; font-weight: normal;color:#1F68A5;margin-left:40px;float:left;">
							Recharge Phone
							<a style="cursor:pointer;font-size:2em;margin-left:10%;"> | </a>
						</a>
						<a id="bankT" align="left" style="font-family: Arial,Helvetica,sans-serif;cursor:pointer;font-size:2em; font-weight: normal;color:#1F68A5;margin-right:60px;float:right;">
							Transfer to Bank</a>
						<div id="portal" style="padding:50px;">
							<div style="height:20px;width:auto;">
								<span id="update_error"></span> 
							</div>
							<form id="recharge" name="recharge" class="phone_recharge" align="left">
								<input type="tel" name="re_phone" id="re_phone" placeholder="Enter Mobile Number" maxlength="10" onkeypress="return isNumberKey(event)"/>
								<select name="re_operator" id="re_operator">
								<option value="">Select Operator</option>
								<option value="Aircel">Aircel</option>
								<option value="Airtel">Airtel</option>
								<option value="BSLN">BSLN</option>
								<option value="Idea">Idea</option>
								<option value="MTNL">MTNL</option>
								<option value="MTS">MTS</option>
								<option value="Reliance CDMA">Reliance CDMA</option>
								<option value="Reliance GSM">Reliance GSM</</option>
								<option value="Tata Docomo">Tata Docomo</option>
								<option value="Tata Indicom">Tata Indicom</option>
								<option value="Uninor">Uninor</option>
								<option value="Videocon">Videocon</option>
								<option value="Virgin CDMA">Virgin CDMA</option>
								<option value="Virgin GSM">Virgin GSM</option>
								<option value="Vodafone">Vodafone</option></select>
								<input type="tel" name="re_amount" id="re_amount" placeholder="Enter Amount" maxlength="3" onkeypress="return isNumberKey(event)"/>
								<input type="hidden" name="re_email" id="re_email" value="'.$email.'"/>
								<br>
								<input style="margin-left:45%; width:100px;height:35px;font-size:1.1em;color:white;background-color:#194775;" type="button" name="recharge_submit" id="recharge_submit" value="Submit"/>
								<div id="hidden" style="display:none"> <input type="reset" value="reset"/></div>
							</form>
					<script type="text/javascript">
					$(document).ready(function()
					{
						$("#recharge_submit").click(function()
						{
							if($("#re_phone").val()<=999999999)
							{
								$("#update_error").show().html("Enter 10 digit Phone Number !").fadeOut( 2000 );
								$("#update_error").css("color","red");
								return false;
							} 
							else
							{
								var re_phone = $("#re_phone").val();
							}
							if($("#re_operator").val()=="")
							{
								$("#update_error").show().html("Enter Service Provider!").fadeOut( 2000 );
								$("#update_error").css("color","red");
								return false;
							}
							else
							{
								var re_operator = $("#re_operator").val();
							}
							if($("#re_amount").val()<=9)
							{
								$("#update_error").show().html("Enter Amount at least 10!").fadeOut( 2000 );
								$("#update_error").css("color","red");
								return false;
							} 
							else
							{
								var re_amount = $("#re_amount").val();
								document.getElementById("recharge").reset();
							}
							if($("#re_email").val()=="")
							{
								$("#update_error").show().html("Some Error Occurred").fadeOut( 2000 );
								$("#update_error").css("color","red");
								return false;
							} 
							else
							{
								var re_email = $("#re_email").val();
							}
							jQuery.post("./jcode.php", {re_phone:re_phone,re_operator: re_operator, re_amount: re_amount, re_email:re_email},
							function(data, textStatus)
							{
								if(data == 1)
								{
									myFunction();
								}
								else if(data==2)
								{
									$("#update_error").html("Insufficient Balance").show().fadeOut( 15000 );
								}
								else
								{
									//window.location="error.php";
									$("#update_error").html("Unsuccessful").show().fadeOut( 5000 );
									$("#update_error").css("color","red");
								}
							});
						});
					});
					  function myFunction (e)
					  {
						 ShowDialog(false);
						 e.preventDefault();
					  }
					   function ShowDialog(modal)
					   {
						  $("#overlay").show();
						  $("#dialog").fadeIn(300);
						  if (modal)
						  {
							 $("#overlay").unbind("click");
						  }
						  else
						  {
							 $("#overlay").click(function (e)
							 {
								HideDialog();
							 });
						  }
					   }
					   function HideDialog()
					   {
						  $("#overlay").hide();
						  $("#dialog").fadeOut(300);
					   } 
					</script>
						</div>
						<div id="portal_bank" style="padding:50px;display:none;">
						<div style="height:20px;width:auto;">
						<span id="update_error2"></span> </div>
							<form id="BankTransfer" class="bank_transfer" align="left">
								<input type="text" id="acc_holder" placeholder="Account Holders Name"/>
								<input type="tel" id="acc_number" placeholder="Account Number" onkeypress="return isNumberKey(event)"/>
								<input type="text" id="bank_name" placeholder="Bank Name"/>
								<input type="text" id="branch_name" placeholder="Branch Name"/>
								<input type="text" id="ifsc_code" placeholder="IFSC Code"/>
								<input type="tel" id="transfer_amount" placeholder="Amount" onkeypress="return isNumberKey(event)"/>
								<input type="hidden" id="bank_email" value="'.$email.'"/>
								<br>
								<input id="acc_submit" style="margin-left:45%; width:100px;height:35px;font-size:1.1em;color:white;background-color:#194775;" type="button" value="Submit"/>
							</form>
							<script type="text/javascript">
							$(document).ready(function()
							{
								$("#acc_submit").click(function()
								{
									if($("#acc_holder").val()=="")
									{
										$("#update_error2").show().html("Enter Correct Account Holder Name!").fadeOut( 2000 );
										$("#update_error2").css("color","red");
										return false;
									} 
									else
									{
										var acc_holder = $("#acc_holder").val();
									}
									if($("#acc_number").val()=="")
									{
										$("#update_error2").show().html("Enter Correct Account Numberr!").fadeOut( 2000 );
										$("#update_error2").css("color","red");
										return false;
									}
									else
									{
										var acc_number = $("#acc_number").val();
									}
									if($("#bank_name").val()=="")
									{
										$("#update_error2").show().html("Enter Bank Name!").fadeOut( 2000 );
										$("#update_error2").css("color","red");
										return false;
									} 
									else
									{
										var bank_name = $("#bank_name").val();
									}
									if($("#branch_name").val()=="")
									{
										$("#update_error2").show().html("Enter Branch Name").fadeOut( 2000 );
										$("#update_error2").css("color","red");
										return false;
									} 
									else
									{
										var branch_name = $("#branch_name").val();
									}
									if($("#ifsc_code").val()=="")
									{
										$("#update_error2").show().html("Enter IFSC code").fadeOut( 2000 );
										$("#update_error2").css("color","red");
										return false;
									} 
									else
									{
										var ifsc_code = $("#ifsc_code").val();
									}
									if($("#transfer_amount").val()<=249)
									{
										$("#update_error2").show().html("Enter Correct Amount").fadeOut( 2000 );
										$("#update_error2").css("color","red");
										return false;
									} 
									else
									{
										var transfer_amount = $("#transfer_amount").val();
									}
									if($("#bank_email").val()=="")
									{
										$("#update_error2").show().html("Some Error Occurred").fadeOut( 2000 );
										$("#update_error2").css("color","red");
										return false;
									} 
									else
									{
										var bank_email = $("#bank_email").val();
										document.getElementById("BankTransfer").reset();
									} 
									jQuery.post("./jcode.php", {acc_holder:acc_holder,acc_number: acc_number, bank_name: bank_name, branch_name:branch_name,ifsc_code:ifsc_code,transfer_amount: transfer_amount,bank_email: bank_email},
									function(data, textStatus)
									{
										if(data == 1)
										{
											myFunction2(); 
										}
										else if(data==2)
										{
											$("#update_error2").html("Insufficient Balance").show().fadeOut( 15000 );
											$("#update_error2").css("color","red");
										}
										else
										{
											//window.location="error.php";
											$("#update_error2").html("Unsuccessful").show().fadeOut( 5000 );
											$("#update_error2").css("color","red");
										}
									});
								});
							});
							  function myFunction2 (e)
							  {
								 ShowDialog2(false);
								 e.preventDefault();
							  }
							   function ShowDialog2(modal2)
							   {
								  $("#overlay2").show();
								  $("#dialog2").fadeIn(300);
								  if (modal2)
								  {
									 $("#overlay2").unbind("click");
								  }
								  else
								  {
									 $("#overlay2").click(function (e)
									 {
										HideDialog2();
									 });
								  }
							   }
							   function HideDialog2()
							   {
								  $("#overlay2").hide();
								  $("#dialog2").fadeOut(300);
							   } 
							</script>
						</div>
					</div>
				</div>';
				?>
	</div>
</div>
<style>
		form.phone_recharge input {
		border-radius:4px;
		width:60%;
		height:40px;
		outline:none;
		margin:10px;
		font-size:1.3em;
		font-family:Cursive;
	}
	.phone_recharge input:focus{
	  border: solid 1px #34495e;
	  box-shadow: 0 0 5px 1px #5e7e9e;
	}
		</style>
	<style>
		form.bank_transfer input,select {
		border-radius:4px;
		width:60%;
		height:40px;
		outline:none;
		margin:10px;
		font-size:1.3em;
		font-family:Cursive;
		}
		.bank_transfer input:focus{
		  border: solid 1px #34495e;
		  box-shadow: 0 0 5px 1px #5e7e9e;
		}
	</style>
	<style>
		table.test td:nth-child(odd) {
			margin: 12px 12px 12px 120px;
			padding: 12px 12px 12px 30px;
			color :#5e7e9e;
			font-size: 22px;
			font-family: latoregular,Arial,sans-serif;
		}
		table.test td:nth-child(even) {
			margin: 12px 12px 12px 120px;
			padding: 12px 12px 12px 140px;
		}
		table.test input {
			border-radius:4px;
			height:132%;
			width:170%;
			outline:none;
		}
		.test input:focus{
		}
		table.test {
			border-collapse: separate;
			border-spacing: 10px;
			*border-collapse: expression("separate", cellSpacing = "10px");
		}
	</style>
	<script>
		function isNumberKey(evt){
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
			return true;
		}
	</script>
	<script>
		$(document).ready(function()
			{
				$("#bankT").click(function()
				{
					$("#portal_bank").show();
					$("#portal").hide();
				});
				$("#phoneR").click(function()
				{
					$("#portal").show();
					$("#portal_bank").hide();
				});
			});
	</script>