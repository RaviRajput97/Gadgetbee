<?php 
include('admin_header.php'); 
include('left_aside.php');?>
<div class="main">

<div class="admin_main_1" style="margin-top:4%;">
	
	<div class="admin_main_2">
	
	<?php
	include("../config/config.php");
	?>

	
	<div style="width: 100%; height: 100%;">
	<div> 

		<span style="margin-left:10px; font-weight:bold; font-size:20px; color: #086A87; font-style: italic;">Update Feature Image</span>

		

	<hr>

	</div>

	</div>
<!-- header ends here -->
<!-- coding start here -->
<?php 
	$user_id = $_REQUEST["id"];
    $sel_user = mysql_query("SELECT img from main_post where id='".$user_id."'");
    $fu=mysql_fetch_array($sel_user);
	if(isset($_REQUEST["sub"]))
	{
		$pic = $_FILES['pic']['name'];
		$pic_size = $_FILES['pic']['size'];
		$tmp = $_FILES['pic']['tmp_name'];
		$typ = $_FILES['pic']['type'];

		$old_img = $_REQUEST['old_img'];

	
			if($typ=="image/x-icon" ||
			 $typ=="image/gif" || 
			 $typ=="image/jpeg" || 
			 $typ=="image/png" ||
			 $typ=="image/tif" && $siz<=20480000)
			{
				
				$update_q = mysql_query("UPDATE main_post set img='".$pic."' WHERE id='".$user_id."'");
			if($update_q== true)
			{
				if(file_exists("../images/all_post/".$old_img))
					{
					
						unlink("../images/all_post/".$old_img);
					}
					
		
		
					move_uploaded_file($tmp,"../images/all_post/".$pic);
					?>
					<script type="text/javascript">
					window.location.href = "post.php?msg=data updated !";

					</script>
					<?php
				}
				else
				{
					echo "else";
					?>
					<script type="text/javascript">
					 window.location.href = "post.php?msg=data Not updated !";
					</script>
					<?php
				}
	}
	else
	{
		//die(header("location:add_post.php?msg=Invalid file type or size!"));
				?>
				<script>
				
				window.location.href = "post.php?msg=data Not updated !";
				alert("Invalid file type or size!");
				</script>
				<?php
	}
}
?>
<!-- coding ends here -->
<!-- form start here -->
<form method="post" enctype="multipart/form-data" action="">
	<table border="1" style="width:50%;margin-left:30px;  height: 100%" >
		<tr>
			<td>Feature Image</td>
			<td><img src="../images/all_post/<?php echo $fu['img']?>" height="80px" />
				<input type="hidden" name="old_img" value="<?php  echo $fu['img']; ?>">				
			<br/></td>
		<tr>
			<td>img</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="sub" value="Update"></td>
		</tr>
	</table>
	</form>
<!-- form end here -->
	</div>
</div>
</div>
