<?php 
session_start(); 
ob_start();

$auth_user="special"; 
$auth_pwd="access";

function authenticate() 
{
    list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));
    header('WWW-Authenticate: Basic realm="Enter the Login Provided by Museum"');
    header('HTTP/1.0 401 Unauthorized');
    $_SESSION['auth'] = true;
    echo "You must enter a valid login ID and password to access this resource\n";
    exit;
}

if (($_SERVER['PHP_AUTH_USER'] == $auth_user)  && ($_SERVER['PHP_AUTH_PW']== $auth_pwd) && $_SESSION['auth'] == true)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>events</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_jumpMenuGo(selName,targ,restore){ //v3.0
  var selObj = MM_findObj(selName); if (selObj) MM_jumpMenu(targ,selObj,restore);
}
//-->
		</script>
	</head>
<body bgcolor="#000000" text="#FFFFFF" link="#FF0000" leftmargin="0" topmargin="0" marginwidth="0"
		marginheight="0">
		<table width="400" border="0" align="center" cellpadding="2" ID="Table1">
			<tr>
				<td height="100%"><div align="center"><img src="../images/members_title.gif" width="200" height="35"></div>
				</td>
			</tr>
			<tr>
				<td height="100%">
					<blockquote>
						<div align="left">
							<p>Welcome to <em>Eavers Classic Cars and Collectibles Museum</em> Members Page 
								here you will find pictures of the entire collection along with some brief 
								information about the car!</p>
							<form action="" method="post" name="form1" target="_blank" ID="Form1">
								<select name="Car Menu" onChange="MM_jumpMenu('parent',this,0)" ID="Select1">
									<option selected>--choose a car--</option>
									<option value="48_anglia.html">1948 Anglia Street Rod</option>
									<option value="50_deluxe.html">1950 Chevy Deluxe Fleetline</option>
									<option value="51_crestliner.html">1951 Ford Crestliner</option>
									<option value="54_corvette.html">1954 Corvette</option>
									<option value="55_belair.html">1955 Chevy Bel Air</option>
									<option value="56_corvette.html">1956 Corvette</option>
									<option value="57_corvette.html">1957 Corvette</option>
									<option value="57_nomad.html">1957 Chevy Nomad Wagon</option>
									<option value="57_thunderbird.html">1957 Ford Thunderbird</option>
									<option value="57_twister.html">1957 Chevy Twister</option>
									<option value="59_corvette.html">1959 Corvette</option>
									<option value="59_devin.html">1959 Devin</option>
									<option value="61_impala.html">1961 Chevy Impala</option>
									<option value="62_belair.html">1962 Chevy Bel Air</option>
									<option value="63_corvette.html">1963 Corvette</option>
									<option value="63_corvette_2.html">1963 Corvette black</option>
									<option value="65_cobra.html">1965 AC Cobra Roadster</option>
									<option value="67_cobra.html">1967 Cobra Kit Car</option>
									<option value="69_amx.html">1969 AMX</option>
									<option value="69_camaro.html">1969 Camaro</option>
									<option value="78_corvette.html">1978 Corvette</option>
									<option value="soxandmartin.html">Sox & Martin Drag Car</option>
								</select>
								<input type="button" name="Button1" value="Go" onClick="MM_jumpMenuGo('Car Menu','parent',0)"
									ID="Button1">
							</form>
						</div>
					</blockquote>
				</td>
			</tr>
		</table>
	</body>
</html>

<?php
} 
else 
{
  authenticate();		
}
?>



