<?php
session_start();
include("includes/config.php");

$_SESSION['login']=="";
session_unset();
$_SESSION['logout']="You have successfully logout";
?>
<script language="javascript">
    document.location="signin.php";
</script>