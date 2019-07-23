<?php 
include 'header.php';
include("config/config.php");
?>
	
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
					
					<!--slider-->
					<?include 'topslides.php';?>
					<!-- slider end-->
					
					<div class="clearfix content">
						<div class="content_title"><h2>Latest Blog Post</h2></div>

						
					<!--loop start here-->

						<?php 
						$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 order by mp.id desc");

						while($arr = mysql_fetch_array($sel_q))

						{

							$sel2 = mysql_query("SELECT * from comment where post_id='".$arr['id']."'");

							$cmt =mysql_num_rows($sel2);
							$timestamp = strtotime($arr['time_stamp']);
					 	?>
						
						<div class="clearfix single_content">
							<div class="clearfix post_date floatleft">
								<div class="date">
									<h3><? echo date('d',$timestamp); ?></h3>
									<p><? echo date('M',$timestamp); ?></p>
								</div>
							</div>
							<div class="clearfix post_detail">
								<h2><a href="single-works.php?id=<?php echo $arr['id']; ?>"><?php echo ucwords($arr['title']); ?></a></h2>
								<div class="clearfix post-meta">
									<p><span>
									<i class="fa fa-user"></i> <?php echo ucwords($arr['a_name']); ?></span> <span>
									<i class="fa fa-clock-o"></i><? echo date('d M Y',$timestamp); ?></span> <span>
									<i class="fa fa-comment"></i> <?php echo $cmt; ?></span> <span><i class="fa fa-folder"></i> <?php echo ucwords($arr['brand']); ?></span></p>
								</div>
								<div class="clearfix post_excerpt">
									<div class="post_img">
									<img src="images/all_post/<? echo $arr['img']?>	" alt="<? echo $arr['img']?>"/>
									</div>
									<p style="text-align:justify;"><?php echo substr($arr['discription'],0,320); ?>...	</p>
								</div>
								<a href="single-works.php?id=<?php echo $arr['id']; ?>">Continue Reading</a>
							</div>
						</div>
						
						<?php 
						$arr[]++;	
						?>

						<?php 
						}
						 ?>
						 </div>
						<!--loop end here-->
						<!--pagenumber-->		
					<!-- <div class="pagination">

						<nav>

							<ul>
								<li><a href=""> << </a></li>
								<li><a href="">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href="">4</a></li>
								<li><a href=""> >> </a></li>
							</ul>

						</nav>
					</div>
 -->				</div>
				<div class="clearfix sidebar_container floatright">
				<!--pagenumber end-->
				
				<!--right side start -->	
					<?php 
					include 'right_side.php'
					 ?>
					<!-- right side end-->
				</div>
			</div>
		</section>
		
<?php 
include 'footer.php';
?>
