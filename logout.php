<?php
session_start();
 
session_destroy();
header('location: login.php');


?>
<script language="javascript" type="text/javascript">
      window.history.forward();
      </script>