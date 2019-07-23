<div class="clearfix single_sidebar">
			<h2>Operating Systems</h2>

			<ul>
				<li>
					<?php 
					$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.os='android' order by mp.id desc ");
					$q1 = mysql_num_rows($sel_q);
					
					?>
					<a href="os_post.php?os=android">Android</a>(<?php echo $q1; ?>)
				</li>
				<li>
					<?php 
					$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.os='windows' order by mp.id desc ");
					$q1 = mysql_num_rows($sel_q);
					
					?>
					<a href="os_post.php?os=windows">Windows</a>(<?php echo $q1; ?>)
				</li>
				<li>
					<?php 
					$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.os='ubuntu' order by mp.id desc ");
					$q1 = mysql_num_rows($sel_q);
					
					?>
					<a href="os_post.php?os=ubuntu">Ubuntu</a>(<?php echo $q1; ?>)
				</li>
				<li>
					<?php 
					$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.os='ios' order by mp.id desc ");
					$q1 = mysql_num_rows($sel_q);
					
					?>
					<a href="os_post.php?os=ios">IOS</a>(<?php echo $q1; ?>)
				</li>
				
			</ul>
		</div>