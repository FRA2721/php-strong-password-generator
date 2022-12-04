<?php
// session data start/end
session_start();
session_unset();
session_destroy();

// redirect to index.php page
header("Location: ./index.php");
?>