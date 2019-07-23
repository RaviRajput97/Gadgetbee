<?php 
include 'header.php';
?>


<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft" style="width:100%">
					<!--slider-->
					<!-- slider end-->
					<div class="clearfix content">
	
	
	
<!-- contact form start -->
<?php 
if(isset($_REQUEST["sub_con"]))
	{
	$to ="akhanda.handa@gmail.com";
	$con_name = $_REQUEST['con_name'];
	$con_email = $_REQUEST['con_email'];	
	$con_msg = $_REQUEST['con_msg'];
	$msg = "<div style='padding:20px'>From-".$con_email." <br/>Msg-".$con_msg."</div>";

	mail($to,"Gadget-Contact US-",$msg);

}	
 ?>

	
	<div class="admin_main_2">

	<div style="float:left;">
	
	<form method="post" action="">
	<table cellspacing="25">
	<tr>
	<td>Name<sup style="color:red;">*</sup></td>
	<td><input type = "text" name ="con_name" required /></td>
	</tr>
	<tr>
	<td>Email<sup style="color:red;">*</sup></td>
	<td><input type = "email" name ="con_email" required/></td>
	</tr>
	<tr>
	<td>Message<sup style="color:red;">*</sup></td>
	<td><textarea rows = "5" cols ="50" maxlength="60" style="resize:none;"  name ="con_msg" required></textarea></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input style="width:60%" type="submit" name="sub_con" value="submit"></td>							
	</tr>
	</table>				
	</form>
	</div>

<!-- contact form ends here -->


<div style="float:right">

	<img src="images/contactus.png">
</div>

</div>


</div></div>
</div></section>

<?php 
include 'footer.php';
?>


