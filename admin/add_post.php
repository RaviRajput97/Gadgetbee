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

		<span style="margin-left:10px; font-weight:bold; font-size:20px; color: #086A87; font-style: italic;">Add New Post</span>

		

	<hr>

	</div>

	</div>
	<?php 
	$adminid = $_SESSION['useradmin'];
	if(isset($_REQUEST["submit"]))
	{
		$post_title = $_REQUEST['post_title'];
		$post_brand = $_REQUEST['post_brand'];
		$post_os = $_REQUEST['post_os'];	
		$desc_post = $_REQUEST['desc_post'];

		$pic=$_FILES['pic']['name'];
		$tmp=$_FILES['pic']['tmp_name'];
		$siz=$_FILES['pic']['size'];
		$typ=$_FILES['pic']['type'];


		if(!file_exists("../images/all_post/".$pic))
		{
			if($typ=="image/x-icon" ||
			 $typ=="image/gif" || 
			 $typ=="image/jpeg" || 
			 $typ=="image/png" ||
			 $typ=="image/tif" && $siz<=204800000000000000000000000)
			{
				
				$ins_query = mysql_query("INSERT into main_post(title,add_by,brand,os,discription,img) values('".$post_title."','".$adminid."','".$post_brand."','".$post_os."','".$desc_post."','".$pic."')");
				
				if($ins_query==true)
				{
					move_uploaded_file($tmp,"../images/all_post/".$pic);
					//also can handle with directory function
					header("location:post.php?msg=Image stored");
					
				}
			}
			else
			{
				//die(header("location:add_post.php?msg=Invalid file type or size!"));
				?>
				<script>
				alert("Invalid file type or size!");
				</script>
				<?php
				
			}
		}
		else
		{
			//die(header("location:add_post.php?msg=File Allready Exist,choose anotherone!"));
			?>
				<script>
				alert("File Allready Exist,choose anotherone!");
				</script>
				<?php
			
		}


		

	}

	
	

	 ?>
	<form method="post" enctype="multipart/form-data" action="">
	<table  cellpadding="12px" style="width:50%;margin-left:30px;  height: 100%" >
		<tr>
			<td>Title</td>
			<td><input type="text" name ="post_title" class= "emp_inp"> </td>
		</tr>
		<tr>
			<td>Brandname</td>
			<td><select name="post_brand" class="emp_inp">
			    <option value="">select</option>
				<option value="samsung">Samsung</option>
				<option value="microsoft">Microsoft</option>
				<option>Apple</option>
				<option>OnePlus</option>
				<option>Google</option>
				<option>Lenovo</option>
				<option>Motorola</option>
			</select></td>
		</tr>
		<tr>
			<td>OS</td>
			<td><select name="post_os" class="emp_inp" required>
				<option value="">Select</option>
				<option value="android">android</option>
				<option>ios</option>
				<option>windows</option>
				<option>ubuntu</option>
			</select></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea name="desc_post" rows="10" cols="70" style="resize:none"></textarea></td>
		</tr>
		<tr>
			<td>img</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
	</form>
	<!-- ######################## -->
	<!-- ######################## -->
	<!-- ######################## -->
	
	</div>
</div>
</div>
