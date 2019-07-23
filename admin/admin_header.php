<?php
session_start();
if(!isset($_SESSION['useradmin']))
{
	?>
	<script type="text/javascript">

window.location="index.php"

</script>

<?php
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Gadget Bee</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" rel="stylesheet" type="text/css">

	</head>
<body>
<div class="row_bckgrnd_admin" />
<span style="float:left; margin-left:20px;width:50px;"><a href="../admin/"><img src="../images/work1.png" width="100%"></a></span>
	<span style="margin: auto;"> Admin Dashboard</span>


	<span style="float:right; margin-right:20px; font-size:16px; ">

		 <?php echo $_SESSION['admin_username'];  ?> || <a style="text-decoration:none; color: #ffffff;" href="../admin/">Home </a> || 

<a class="confirm_password_btn" >Change Password</a> || <a style="text-decoration:none; color: #ffffff;" href="logout.php">Logout</a>
		
	</span>	
</div>
<?php
	include("../config/config.php");
	?>

<script src="../js/jquery.js">
</script>

<script>
	

$(document).ready(function(){

	$(".confirm_password_btn").click(function(){
	//alert("0");
		$(".confirm_password").show();
		$(".overlay").show();
	})
});



$(document).ready(function(){

	$(".cancel").click(function(){
	//alert("0");
		
		$(".confirm_password").hide();
		
		$(".overlay").hide();
	})
});



// side menu hide show 
$(document).ready(function(){
	$(".main_menu").children('li').on('click', function() {
    $(this).children('ul').slideToggle('slow'); 
	});
});

// end side menu hide show 

</script>


  <!--POPUP FOR Add new meal-->

   <div class="overlay"></div>



		 <div class="confirm_password" style=" width:400px; height:230px; display:none; position:fixed; top:20%;">
		 
			 <?php
			 include("../config/config.php");
			 $uid_s = $_SESSION['useradmin'];
			 if(isset($_REQUEST['submit_cnfm_pass']))
			 {
				 $cnfm_pass = $_REQUEST['cnfm_pass'];
				 
				 $pass_query = mysql_query("SELECT * from admin where id='".$uid_s."' and BINARY a_password='".$cnfm_pass."' and status=1");
				
				 $rows_pass_conf  = mysql_num_rows($pass_query);
				 if($rows_pass_conf==TRUE)
				 {
				 ?>
				 <script>
					window.location = "admin_profile.php";
				 </script>
				 <?php
				  
				 }
				 else
				 {
				 ?>
				 <script>
				 alert('The password you have entered is invalid');
				 </script>
				 <?php
				 }

			 
			 }
			 ?>
			 
			
			 <form action="" method="post" >
			 <div>
			 <ul style="list-style-type:none; line-hight:18px; ">
			 <li>
			 <h3 style="margin:0px;"><img src="../images/lock.png" width="20px;">&nbsp;&nbsp;Please Confirm Password</h3>
			 <hr/>
			 </li>
			 <li style="width:100%;"><br/><input type="password" placeholder="Type Current Password" name="cnfm_pass" required class="emp_inp" style="border:groove;" ></li><br/>
			 	
			 <li>
			 <input type="submit" name="submit_cnfm_pass" value="Submit" class="click_01" >&nbsp;&nbsp;
			 <input class="click_01 cancel" type="button" value="Cancel"/>
			 </div></li>
			 </ul>
			 </form>
		 </div>
		 
		 <!--END OF ADDING NEW MEAL-->