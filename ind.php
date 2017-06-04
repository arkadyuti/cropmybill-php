
<html>
<body>
<head>

<script src="./js.js"></script>
<script>
function sendd(){
var g="First="+document.getElementById("First").value;
var p="Last="+document.getElementById("Last").value;
var Li="./S.php";
var el="disp";
lod(g,p,Li,el);
//alert(g);
}
</script>
<p id="disp">D:\htdocs\000- Location:</p>

<form method="post">
  First name: <input type="text" id="First"><br>
  Last name: <input type="text" id="Last"><br>
  <input type="button" onclick="sendd();" value="Submit">
</form>

</head>
 

 

</body>
</html>