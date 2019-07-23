<?php
session_start();
if(!isset($_SESSION['useradmin']))
{
	?>
	<script type="text/javascript">

		window.location="index.php"

	</script>

	<?php
}


include("../config/config.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Spentext</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" rel="stylesheet" type="text/css">



		<style type="text/css" media="screen">
		/*html, body { 
			height:100%; background-color: #999999;}*/

	
	
	 </style>

<script type="text/javascript">



function goBack() 
{
    window.history.go(-1);
}


  </script>

	</head>
<body>

<?php include("admin_header.php"); 
include("left_aside.php")
 ?>
<div class="main">

<div class="admin_main_1" style="margin-top:4%;">
	
	<div class="admin_main_2">
	


	
	
	
	<div class="mid_cls">
	 <div id="flashContent">
     <?php 

     if(isset($_REQUEST['sub_update'])) 
     {
      
      $new_pass = $_REQUEST['new_pass'];


      $update_info = mysql_query("UPDATE admin SET a_password='".$new_pass."' WHERE id='".$uid_s."'");
          if($update_info==true)
          {
            ?>
            <script type="text/javascript">
            alert("Password updated !");
              window.location = 'index.php';
            </script>
            <?php
          }
          else
          {
            ?>
            <script type="text/javascript">
              alert("Password not updated");
            </script>
            <?php
          }
          
     }
     
     ?>
  
    <div class="main_container">
            

                     

                  <?php
               /*   $sel_dsig = mysql_query("SELECT * FROM users WHERE UID=$uid and Status=1");
                  $fetch_admin_access = mysql_fetch_array($sel_dsig);

                 extract($fetch_admin_access);*/
                  ?>
          		  
                    <div class="middl_con_profile">
                      <div class="middl_box_02_profile">
              
                    <script type="text/javascript">
                      
                      function chck()
                       {

                        if(document.f1.new_pass.value != document.f1.conf_pass.value)
                        {
                          alert("Password should be same in both text box !");
                          return false;
                        }
                      }
                    </script>
                                         
                    <br/>
                    <div style="width: 100%; font-size: 20px; font-weight: bold; text-align: left;">
                    <span><img src="../images/lock.png" width="20px;">&nbsp;&nbsp;Set new Password for Admin-</span>
                    </div>
                    <br/><br/>

                      <form name="f1" method="post" >
                      <table cellspacing="7" style="text-align:left;" >
                      
                        <tr>
                          <td>New Password</td>
                          <td><input type="password" class="emp_inp"  name="new_pass" required>
                          </td>

                        </tr>


                        <tr>
                          <td>Confirm Password</td>
                          <td colspan=""><input type="password" class="emp_inp"  name="conf_pass" required></td>
                        </tr>

                        <tr>
                          <td colspan="4" align="center"><input onclick="return chck();" type="submit" name="sub_update" value="Update" class="sub_btn">&nbsp;&nbsp;<input class="sub_btn" onclick="return goBack();" type="button" value="Cancel"/></td>
                        </tr>
                      </table>
                      </form>      		  
                      		</div>
                    </div>
            
           


      		  </div><!--End Mid Class  -->

		  
      </div>
	
	</div>
	
</div>
</div>
</div>

</body>
</html>