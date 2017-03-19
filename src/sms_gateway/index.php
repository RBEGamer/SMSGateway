<?php
include('./db_conf.php');
$verbindung = mysql_connect ($db_host,
$db_username, $db_password)or die ("keine Verbindung möglich. Benutzername oder Passwort sind falsch");
mysql_select_db($db_name)or die ("Die Datenbank existiert nicht.");
?>


<!DOCTYPE html><html><head>
  <title>SMS Gateway | github.com/RBEGamer</title>
<meta http-equiv='content-type' content='text/html; charset=utf-8'>
<meta charset='utf-8'> 
  <link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css' rel=stylesheet />
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js'></script>
  <link rel="stylesheet" type="text/css" href="toggleswitch.css">
   
    
    <link rel="stylesheet" href="metro-bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.widget.min.js"></script>
        <script src="js/mmetro.min.js"></script>
        
<style> body {  } #red, #green, #blue { margin: 10px; } #red { background: #f00; } #green { background: #0f0; } #blue { background: #00f; } </style>
<style>
html, body {
	background: #F2F2F2;
	width: 100%;
	height: 100%;
	margin: 0px;
	padding: 0px;
	font-family: 'Verdana';
	font-size: 16px;
	color: #404040;
	}
img {
	border: 0px;
}
span.title {
	display: block;
	color: #000000;
	font-size: 30px;
}
span.subtitle {
	display: block;
	color: #000000;
	font-size: 20px;
}
.sidebar {
	background: #FFFFFF;
	width: 250px;
	min-height: 100%;
	height: 100%;
	height: auto;
	position: fixed;
	top: 0px;
	left: 0px;
	border-right: 1px solid #D8D8D8;
}
.logo {
	padding: 25px;
	text-align: center;
	border-bottom: 1px solid #D8D8D8;
}
.menu {
	padding: 25px 0px 25px 0px;
	border-bottom: 1px solid #D8D8D8;
}
.menu a {
	padding: 15px 25px 15px 25px;
	display: block;
	color: #000000;
	text-decoration: none;
	transition: all 0.25s;
}
.menu a:hover {
	background: #0088CC;
	color: #FFFFFF;
}
.right {
	margin-left: 250px;
	padding: 50px;
}
.content {
	background: #FFFFFF;
	padding: 25px;
	border-radius: 5px;
	border: 1px solid #D8D8D8;
}


</style>

</head>



<script type="text/javascript">
function load_all(){

//	setTimeout(load_devices, 200);
}

	


</script>
<body style='font-size:62.5%;' onload="load_all();">
<div class='sidebar'>
<div class='logo'>
<span class='title'>SMS Gateway</span>
<span class='subtitle'>Backend</span>
</div>
<div class='menu'>

<a href='./index.php'>Home</a>

</div>
</div>
<div class='right'>
<div class='content'>


<h3> - - SEND SMS - - </h3>
<br>
<script language="javascript" type="text/javascript">
function send_sms(){
alert("sms registered");
/*
TODO:
http request to add_message.php
*/
}
</script> 
<table>

<tr>
<td>FROM GATEWAY</td>
<td>
<select name='selected_gateway' id='selected_gateway'>
<?php
$fetchinfo_dev = mysql_query("SELECT * FROM `gsm_devices`;");
while($row_dev = mysql_fetch_array($fetchinfo_dev)) {
	echo "<option value='".$row_dev['id']."'>".$row_dev['outgoing_number']."</option>";	
}
?>
</select>
</td>
</tr>

<tr>
<td>TO</td>
<td>
<select name='selected_reciever_number' id='selected_reciever_number'>
<?php
$fetchinfo_dev = mysql_query("SELECT * FROM `recieve_numbers` WHERE `enable`='1';");
while($row_dev = mysql_fetch_array($fetchinfo_dev)) {
	echo "<option value='".$row_dev['id']."'>".$row_dev['phonenumber']."</option>";	
}
?>
</select>
</td>
</tr>

<tr>
<td>MESSAGE</td>
<td>
<input type='text' name='message' id='message' placeholder='Hello World!' value=''  />
</td>
</tr>

<tr>
<td>
<input type='button' onClick='send_sms();' value='SEND SMS' />
</td>

</tr>
</table>










</div>
</div>
</body>
</html>
