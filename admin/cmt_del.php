<?php 
if(isset($_REQUEST['c_id']))
{
	include("../config/config.php");
	
	$id = $_REQUEST['c_id'];
	$del_q =mysql_query("DELETE from comment  WHERE c_id='".$id."'");


	if($del_q==true)
	{
		//unlink("$id");
		header("location:comment.php?msg=Data Deleted !");
	}
	else
	{
		?>
		<script type="text/javascript">
			window.location.href = "comment.php?msg=Error in Query!"
		</script>
		<?php
	}
}

 ?>