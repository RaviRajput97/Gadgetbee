<?php 
include 'header.php';
?>
	
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					<?php 
					$id =$_REQUEST['id'];
					$sel_q = mysql_query("SELECT mp.*,ad.a_name FROM  main_post mp inner join admin ad on mp.add_by=ad.id  where mp.id=$id and mp.status=1");

						$arr = mysql_fetch_array($sel_q);
						$timestamp = strtotime($arr['time_stamp']);

					?>
					<div class="clearfix content">
						<div class="content_title"><h2><?php echo $arr['title']; ?></h2></div>
						<div class="single_work_page clearfix">
							<div class="work_single_page_feature"><img style="max-height: 400px;" src="images/all_post/<? echo $arr['img']?>" /></div>
							<div class="work_meta clearfix">
								<p class="floatleft">Completed : <span><? echo date('d M Y',$timestamp); ?></span> Author: <span><?php echo ucwords($arr['a_name']); ?></span></p>
								<!-- <a class="floatright" href="" target="_blank">Preview</a> -->
							</div>
							<div class="single_work_page_content">
							<?php echo $arr['discription']; ?>
							</div>
							
						</div>
							
					<!-- start portfolio images -->
							<div class="more_works">
								<h2>More Images you may like <i class="fa fa-thumbs-o-up"></i></h2>
								<div class="more_works_container">
						<?php 
						$postid = $_REQUEST['id'];
						$sel_q = mysql_query("SELECT pf_name from portfolio where post_id =$id ");

						while($arr = mysql_fetch_array($sel_q))
						{
					 	?>	

							<div class="single_more_works floatleft">
							  	<div style="height:200px; width:180px; padding:20px; border:1px solid; float:left; ">
							  	
							  	<!--Light box start-->
							  	<a class="group1 example-image-link" data-lightbox="example-set" href="images/portfolio/<?php echo $arr['pf_name']; ?>" title="<? echo $arr['pf_name']?>">

							  		<img src="images/portfolio/<?php echo $arr['pf_name']; ?>" width="500" height="343" alt="">
							  		

							  	</a>

							  	<!--Light box end-->

							  	
								

								</div>
								


							</div>
						<?php 
						$arr[]++;	
						?>

						<?php 
						}
						?>
								</div>
							</div>
					<!-- end portfolio images -->	
					
					<!-- comments form start -->
					<?php 
					 
					if(isset($_REQUEST["submit_contact"]))
					{
						$post_id =$_REQUEST['id'];
						$c_name = $_REQUEST['comment_name'];
						$c_email = $_REQUEST['comment_email'];	
						$comm = $_REQUEST['contact_cmnt'];

					$ins_query = mysql_query("INSERT into comment(post_id,comment_name,comment_email,comments) values('".$post_id."','".$c_name."','".$c_email."','".$comm."')");

						if($ins_query==true)
						{
							?>
							<script>
								window.location.href="single-works.php?msg=comment added&&id=<?php echo $id ?>";
							</script>
							<?php
							
						}
						else
						{
							?>
							<script>
							alert("Invalid file type or size!");
							</script>
						<?php
						}
					}
					?>
					<div class="cmnt_div">
					<h1 style="color:#ffd500;">Add new Comment:</h1>
					<form method="post">
					<table cellspacing="25">
						<tr>
							<td>Name<sup style="color:red;">*</sup></td>
							<td><input type = "text" name ="comment_name" required /></td>
						</tr>
						<tr>
							<td>Email<sup style="color:red;">*</sup></td>
							<td><input type = "email" name ="comment_email" required/></td>
						</tr>
						<tr>
							<td>Comment<sup style="color:red;">*</sup></td>
							<td><textarea rows = "5" cols ="50" maxlength="60" style="resize:none;"  name ="contact_cmnt" required></textarea></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input style="width:60%; cursor:pointer;" type="submit" name="submit_contact" value="submit"></td>
							
						</tr>
					</table>
					 
					
					</form>
					</div>
					<!-- comments form end -->
					</div>
					
					<!-- start recent cmnt -->
					<div class="rcnt_cmt">
					<h1 style="color:#ffd500;">Recent Comment</h1>
					<hr/><hr/>
					<div>
					<?php
					 $sel=mysql_query("SELECT * FROM comment where post_id='".$_REQUEST['id']."' and status=1 order by c_id desc");

					 $sn=1;
					 while ($cmt=mysql_fetch_array($sel)) {
					 	?>
					 	<div style="padding:20px">

					 	<h4><span><?php echo $sn;?> >> </span><span ><?php echo $cmt['comment_name']; ?></span></h4>
					 	<p><?php $cmt_time = strtotime($cmt['cmt_time']); echo date('F dS,Y ',$cmt_time)." at ".date('h:i A',$cmt_time); ?></p>

					 	<p style="border-radius: 10px/30px;border:1px solid #ccc; color:black; min-height:60px; padding:12px;"><?php echo $cmt['comments']; ?></p>
					 	<hr>

					 	</div>
					 	<?php
					 	$sn++;
					 }

					?>
						
					</div>
					</div>
				</div>

				<!-- <div class="clearfix sidebar_container floatright">
				
					<div class="clearfix newsletter">
						<form>
							<h2>Signup for newsletter</h2>
							<input type="text" placeholder="Name" id="mce-TEXT"/>
							<input type="email" placeholder="Name" id="mce-EMAIL"/>
							<input type="submit" value="Submit" id="mc-embedded-subscribe"/>
						</form>
					</div> -->
					<!-- right slider start -->
					<?php 
					include 'right_side.php'
					 ?>
					<!-- right slider end -->
				</div>
			</div>
		</section>
		
<?php 
include 'footer.php';
?>
