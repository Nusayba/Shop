<?php

session_start();
unset($_SESSION['loginShop']);
?>

<script>
    document.location.replace('../index.php');
</script>
