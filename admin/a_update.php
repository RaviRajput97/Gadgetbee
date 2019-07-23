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

		<span style="margin-left:10px; font-weight:bold; font-size:20px; color: #086A87; font-style: italic;">Update Post</span>

		

	<hr>

	</div>

	</div>
	<?php 
	$user_id = $_REQUEST["uid"];
    $sel_user = mysql_query("SELECT * from main_post where id='".$user_id."'");
    $fu=mysql_fetch_array($sel_user);
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
			 $typ=="image/tif" && $siz<=2048000000000000000)
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
				alert("File Already Exist,choose anotherone!");
				</script>
				<?php
			
		}


		$update_q = mysql_query("UPDATE main_post set title='".$post_title."',brand='".$post_brand."',os='".$post_os."',discription='".$desc_post."',img='".$pic."' WHERE id='".$user_id."'");
	if($update_q== true)
	{
		?>
		<script type="text/javascript">
			window.location.href = "post.php?msg=data updated !";
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			window.location.href = "post.php?msg=data Not updated !";
		</script>
		<?php
	}
}
?>
	

	 
	<form method="post">
	<table border="1" style="width:50%;margin-left:30px;  height: 100%" >
		<tr>
			<td>Title</td>
			<td><input type="text" name ="post_title" class= "emp_inp" value="<?php echo $fu['title']; ?>"> </td>
		</tr>
		<tr>
			<td>Brand</td>
			<td><select name="post_brand" class="emp_inp">
				<option value="">select</option>
				<option value="samsung"<?php if($fu["brand"]=="samsung") echo "selected";?>>samsung</option>
				<option value="microsoft"<?php if($fu["brand"]=="microsft") echo "selected";?>>microsft</option>
				<option value="apple"<?php if($fu["brand"]=="apple") echo "selected";?>>apple</option>
				<option value="motorola"<?php if($fu["brand"]=="motorola") echo "selected";?>>motorola</option>
			</select></td>
		</tr>
		<tr>
			<td>OS</td>
			<td><select name="post_os" class="emp_inp" required>
				<option value="">Select</option>
				<option value="android" <?php if($fu["os"]=="android") echo "selected";?>>android</option>
				<option value="ios" <?php if($fu["os"]=="ios") echo "selected";?>>ios</option>
				<option value="windows" <?php if($fu["os"]=="windows") echo "selected";?>>windows</option>
				<option value="ubuntu" <?php if($fu["os"]=="ubuntu") echo "selected";?>>ubuntu</option>
			</select></td>
		</tr>
		<tr>
			<td>Discription</td>
			<td><textarea name="desc_post" rows="10" cols="70" style="resize:none" ><?php echo $fu['discription']; ?></textarea></td>
		</tr>
		<tr>
			<td>img</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Update"></td>
		</tr>
	</table>
	</form>
	<!-- ######################## -->
	<!-- ######################## -->
	<!-- ######################## -->
	
	</div>
</div>
</div>
