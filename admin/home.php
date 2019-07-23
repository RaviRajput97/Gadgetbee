<?php include('admin_header.php'); 
include('left_aside.php');?>
<div class="main">

<div class="admin_main_1" style="margin-top:4%;">
	
	<div class="admin_main_2">
	<?php
	include("../config/config.php");
	?>

	
	<div style="width: 100%; height: 100%;">
	<div> 
		<span style="margin-left:10px; font-weight:bold; font-size:20px; color: #086A87; font-style: italic;">Welcome</span>


	<hr>

	</div>

	</div>
			<!-- header end here -->
	 	
		<!-- page coding start here -->
		<div style="margin-left:30px; ">
		<marquee><h1 style='color:#FFFF00; margin:40px;'>Welcome to Gadget Bee</h1></marquee>
			<!--<p>
				test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test txest test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test
			</p>-->
		</div>
		<div>
		<center>
		<div style="height:200px; width:180px; background-color:#ccc;padding:20px; border:1px solid;"><img src="../images/work1.png" height="200px" width="180px" /></div></center>

		
			
		</div>
		

<!-- recent posts start -->


		<div class="table_div">
		<table align="center" style="width:100%;margin-top:30px;  height: 100%;">
			<thead>
			<tr>
			<th>Title</th>
			<th>Editor</th>
			</tr>
			</thead>
			<tbody>
			<?php 
		$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status!=2 order by mp.id desc limit 5");

		while($al = mysql_fetch_array($sel_q))
		{
			$id = $al['id'];
	 ?>
			<tr>
			<td><?php echo ucwords($al['title']); ?></td>
			<td><?php echo ucwords($al['a_name']); ?></td>
			</tr>
			<?
		}
			?>
			</tbody>
		</table>
		</div>

<!-- recent posts ends  -->

		<!-- page code ends here -->



		
	</div>
</div>
</div>
