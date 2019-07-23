<?php 
include('admin_header.php'); 
include('left_aside.php');?>
<div class="main">

<div class="admin_main_1" style="margin-top:4%;">
	
	<div class="admin_main_2">
	
	

	
	<div style="width: 100%; height: 100%;">
	<div> 
		<center><span style="margin-left:10px; font-weight:bold; font-size:20px; color: #086A87; font-style: italic;">Portfolio</span></center>

	<hr>

	</div>

	</div>
	<!-- header end here -->

	<!-- page function start -->
	<?php 
	$post_id = $_REQUEST["id"];
	if(isset($_REQUEST["subggg"]))
	{

		$pic=$_FILES['pic']['name'];
		$tmp=$_FILES['pic']['tmp_name'];
		$typ=$_FILES['pic']['type'];
		$siz =$_FILES['pic']['size'];


		if(!file_exists("../images/portfolio/".$pic))
		{
			if($typ=="image/x-icon" ||
			 $typ=="image/gif" || 
			 $typ=="image/jpeg" || 
			 $typ=="image/png" ||
			 $typ=="image/tif" && $siz<=2048000)
			{
				
				$ins_query = mysql_query("INSERT into portfolio(post_id,pf_name) values('".$post_id."','".$pic."')");
				
				if($ins_query==true)
				{
					move_uploaded_file($tmp,"../images/portfolio/".$pic);

					//also can handle with directory function
					//header("location:post.php?msg=Image stored");
					
				}
				else
				{
					echo "jjj";

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


	<!-- page function ends -->

	<!-- form start here -->
	<h3>Add New-</h3>
	<div style="margin-left:30px">
	
	<form method="post" enctype="multipart/form-data" action="">
	<table border="1" 	  style="" >	
		<tr>
			<td>Img</td>
			<td align="right"><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="subggg" value="Add New"></td>
		</tr>
	</table>
	</form>
	</div>
	<hr><hr>
	<h4>Added Images-</h4>
	<!-- form end here -->

	<!-- list start here -->

	<!-- <table  border="1" align="center" style="width: 100%; margin-top:30px;">
	<thead>
		<tr>
			<th>Sr.no.</th>
			<th>Name</th>
			<th>Img</th>
			<th>Edit</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody align="center"> -->
<?php

if(isset($_REQUEST['del_id']))
{
	include("../config/config.php");

	$post_id = $_REQUEST['id'];
	
	$id = $_REQUEST['del_id'];
	$pf_name = $_REQUEST['pf_name'];
	$del_q =mysql_query("DELETE from portfolio  WHERE pf_id='".$id."'");


	if($del_q==true)
	{
		unlink("../images/portfolio/".$pf_name);
		?>
		<script type="text/javascript">
			window.location.href = "portfolio.php?id=<?php echo $post_id; ?>"
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			window.location.href = "portfolio.php?id=<?php echo $post_id; ?>"
		</script>
		<?php
	}
}
?>
	<?php 
		$sel_q = mysql_query("SELECT * FROM  portfolio pf inner join main_post mp on pf.post_id=mp.id  where pf.status!=2 and pf.post_id='".$post_id."' order by pf.pf_id desc");
		$rows= mysql_num_rows($sel_q);

if($rows>0)
{
		while($arr = mysql_fetch_array($sel_q))
		{
			$pfid=$arr['pf_id'];
			$pf_name = $arr['pf_name'];
	 ?>
		

		<div style="height:200px; width:180px; background-color:#ccc;padding:20px; border:1px solid; float:left; margin:20px;">
		<img src="../images/portfolio/<? echo $arr['pf_name']?>" height="200px" width="180px" /><br/>
		<span style="text-align:center; width:100%"><a style="text-decoration:none" href="?del_id=<?php echo $pfid; ?>&&id=<?php echo $post_id; ?>&&pf_name=<?php echo $pf_name; ?>" onclick="return confirm('Are You Sure want to delete ?'); " >Delete</a></span>

		</div>
		<?php
		//$sn++;
		}
}
else
{

	echo "<tr><td colspan='5' align='center'>No record in database !</td></tr>";
}
		 ?>
	</tbody>
</table>
	</div>
</div>
</div>

<!-- list end here -->