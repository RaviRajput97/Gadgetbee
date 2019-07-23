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
				<span style="margin-left:10px; font-weight:bold; font-size:20px; color: #086A87; font-style: italic;">Comments Details</span>

			<hr>

			</div>

			</div>
         

<!-- header ends here -->

<!-- functionality start here -->

<!-- fuctionality ends here -->

<!-- post detail start -->
	

	<center><h2>Post Details</h2></center>
<div class="table_div">
	
	<table cellpadding="8px" align="center" style="width:70%;margin-top:3px;  height: 100%; ">
	<thead>
			<th>Post</th>
			<th>Post Title</th>
	</thead>
	<?php 
	$cuser_id = $_REQUEST["post_id"];
    //$sel_q = mysql_query("SELECT cmt.post_id,mp.*,cmt.comment_name,cmt.comment_email,cmt.comments,cmt.cmt_time,cmt.c_id  FROM  comment cmt inner join main_post mp on cmt.post_id=mp.id  where post_id='".$cuser_id."'");
    $sel_q = mysql_query("SELECT * from main_post where id='".$cuser_id."'");
    $fu1=mysql_fetch_array($sel_q);
   
    $sn=1;
    ?>
	<tbody>
		<tr>
			<td>
				<img src="../images/all_post/<?php echo $fu1['img']?>" height="90">
			</td>
			<td>
				<?php echo$fu1['title'] ?>
			</td>
		</tr>
	</tbody>
	</table>
	</div>

	<!-- post detail ends here -->
<hr/><hr/>
	
<!-- comment details start here -->
<center><h2>Comments</h2></center>
	<form>
	<div class="table_div">
		<table cellpadding="8px" align="center" style="width:100%;margin-top:3px;  height: 100%; ">
			<thead>
			<th>Sr.No.</th>
			<th>User Name</th>
			<th>User Email</th>
			<th>Comment</th>
			<th>Time</th>
			<th>Edit</th>
			<th>Visibility</th>
			</thead>
			<tbody>
			<?php 
	$sel_q = mysql_query("SELECT * from comment where post_id='".$cuser_id."' order by c_id desc");
    while ($fu=mysql_fetch_array($sel_q))
    {
    	 $timestamp = strtotime($fu['cmt_time']);
    
			 ?>
				<tr>
					<td>
						<?php echo $sn;$sn++ ?>
					</td>
					<td>
						<?php echo $fu['comment_name']; ?>
					</td>
					<td>
						<?php echo $fu['comment_email']; ?>
					</td>
					<td>
						<?php echo $fu['comments']; ?>
					</td>
					<td>
						<?php echo date('d M Y',$timestamp); ?>
					</td>
					<td>
				<a href="cmt_del.php?c_id=<?php echo $fu['c_id']; ?>" onclick="return confirm('Are You Sure want to delete ?'); " ><img src="../images/del.png" width="20"></a>
					</td>
					<td>
				<?php if($fu['status']==1)
				{ ?>
					<a style="text-decoration:none" href="cmt_status.php?c_id=<?php echo $fu['c_id']; ?>"><img src="../images/active.png" width="20"> Show</a>
				<?php
				} elseif($fu['status']==0){
				?>
				<a style="text-decoration:none" href="cmt_status.php?c_id=<?php echo $fu['c_id']; ?>"><img src="../images/deactive.png" width="20"> Hide</a>
				<?php } ?>		
					</td>
				</tr>
			<?php
			}
			?>
			</tbody>
		</table>
		</div>
	</form>

<!-- comment details ends here -->
  </div>
    </div>
    </div> 