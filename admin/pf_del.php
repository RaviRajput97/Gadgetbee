<?php 
if(isset($_REQUEST['pf_id']))
{
	include("../config/config.php");
	
	$id = $_REQUEST['pf_id'];
	$del_q =mysql_query("DELETE from portfolio  WHERE id='".$id."'");


	if($del_q==true)
	{
		//unlink("filename");
		header("location:portfolio.php?msg=Data Deleted !");
	}
	else
	{
		?>
		<script type="text/javascript">
			window.location.href = "portfolio.php?msg=Error in Query!"
		</script>
		<?php
	}
}

 ?>