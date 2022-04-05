<?php
$title = "Welcome on Keysaver";
ob_start();
?>

<?php
$content = ob_get_clean();
require 'layout/template.php';
?>