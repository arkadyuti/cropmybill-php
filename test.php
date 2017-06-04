<html>
<head>
</head>
 
<body>
 
<form method="get" action="">
	<input type="text" name="search" id="search" value="" />
	<input type="submit" name="submit" value="Search" />
</form>
 
<script type="text/javascript">
<!--
	var defaultText = "Search...";
	var searchBox = document.getElementById("search");
 
	//default text after load
	searchBox.value = defaultText;
 
	//on focus behaviour
	searchBox.onfocus = function() {
		if (this.value == defaultText) {//clear text field
			this.value = '';
		}
	}
 
	//on blur behaviour
	searchBox.onblur = function() {
		if (this.value == "") {//restore default text
			this.value = defaultText;
		}
	}
 
//-->
</script>
 
</body>
</html>