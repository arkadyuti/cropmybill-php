<?php
session_start();
if(isset($_COOKIE['SD']) && isset($_SESSION['signin_email']))
{
	if(($_COOKIE['SD']) == $_SESSION['signin_email'])
	{
		$session = $_SESSION['signin_email'];
	}else
	{
		if (isset($_SERVER['HTTP_COOKIE'])) 
		{
			$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
			foreach($cookies as $cookie) 
			{
				$parts = explode('=', $cookie);
				$name = trim($parts[0]);
				setcookie($name, '', time()-1000);
				setcookie($name, '', time()-1000, '/');
				header("Location: /");
			}
		}
		$session = null;
	}
}else
{
	if (isset($_SERVER['HTTP_COOKIE'])) 
	{
		$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
		foreach($cookies as $cookie) 
		{
			$parts = explode('=', $cookie);
			$name = trim($parts[0]);
			setcookie($name, '', time()-1000);
			setcookie($name, '', time()-1000, '/');
			//header("Location: /");
		}
	}
	$session = null;
}
//echo 'session='.($_SESSION['signin_email']).'<br>';
//echo 'cookie='.($_COOKIE['SD']).'<br>';
date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$aff_date = date("YmdHis");
$conn= mysql_connect("localhost","arka_cropmybill","9735525775") or die ("connection error");
mysql_select_db("arka_cropmybill", $conn) or die ("database not selected");
$throw='';
$requri = getenv ("REQUEST_URI");
$url = explode('/', $requri);
if(isset($url[1]))
{
	if($url[1]=='')
	{
		if(!isset($url[2]) || $url[2]=='')
			$throw='home';
	}
	elseif($url[1]=='coupons')
	{
		if(!isset($url[2]) || $url[2]=='')
		{
			$throw='coupons';
		}
		elseif(isset($url[2]) && $url[2]!='')
		{
			$q="SELECT OfferName FROM table11 WHERE ExpDate >= '$today' AND OfferName LIKE '".$url[2]."%' AND Type='Coupon'";
			$result = mysql_query($q) or die("query");
			if(!$result || (mysql_numrows($result) < 1))
			{
				echo 'no coupons name';
			}
			elseif(!isset($url[3]) || $url[3]=='')
			{
				$throw='coupons';
				$brand=$url[2];
			}
			else
				echo 'wrong offer name';
		}
		else 
			echo 'coupons error';	
	}
	elseif($url[1]=='deals')
	{
		if(!isset($url[2]) || $url[2]=='')
		{
			$throw='deals';
		}
		elseif(isset($url[2]) && $url[2]!='')
		{
			$q="SELECT OfferName FROM table11 WHERE ExpDate >= '$today' AND OfferName LIKE '".$url[2]."%' AND Type='Promotion'";
			$result = mysql_query($q) or die("query");
			if(!$result || (mysql_numrows($result) < 1))
			{
				echo 'no deals name';
			}
			elseif(!isset($url[3]) || $url[3]=='')
			{
				$throw='deals';
				$brand=$url[2];
			}
			else
				echo 'wrong offer name';
		}
		else 
			echo 'deals error';	
	}
	elseif($url[1]=='usearch')
	{
		if(isset($url[2]))
		{
			$usearch = $url[2];
			$throw='usearch';
			if(isset($url[3]) && $url[2]=='')
			echo 'search error';
		}
		else 
			echo 'usearch error';	
	}
	elseif($url[1]=='about')
	{
		if(!isset($url[2]) || $url[2]=='')
			$throw='about';
		else 
			echo 'about error';	
	}
	elseif($url[1]=='faqs')
	{
		if(!isset($url[2]) || $url[2]=='')
			$throw='faqs';
		else 
			echo 'faqs error';	
	}
	elseif($url[1]=='allstore')
	{
		if(isset($url[2]))
		{
			$alpha = $url[2];
			$throw='allstore';
			if(isset($url[3]) && $url[2]=='')
			echo 'allstore error';
		}
		else 
			echo 'usearch error';	
	}
	elseif($url[1]=='earning')
	{
		if(!isset($url[2]) || $url[2]=='')
		{
			if($session!=null)
			{
				$throw='earning';
			}
			else
			{
				if (isset($_SERVER['HTTP_COOKIE'])) 
				{
					$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
					foreach($cookies as $cookie) 
					{
						$parts = explode('=', $cookie);
						$name = trim($parts[0]);
						setcookie($name, '', time()-1000);
						setcookie($name, '', time()-1000, '/');
						header("Location: /");
					}
				}
				$session = null;
				
			}
		}
		else 
			echo 'about earning';	
	}
	elseif($url[1]=='account')
	{
		if(!isset($url[2]) || $url[2]=='')
		{
			if($session!=null)
			{
				$throw='account';
			}
			else
			{
				if (isset($_SERVER['HTTP_COOKIE'])) 
				{
					$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
					foreach($cookies as $cookie) 
					{
						$parts = explode('=', $cookie);
						$name = trim($parts[0]);
						setcookie($name, '', time()-1000);
						setcookie($name, '', time()-1000, '/');
						header("Location: /");
					}
				}
				$session = null;
				
			}
		}
		else 
			echo 'about account';	
	}
	elseif($url[1]=='redeem')
	{
		if(!isset($url[2]) || $url[2]=='')
		{
			if($session!=null)
			{
				$throw='redeem';
			}
			else
			{
				if (isset($_SERVER['HTTP_COOKIE'])) 
				{
					$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
					foreach($cookies as $cookie) 
					{
						$parts = explode('=', $cookie);
						$name = trim($parts[0]);
						setcookie($name, '', time()-1000);
						setcookie($name, '', time()-1000, '/');
						header("Location: /");
					}
				}
				$session = null;
				
			}
		}
		else 
			echo 'about redeem';	
	}
	
	
}
?>
<html>
<head>
<link rel="shortcut icon" href="/img/crop.ico">
<link rel="stylesheet" href="/styles.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Best CashBack and Best Deals/Coupons at CropmyBill</title>
<meta name="Description" content="best cashback, latest deals & coupons on India's Best Online Shopping sites like Flipkart, Amazon, Myntra, Jabong, Snapdeal & more. Join us for free"/>
<meta name="keywords" content=" cropmybill.com, cropmybill,http://cropmybill.com, cashback, vouchers, coupons, discounts, offers, deals, promo codes, Best cashback site, flipkart deals, flipkart coupons, flipkart discounts"/>
<meta name="robots" CONTENT="INDEX, FOLLOW" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title"  content ="Best CashBack and Best Deals/Coupons at CropmyBill"/>
<meta property="og:url" content="http://cropmybill.com/"/>
<meta property='og:image' content='http://cropmybil.com/img/logoBlue.png'/>
<meta property="og:site_name" content="cropmybil.com"/>
<meta property="og:description" content="best cashback, latest deals & coupons to on India's Best Online Shopping sites like Flipkart, Amazon, Myntra, Jabong, Snapdeal & more. Join us for free" />
<meta itemprop="name" content="Best CashBack and Best Deals/Coupons at CropmyBill">
<meta itemprop="description" content=" cropmybill.com, cropmybill,http://cropmybill.com, cashback, vouchers, coupons, discounts, offers, deals, promo codes">
<meta itemprop="image" content="http://cropmybil.com/img/logoBlue.png">
</head>
<title>
</title>
<body style="margin:0px;background-color: #f6f6f6;">
<script src="/jquery-1.11.0.min.js"></script>
<script>
	var x = navigator.cookieEnabled;
	if(x==false) {
		alert('Please enable Cookie to use our site');
	}
</script>
	<?php 
		include('/home/arka/public_html/inc/h.php'); 
		include('/inc/m.php'); 
	?>
	<table id="table_body">
		<tr>
			<td> 
				<?php include('/inc/infodiv.php');  ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php 
				if($throw=='home')
					include('/inc/topmerchants.php');
				elseif($throw=='about')
					include('/inc/about.php');
				elseif($throw=='faqs')
					include('/inc/faqs.php');
				elseif($throw=='deals')
					include('/inc/deal.php');
				elseif($throw=='coupons')
					include('/inc/coupons.php');
				elseif($throw=='usearch')
					include('/inc/usearch.php');
				elseif($throw=='allstore')
					include('/inc/allstore.php');
				elseif($throw=='earning')
					include('/inc/earning.php');
				elseif($throw=='account')
					include('/inc/account.php');
				elseif($throw=='redeem')
					include('/inc/redeem.php');
				else
					include('/inc/error.php');
				
				
				?>
			</td>
		</tr>
	</table>
	<?php include('/inc/footer.php') ?>
<?php
mysql_close($conn);
?>
</body>
</html>