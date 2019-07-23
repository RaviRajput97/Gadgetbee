<div class="clearfix single_sidebar category_items">
			<h2>Categories / Brand</h2>

			<ul>
				<li class="cat-item">
					<?php 
					$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='samsung' order by mp.id desc ");
					$q1 = mysql_num_rows($sel_q);
					
					?>
					<a href="category_post.php?cat=samsung">Samsung</a>(<?php echo $q1; ?>)
				</li>
				<li class="cat-item">
				<?php 
					$sel_q2 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='microsoft' order by mp.id desc ");
					$q2 = mysql_num_rows($sel_q2);
					
					?>
					<a href="category_post.php?cat=microsoft">Microsft </a>(<?php echo $q2; ?>)
				</li>
				<li class="cat-item">
					<?php 
					$sel_q3 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='apple' order by mp.id desc ");
					$q3 = mysql_num_rows($sel_q3);
					
					?>
					<a href="category_post.php?cat=apple">Apple</a>(<?php echo $q3; ?>)
				</li>
				<li class="cat-item">
					<?php 
					$sel_q4 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='motorola' order by mp.id desc ");
					$q4 = mysql_num_rows($sel_q4);
					
					?>
					<a href="category_post.php?cat=motorola">Motorola</a>(<?php echo $q4; ?>)
				</li>
				
				<li class="cat-item">
					<?php 
					$sel_q5 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='OnePlus' order by mp.id desc ");
					$q5 = mysql_num_rows($sel_q5);
					
					?>
					<a href="category_post.php?cat=OnePlus">OnePlus</a>(<?php echo $q5; ?>)
				</li>
				<li class="cat-item">
					<?php 
					$sel_q6 = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.brand='Google' order by mp.id desc ");
					$q6 = mysql_num_rows($sel_q6);
					
					?>
					<a href="category_post.php?cat=Google">Google</a>(<?php echo $q6; ?>)
				</li>
				
			</ul>
		</div>