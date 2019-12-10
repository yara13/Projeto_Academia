
<?php
// Start the session
session_start();

if (!isset($_SESSION['nID'])) {
    header("Location: index.php");
}
else {
    $_SESSION['nID'] = 1;
}
?>