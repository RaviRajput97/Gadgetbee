<?php 
include('admin_header.php'); 
include('left_aside.php');?>
<div class="main">

<div class="admin_main_1" style="margin-top:4%;">
	
	<div class="admin_main_2">
	
	<div style="width: 100%; height: 100%;">
	<div> 
		<span align-center; style="margin-left:10px; font-weight:bold; font-size:20px; color: #086A87; font-style: italic;">Comments List</span>

	<hr>

	</div>

	</div>
<!-- header ends here -->


<!-- table start here -->
	<style type="text/css">
	table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
table tbody tr td
	{
		text-align: center;
		vertical-align: top;
		padding-top: 12px;
	}
</style>
<div class="table_div">
	<table cellpadding="8px" align="center" style="width:100%;margin-top:3px;  height: 100%; ">
	<thead>
		<tr>
			<th>Id</th>
			<th>Post</th>			
			<th>Comment</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		$sel_q = mysql_query("SELECT DISTINCT cmt.post_id,mp.*  FROM  comment cmt inner join main_post mp on cmt.post_id=mp.id order by cmt.c_id desc");
		$sn=1;
		while($arr = mysql_fetch_array($sel_q))
		{
			$num_cmt = mysql_query("SELECT * from comment where post_id='".$arr['post_id']."'");
			$tot_cmt =mysql_num_rows($num_cmt);
	 	?>
		<tr>
			<td><?php echo $sn; $sn++; ?> </td>
			<td align="center"><img src="../images/all_post/<?php echo $arr['img']; ?>"  height="80"> </td>
			
			<td><?php echo $tot_cmt; ?></td>
			<td><a href="cmt_detail.php?post_id=<? echo $arr['post_id'];?>" style="text-decoration:none;">More...</a></td>
			
			
		</tr>
		<?php 
		
		}

		 ?>
	</tbody>
</table>
</div>
<!-- table ends here -->	
	</div>
</div>
</div>
