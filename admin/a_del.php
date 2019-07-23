<?php 
if(isset($_REQUEST['uid']))
{
	include("../config/config.php");
	
	$id = $_REQUEST['uid'];
	$del_q =mysql_query("UPDATE main_post set status=2 WHERE id='".$id."'");
	/*$del_q =mysql_query("DELETE from main_post  WHERE id='".$id."'");*/


	if($del_q==true)
	{
		header("location:post.php?msg=Data Deleted !");
	}
	else
	{
		?>
		<script type="text/javascript">
			window.location.href = "post.php?msg=Error in Query!"
		</script>
		<?php
		/*header("location:list.php?msg=Error in Query!");		*/
	}
}

 ?>