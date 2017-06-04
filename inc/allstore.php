<style>
	#dealimgsorry {background:url("/img/store/sorry.jpg") 49% 100% no-repeat;background-size: 189px 114px;}
	#dealimg5 {
    background: url("../static/images/americanswan.png") 49% 100% no-repeat;
    background-size: 186px 104px;}
	
.allfont {
	text-decoration:none;
	font-family: Arial,Helvetica,sans-serif;
}
.clothing_wrap {
	width:232px;
	height:280px;
	float:left;
	margin-left:8px;
	margin-right:8px;
	margin-bottom:21px;
	border:1px solid #EAEAEA;
	background:#fff;
	//box-shadow: 0px 0px 6px -2px rgba(128,128,128,1);
}
.clothing_wrap:hover
{
	//border:1px solid rgba(239,83,78,0.3);
	box-shadow: 0px 0px 6px -2px rgba(128,128,128,1);
	//border:1px solid #ddd;
}
.clothing_image {
	height:100px;
	width:232px;
	border-bottom: 1px dashed #CECECE;
	position:relative;
}
.cname_text {
	height: 80px;
	margin: 5px;
	margin-left: 17px;
	margin-right: 17px;
	color: #4a4a4a;
	font-size: 17px;
	overflow: hidden;
	/* transform: scale(1,1.3); */
	margin-top: 55px;
}
.cname_head {
margin-right: 12px;
  /* text-decoration: underline; */
  border-bottom: 3px solid #cc5251;
  display: inline-block;
  line-height: 28px;
  font-weight: bold;
  /* left: 0; */
  float: right;
  color:#000;
}
</style>

