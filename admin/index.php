<?php
session_start();
if(isset($_SESSION['useradmin']))
{
	?>
	<script type="text/javascript">

window.location="home.php"

</script>

<?php
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gadget</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" rel="stylesheet" type="text/css">



		<style type="text/css" media="screen">
		/*html, body { 
			height:100%; background-color: #999999;}*/
		body { margin:0; padding:0; background-color: #999999;}
		#flashContent { width:100%; height:90%; }
		.row_bckgrnd { background-color:#086A87; text-align: center; font-size: 21px; padding: 7px; color: #fff; position: fixed;
    width: 100%;
    height: 12px;
    top: 0px;
	 }
	 .main_1
	 {
	 	width: 834px;
    margin: 0 auto;
    text-align: center;

	 }
	 .main_02
	 {
	 	    background-color: cadetblue;
    margin: 0 auto;
    width: 61%;
    box-shadow: 0px 18px 100px 18px #303030;
    

	 }
	 .login_name
	 {
	 	background-color: #B35555;
	 	font-size: 22px;
	 	 font-weight: bold;

	 }
	.main
	{
		   margin-top :200px;
	}
	 .form_input
	 {
	 	margin-left: 20%;
	 	font-size: 18px;
	 }
	 .form_input .sub_btn
	 {
	 	height: 30px;
	 	width: 120px;
	 }
	 .login_check_msg
	 {
	 	min-height: 30px;
	 }
	 .log_input
	 {
	 	height: 24px;
	 	border-radius: 7px;
	 	width: 220px;
	 	padding: 4px;
	 	font-size: 18px;

	 }

	 </style>



	</head>
<body>

<div class="row_bckgrnd"><span> Admin Panel</span>	</div>
<div class="main">

<div class="main_1" style="margin-top:4%;">
	
	<div class="main_02">
	<div class="login_name">Login</div>
	<script type="text/javascript">

	</script>

	<div class="login_check_msg"> 

					<?php


					include("../config/config.php");
					
					if(isset($_REQUEST['chck_admin']))
					{
				 
				$userid = mysql_real_escape_string(stripslashes($_REQUEST['userid']));
				$password = mysql_real_escape_string(stripslashes($_REQUEST['password']));

				 
				$sql = mysql_query("select * from admin where a_username='".$userid."' and 	a_password='".$password."'");		
				$numr = mysql_num_rows($sql);
				if($numr>=1)
				{
					
				$sqlarry = mysql_fetch_array($sql);

				$_SESSION['useradmin'] = $sqlarry['id'];
				$_SESSION['admin_username']  = $sqlarry['a_name'];
				$_SESSION['useradmin_check'] = $sqlarry['a_username'].time();



				?>

				<script type="text/javascript">

				window.location="home.php"

				</script>

				<?php	
					
				}	


				else {
					
					 echo  "<span>Username or Password invalid.</span>";
					  }
					}

					?>
	</div>

				<div class="form_input">

					<form method="post">
						<table cellpadding="16px">
							<tr>
								<td align="left">User Name</td>
								<td>: <input type="text" name="userid" class="log_input"></td>
							</tr>
							
							<tr>
								<td align="left">Password </td>
								<td>: <input type="password" name="password" class="log_input"></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" class="sub_btn" name="chck_admin" value="Login">	</td>
							</tr>

						</table>
						
					</form>



				</div>

					
	
	
</div>
</div>
</div>

</body>
</html>