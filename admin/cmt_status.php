<?php
include("../config/config.php");
 $uid= $_REQUEST['c_id'];
 

$sel_status = mysql_query("SELECT * FROM comment WHERE c_id=$uid");

$fetch_status =mysql_fetch_array($sel_status);

extract($fetch_status);

if($status==1)
{
	$update_query = mysql_query("UPDATE comment SET status=0 WHERE c_id='".$uid."' ");
}
elseif($status==0)
{
$update_query = mysql_query("UPDATE comment SET status=1 WHERE c_id='".$uid."' ");	
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