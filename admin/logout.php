<?php
session_start();

//$logout_time = date("Y/m/d h:i:sa");

unset($_SESSION['useradmin']);
unset($_SESSION['username']);
unset($_SESSION['useradmin_check']);



 ?>
  <script type="text/javascript">

      window.location="index.php"

      </script>
  <?php
?>