<div id="table_container_na" style="min-width:1152px;height:auto;">
<div id="table_body">
<div style="background:white;min-height:1678px;margin-bottom:50px;">

	<div class="allstore_body allstore_body2">
		<div class="top_merchants">
			<div class="merchants_header" align="left">All Stores</div>
			<div class="merchants_500" align="left">Cashback for purchase from over 100 of the best online stores</div>
		</div>
		<div class="abcd_container">
			<a href="/allstore/A/" ><div class="abcd_ancar">A</div></a>
			<a href="/allstore/B/" ><div class="abcd_ancar">B</div></a>
			<a href="/allstore/C/" ><div class="abcd_ancar">C</div></a>
			<a href="/allstore/D/" ><div class="abcd_ancar">D</div></a>
			<a href="/allstore/E/" ><div class="abcd_ancar">E</div></a>
			<a href="/allstore/F/" ><div class="abcd_ancar">F</div></a>
			<a href="/allstore/G/" ><div class="abcd_ancar">G</div></a>
			<a href="/allstore/H/" ><div class="abcd_ancar">H</div></a>
			<a href="/allstore/I/" ><div class="abcd_ancar">I</div></a>
			<a href="/allstore/J/" ><div class="abcd_ancar">J</div></a>
			<a href="/allstore/K/" ><div class="abcd_ancar">K</div></a>
			<a href="/allstore/L/" ><div class="abcd_ancar">L</div></a>
			<a href="/allstore/M/" ><div class="abcd_ancar">M</div></a>
			<a href="/allstore/N/" ><div class="abcd_ancar">N</div></a>
			<a href="/allstore/O/" ><div class="abcd_ancar">O</div></a>
			<a href="/allstore/P/" ><div class="abcd_ancar">P</div></a>
			<a href="/allstore/Q/" ><div class="abcd_ancar">Q</div></a>
			<a href="/allstore/R/" ><div class="abcd_ancar">R</div></a>
			<a href="/allstore/S/" ><div class="abcd_ancar">S</div></a>
			<a href="/allstore/T/" ><div class="abcd_ancar">T</div></a>
			<a href="/allstore/U/" ><div class="abcd_ancar">U</div></a>
			<a href="/allstore/V/" ><div class="abcd_ancar">V</div></a>
			<a href="/allstore/W/" ><div class="abcd_ancar">W</div></a>
			<a href="/allstore/X/" ><div class="abcd_ancar">X</div></a>
			<a href="/allstore/Y/" ><div class="abcd_ancar">Y</div></a>
			<a href="/allstore/Z/" ><div class="abcd_ancar">Z</div></a>
		</div>
		<div style="display:table;">
		<?php
		
		if(true)
		{
			$t=30;
			WHILE($t)
			{
				$cname = 'AMERICAN SWAN';
				$id = '5';
				$url='www.abc.xyz';
				$description = 'Pick out from the best apparels, shoes and accessories...';
				$rate = "Upto 20%";
				echo '
					<a class="clothing_wrap" href="/stores/'.$cname.'" style="cursor:pointer;">
						<div class="clothing_image" id="dealimg'.$id.'">
							<div style="position:absolute;top:94px;left: 25px;"><img src="/img/scissor.png"></div>
						</div>
						<div class="cname_head allfont">'.$cname.'</div>
						<div class="cname_text allfont">'.$description.'</div>
						<div class="allfont" style="color:#1669b0;margin-left: 17px;margin-bottom: 28px;font-size: 15px;">+ Get '.$rate.' cashback</div>
					</a>
				';
				$t=$t-1;
			}
			
		}
		else
		{
			
			$q="SELECT * FROM allstore WHERE cname LIKE '".$alpha."%'  AND active='1' group by cname LIMIT 30";
			$result = mysql_query($q) or die("query");
			if(!$result || (mysql_numrows($result) < 1))
			{
				echo '
					<a href="#"><div style="margin-left:360px;" class="merchants_details_alls"><div id="dealimgsorry" style="height: 113px;width:191px;"></div><div class="m_desertion"></div><div class="merchants_text" style="color:red;">Sorry! We did not find anything</div></div></a>
				';
			}
			WHILE($rows = mysql_fetch_array($result))
			{
				$cname = $rows['cname'];
				$cname = strtolower($cname);
				$id = $rows['id'];
				$rate = $rows['rate'];
				$description = $rows['desc'];
				$url=$rows['url'];
				echo '
				<a href="/stores/'.$cname.'"><div class="merchants_details_alls"><div id="dealimg'.$id.'" style="height: 97px;width:191px;"></div><div class="m_desertion">'.$description.'</div><div class="merchants_text">'.$rate.'</div></div></a>
				';
			}
			/*
			if(($alpha == 'F') || ($alpha == 'f'))
			{
				echo '<a href="/stores/'.$cname.'"><div class="merchants_details_alls"><div id="dealimg'.$id.'" style="height: 97px;width:191px;"></div><div class="m_desertion">'.$description.'</div><div class="merchants_text">'.$rate.'</div></div></a>
				';
			}*/
			echo '
			<div style="float:left;">
			<hr style="margin-top:100px;">
				<div class="merchants_header" align="center" style="padding:20px 0 20px;">Our other stores</div>
			';	
				$q2="SELECT * FROM allstore WHERE active='1' order by rand() limit 10";
				$result2 = mysql_query($q2) or die("query");
				WHILE($rows2 = mysql_fetch_array($result2))
					{
						$cname2 = $rows2['cname'];
						$cname2 = strtolower($cname2);
						$id2 = $rows2['id'];
						$rate2 = $rows2['rate'];
						$description2 = $rows2['desc'];
						$url2=$rows2['url'];
						echo '
						<a href="/stores/'.$cname2.'"><div class="merchants_details_alls"><div id="dealimg'.$id2.'" style="height: 97px;width:191px;"></div><div class="m_desertion">'.$description2.'</div><div class="merchants_text">'.$rate2.'</div></div></a>				
						';
					}
		echo '
			</div>
			';
		}
		?>
		</div>
		</div>
	</div>
</div>
</div>