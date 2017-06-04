<script>
/*  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66288571-1', 'auto');
  ga('send', 'pageview');
*/
</script>
<script src="/js.js"></script>
<link href="/styles_s.css" rel="stylesheet" type="text/css">
<style>
a, a:hover, a:visited, a:link
{
	text-decoration:none;
}
.headerback
{
	background-color:#1f4987;
	min-width:1152px;
}
.cont
{
	width:1000px;
	margin-left:auto;
	margin-right:auto;
	clear:both;
	background-color:#1f4987;
}
.header
{
	display:table;
	height:90px;
	width:1000px;
	background-color:#1f4987;
}
.joinus
{
	height:36px;
	padding-left:15px;
	padding-right:15px;
	line-height:36px;
	vertical-align:middle;
	margin-top:27px;
	background:#f5f5f5;
	border-radius:6px;
	color:#1f4987;
	font-weight:700;
}
.referbox
{
	height:36px;
	padding-left:15px;
	padding-right:15px;
	line-height:36px;
	vertical-align:middle;
	margin-top:27px;
	border:1px solid #fdd922;
	border-radius:6px;
	color:fdd922;
}
.links
{
	float:right;
}
.picture  a img
{
	border-radius:20px;
	margin-top:25px;
}
.ablock
{
	float:left;
	width:206px;
	padding-right:8px;
	margin-top:0px;
}
.ablock>a>img:hover
{
	opacity:0.7;
}
.allstores
{
	font-weight:500;
	font-size:14px;
	font-family:'Open Sans',Arial, Helvetica, sans-serif;
	float:left;
	margin-right:15px;
	margin-left:15px;
	line-height:90px;
	vertical-align:middle;
	color:white;
}
.refer
{
	font-weight:700;
	font-size:14px;
	font-family:'Open Sans',Arial, Helvetica, sans-serif;
	float:left;
	margin-right:20px;
	margin-left:20px;
	line-height:90px;
	vertical-align:middle;
	color:#fdd922;
}
.refer a
{
	color:#fdd922;
}
.allstores a:hover
{
	color:#fdd922;
}
.allstores a
{
	color:white;
}
.dropbutton
{
	padding-bottom:10px;
}
#picbutt div
{
	padding-bottom:10px;
}
#picdrop:hover
{
	display:block;
}
#picdrop
{
	display:none;
}
#picbutt:hover + #picdrop
{
	display:block;
}
#dropdiv:hover
{
	display:block;
}
#dropdiv
{
	display:none;
}
#dropdown-button:hover + #dropdiv
{
	display:block;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
          box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
.dropdown-menu
{
	top:60px;
	left:-25px;
}
.dropdown {
  position: relative;
}
.dropdown-menu:hover;
{
	display:block;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
  top:70px;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px solid;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
</style>
<?php 
if ($session == null)
{
	if(isset($_GET['ref']))
	{
		echo '<script>SC("cmb_r", "'.$_GET['ref'].'", 1);</script>';
		$refer_cookie = 'yes';
		$refer_code = $_GET['ref'];
	}
	else
	{
		if(isset($_COOKIE['cmb_r']))
		{
			if($_COOKIE['cmb_r'] != md5('0000'))
			{	
				$refer_cookie_set = 'set';
				$refer_code = $_COOKIE['cmb_r'];
			}
			else
			{
				echo '<script>SC("cmb_r", "'.md5('0000').'", 30);</script>';
				$refer_code = '0000';
			}
		}
		else
		{
			echo '<script>SC("cmb_r", "'.md5('0000').'", 30);</script>';
			$refer_code = '0000';
		}
	}
}
?>
<?php
/*
$temp = explode(" ",$_COOKIE['cmb_nm']);
$name = $temp[0];
$name = str_replace("<script>","",$name); 
$name = str_replace("</script>","",$name); 
$name = preg_replace('/[^A-Za-z0-9\-]/', '', $name); 
$name = ($_COOKIE['cmb_nm']);*/
?>
		<div class="headerback">
			<div class="cont">
				<div class="header">
					<div id="logo-floater" class="ablock">
						<a href="/">
							<img src="/img/253.png" width=200px height=80px;/>
						</a>
					</div>
					<div class="links">
						<div class="allstores">
							<a href="/allstore/">
								ALLSTORES
							</a>
						</div>
						<div class="allstores">
							<div class="dropdown">
								<a class="dropdown-toggle dropbutton" style="cursor:pointer;" id="dropdown-button" data-toggle="dropdown" role="button" aria-expanded="false">
									CATEGORIES<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" id="dropdiv" role="menu">
									<li><a href="/usearch/Clothing & Accessories/">Clothing & Accessories</a></li>
									<li><a href="/usearch/Electronics/">Electronics</a></li>
									<li><a href="/usearch/Recharge & Top Up/">Recharge & Top Up</a></li>
									<li><a href="/usearch/Flowers & Gifts/">Flowers & Gifts</a></li>
									<li><a href="/usearch/Footwear/">Footwear</a></li>
									<li><a href="/usearch/Food & Drink/">Food & Drink</a></li>
									<li><a href="/usearch/Travel & Vacations/">Travel & Vacations</a></li>
									<li><a href="/usearch/Baby Products & Toy/">Baby Products & Toy</a></li>
									<li><a href="/usearch/Jewellery/">Jewellery</a></li>
									<li><a href="/usearch/Health & Beauty/">Health & Beauty</a></li>
									<li><a href="/usearch/Home & Kitchen/">Home & Kitchen</a></li>
									<li><a href="/usearch/Books & Stationary/">Books & Stationary</a></li>
									<li><a href="/usearch/Pets/">Pets</a></li>
									<li><a href="/usearch/Eyewear/">Eyewear</a></li>
									<li><a href="/usearch/Others/">Others</a></li>
								</ul>
							</div>
						</div>
						<div class="allstores">
							<a href="/deals/">
								DEALS
							</a>
						</div>
						<div class="allstores">
							<a href="/coupons/">
								COUPONS
							</a>
						</div>
						<div class="allstores refer">
							<a href="/refer">
								<div class="referbox">
									REFER & EARN
								</div>
							</a>
						</div>
						<?php
						if($session==null) {
						echo '
						<div class="allstores" style="margin-right:0px;">
							<a>
								<div class="joinus" onClick="showpop();" style="cursor:pointer;">
									JOIN US
								</div>
							</a>
						</div>
						 ';
						} 
						else
						{
						$logout = getenv ("REQUEST_URI");
						if(isset($_COOKIE['cmb_nm']) && is_numeric($_COOKIE['cmb_nm']))
						{
							$icon = 'https://graph.facebook.com/'.$_COOKIE['cmb_nm'].'/picture';
						}
						else
							$icon = '/img/dp.png';
						//copy("https://graph.facebook.com/782674271821636/picture","E:/DWD/xampp/htdocs/cropNew/img/100002372119019.jpg");
						echo '
						<div class="allstores" style="margin-right:0px;">
							<div class="dropdown">
								<div class="picture">
									<a class="dropdown-toggle" id="picbutt" data-toggle="dropdown" role="button" aria-expanded="false">
										<div><img src="'.$icon.'" width=40px height=40px style="cursor:pointer;"></div>
									</a>
									<ul class="dropdown-menu dropdown-menu-right" id="picdrop" role="menu">
										<li><a href="/account">My Account</a></li>
										<li><a href="/earning">Earning</a></li>
										<li><a href="/redeem">Redeem</a></li>
										<li><a href="/logout.php?log='.$logout.'" style="border-bottom:0px solid black;">Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						';
						}
						?>
					</div>
				</div>
			</div>
		</div>
<script>
function sendin(){
var p="signin_email="+document.getElementById("signin_email").value+"&signin_password="+document.getElementById("signin_password").value;
var g="";
var Li="/code.php";
var el="sign_error";
lod(g,p,Li,el);
}
function sendup(){
var p="signup_name="+document.getElementById("signup_name").value+"&signup_phone="+document.getElementById("signup_phone").value
		+"&signup_email="+document.getElementById("signup_email").value
		+"&refer_code="+document.getElementById("refer_code").value
		+"&signup_password="+document.getElementById("signup_password").value;
var g="";
var Li="/code.php";
var el="signup_error";
lod(g,p,Li,el);
}
function sendforgot(){
var p="reset_email="+document.getElementById("reset_email").value;
var g="";
var Li="/code.php";
var el="forgot_error";
lod(g,p,Li,el);
}
</script>
<div onclick="hidepop()" class="blanket" id="blanket" style="display:none;">
</div>
<div id="popup_body" style="display:none;">
	<div class="cross" onclick=hidepop()>
		<img src="/img/cross_s.png" width=100% height=100%/>
	</div>
	<div class="pop_left">
		<img src="/img/popimg.jpg" width=100% height=100%/>
	</div>
	<div class="pop_right">
		<div id="pop1" class="pop_tab">
			<div class="tab_contents">
				<div class="top_part">
					<div class="social_buttons">
						<a href="<?php echo $loginUrl; ?>">
							<div class="social_btn2">
								<div class="share_trans_fb">
									<div style="width:100%;height:40px;float:center">
										<span class="social_name">Continue with Facebook</span>
									</div>
								</div>
							</div>
						</a>
						<a href="<?php echo $authUrl; ?>">
							<div class="social_btn2">
								<div class="share_trans_goo">
									<div style="width:100%;height:40px;">
										<span class="social_name">Continue with Google+</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="mid_part">
				or use your email address
				</div>
				<div class="lower_part">
					<div class="sign_buttons">
						<div class="one_button" onclick=pop('pop2','left')>
							Login
						</div>
						<div class="one_button hover_button" onclick=pop('pop3','left')>
							Sign Up
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="pop2" class="pop_tab" style="display:none;">
				<div class="back_img" onclick=pop('pop1','right')>
					<img src="/img/back.png" height=100%/>
				</div>
				<div class="popup_headers">
					Login with Email
				</div>
				<form method="POST">
					<input id="signin_email" class="sign_email" type="email" placeholder="E-mail"/>
					<input id="signin_password" class="sign_password" type="password" placeholder="Password"/>
					<div>
					<input class="sign_remember" type="hidden" id="remember_me" checked=""/>
					</div>
					<input id="signin_submit" onclick="sendin();return false;" class="signin_submit" name="signin_submit" type="submit" value="Login"/>
					<div class="forgot_pass">
						<a onclick=pop('pop4','left') class="sign_forgot">forgot password?</a>
					</div>
				</form>
				<div style="color:ef534e;font-weight:200;" class="error_pop" id="sign_error"></div>
				<div class="pop_footer">
					<div class="foot_text">
						New to CropmyBill?
						<span class="clickable" onclick=pop('pop3','left')>Sign Up</span>
					</div>
				</div>
		</div>
		<div id="pop3" class="pop_tab" style="display:none;">
				<div class="back_img" onclick=pop('pop1','right')>
					<img src="/img/back.png" height=100%/>
				</div>
				<div class="popup_headers">
					Sign Up with E-mail
				</div>
				<form method="POST">
					<input id="signup_name" class="input_field" type="text" placeholder="Name"/>
					<input id="signup_phone" class="input_field" type="tel" placeholder="Phone"/>
					<input id="signup_email" class="input_field" type="email" placeholder="E-mail"/>
					<input id="signup_password" class="input_field" type="password" placeholder="Password"/>
					<input id="refer_code" type="hidden"/>
					<input onclick="sendup();" class="signup_submit" id="signup_submit" name="signup_submit" type="button" value="Create Account"/>
				</form>
				<div class="pop_tnc">
					By clicking Sign Up, you agree to CropmyBill's <a href="/terms-conditions">Terms of Use</a><!-- and <a href="#">Privacy Policy</a>-->.
				</div>
				<div style="color:ef534e;font-weight:200;" class="error_pop" id="signup_error"></div>
				<div class="pop_footer">
					<div class="foot_text">
						Already have a CropmyBill account? 
						<span class="clickable" onclick=pop('pop2','right')>Sign In</span>
					</div>
				</div>
		</div>
		<div id="pop4" class="pop_tab" style="display:none;">
				<div class="back_img" onclick=pop('pop2','right')>
					<img src="/img/back.png" height=100%/>
				</div>
				<div class="popup_headers">
					Reset Password
				</div>
				<div class="pop_text">
					Enter the email address associated with your account, and we'll email you a link to reset your password.
				</div>
				<form method="post">
					<input id="reset_email" class="input_field" type="email" placeholder="E-mail"/>
					<input onclick="sendforgot();" class="signup_submit" id="forgot_submit" name="forgot_submit" type="button" value="Reset Password"/>
				</form>
				<div class="back_to_login">
					<span onclick=pop('pop2','right')>&lt Back to Login</span>
				</div>
				<div style="color:ef534e;font-weight:200;" class="error_pop" id="forgot_error"></div>
		</div>
	</div>
</div>

<script>
document.onkeydown = function (evt) {
	evt = evt || window.event;
	if(evt.keyCode == 27)
	{
		hidepop();
	}
}
function showpop()
{
	document.getElementById('popup_body').style.display='block';
	document.getElementById('blanket').style.display='block';
}
function hidepop()
{
	document.getElementById('popup_body').style.display='none';
	document.getElementById('blanket').style.display='none';
	show_div.style.display='none';
	show_div=document.getElementById('pop1');
	show_div.style.display='block';
}
var show_div=document.getElementById('pop1');
function pop(part,dir)
{
	remove_div = show_div;
	show_div = document.getElementById(part);
	if(dir=='left')
		leftslide(remove_div,0,show_div);
	else
		rightslide(remove_div,0,show_div);
}
function leftslide(remove_div,right_remove,show_div) {
    remove_div.style.right = right_remove + 'px';
	right_remove = right_remove+10;
	if(right_remove<370)
		setTimeout(function(){leftslide(remove_div,right_remove,show_div);}, 1);
	else
	{
		remove_div.style.display='none';
		remove_div.style.right='0px';
		show_div.style.right='0px';
		show_div.style.display='block';
	}
}
function rightslide(remove_div,right_remove,show_div) {
    remove_div.style.right = right_remove + 'px';
	right_remove = right_remove-10;
	if(right_remove>-360)
		setTimeout(function(){rightslide(remove_div,right_remove,show_div);}, 1);
	else
	{
		remove_div.style.display='none';
		remove_div.style.right='0px';
		show_div.style.right='0px';
		show_div.style.display='block';
	}
}
//timeoutID = setTimeout('checkforupdate()', 5000);
</script>