<?php
session_start();

unset($_SESSION['username']);
$User="";
session_destroy();
?>
<script>
window.location.href = "index.php";
</script>
<a href="index.php" > relogin</a>
