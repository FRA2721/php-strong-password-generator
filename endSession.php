<?php
// session data init/end
session_start();
session_unset();
session_destroy();

// redirect to the index.php page
header("Location: ./index.php");
?>