<?php 

mysql_connect('localhost','root','');

$conn = mysql_select_db('gadget');
if($conn==false)
{
	echo "connection error !";
}
 ?>
