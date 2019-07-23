<?php 

$qry=mysql_query('SELECT COUNT(cmt.post_id),mp.* from comment cmt inner join main_post mp on cmt.post_id=mp.id where mp.status=1 and cmt.status=1 ');
	
	
 ?>
<div class="clearfix single_sidebar">
		<div class="popular_post">
			<div class="sidebar_title"><h2>Most Popular</h2></div>
			
			<?php
			while($arr = mysql_fetch_array($qry))
				{ 
			?>
			<ul>
			<li>
				<?php echo ucwords($arr['title']) ?>						
			</li>
			</ul>
			<?php
			}
		 	?>
			
		</div>
		
</div>