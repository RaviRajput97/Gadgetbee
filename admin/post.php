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

		<span style="margin-left:10px; font-weight:bold; font-size:20px; color: #086A87; font-style: italic;">Post List</span>

		<span style="margin-right:10px; float: right;  font-size:20px; color: #086A87; font-style: italic;"><a href="add_post.php">Add New</a></span>
		

	<hr>

	</div>

	</div>
<style type="text/css">

</style>
<div class="table_div">
	<table   align="center" style="width:100%;margin-top:30px;  height: 100%; ">
	<thead>
		<tr>
			<th>Id</th>
			<th>Post Image</th>
			<th>Post Title</th>
			<th>Author</th>
			<th>Brand</th>
			<th>Img</th>
			<th>Action</th>
			<th>Staus</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status!=2 order by mp.id desc");
		$sn=1;

		while($arr = mysql_fetch_array($sel_q))
		{
			$id = $arr['id'];
	 ?>
		<tr>
			<td><?php echo $sn; ?></td>
			<td>
				<img src="../images/all_post/<? echo $arr['img']?>" height="80px" /><br/>
				<a href="img_update.php?id=<? echo $id; ?>" style="text-decoration:none;">Featured Image</a>

			</td>
			<td><?php echo ucwords($arr['title']); ?></td>
			<td><?php echo ucwords($arr['a_name']); ?></td>
			<td><?php echo ucwords($arr['brand']); ?></td>
			<td><a href="portfolio.php?id=<?php echo $id;?>"><img src="../images/pf.png" height="30px" /></a></td>
			<td><a href="a_del.php?uid=<?php echo $id; ?>" onclick="return confirm('Are You Sure want to delete ?'); " ><img src="../images/del.png" width="20"></a>
			</td>
			<td>
				<?php if($arr['status']==1)
				{ ?>
					<a style="text-decoration:none" href="user_status.php?user_id=<?php echo $id;?>"><img src="../images/active.png" width="20"> Show</a>
				<?php
				} elseif($arr['status']==0){
				?>
				<a style="text-decoration:none" href="user_status.php?user_id=<?php echo $id;?>"><img src="../images/deactive.png" width="20"> Hide</a>
				<?php } ?>
			</td>
		</tr>
		<?php 
		$sn++;
		}
		 ?>
	</tbody>
</table>
</div>	
	</div>
</div>
</div>
