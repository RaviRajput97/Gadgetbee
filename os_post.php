<?php 
include 'header.php';
?>
	
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
					<!--slider-->
					<!-- slider end-->
					<div class="clearfix content">
						<div class="content_title"><h2>Blog Post On Operating Systems</h2></div>

						
					<!--loop start here-->

						<?php 
						$os = $_REQUEST['os'];
						$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.status=1 and mp.os='".$os."' order by mp.id desc ");

						

						while($arr = mysql_fetch_array($sel_q))
						{
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
								<h2><a href="single-works.php?id=<?php echo $arr['id']; ?>"><?php echo $arr['title']; ?></a></h2>
								<div class="clearfix post-meta">
									<p><span>
									<i class="fa fa-user"></i> <?php echo ucwords($arr['a_name']); ?></span> <span>
									<i class="fa fa-clock-o"></i><? echo date('d M Y',$timestamp); ?></span> <span>
									<i class="fa fa-comment"></i> 4 comments</span> <span><i class="fa fa-folder"></i> <?php echo ucwords($arr['brand']); ?></span></p>
								</div>
								<div class="clearfix post_excerpt">
									<img src="images/all_post/<? echo $arr['img']?>	" alt="<? echo $arr['img']?>"/>
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
					</div> -->
				</div>
				<div class="clearfix sidebar_container floatright">
				<!--pagenumber end-->
				
				<!--right side start -->

					<?php 
					 include("right_category.php"); 

						include("right_os.php"); 
					 ?>
					<!-- right side end-->
				</div>
			</div>
		</section>
		
<?php 
include 'footer.php';
?>
