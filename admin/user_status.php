<?php
include("../config/config.php");
 $uid= $_REQUEST['user_id'];
 

$sel_status = mysql_query("SELECT * FROM main_post WHERE id=$uid");

$fetch_status =mysql_fetch_array($sel_status);

extract($fetch_status);

if($status==1)
{
	$update_query = mysql_query("UPDATE main_post SET status=0 WHERE id='".$uid."' ");
}
elseif($status==0)
{
$update_query = mysql_query("UPDATE main_post SET status=1 WHERE id='".$uid."' ");	
}



if($update_query==true)
{
	?>

			<script type="text/javascript">

				 window.history.go(-1);
			</script>

	<?php
}
else
{
	?>

			<script type="text/javascript">

				 window.history.go(-1);
				 alert('Record Not Updated !');
			</script>

	<?php

}
?>