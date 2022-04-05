<?php
$title="Boutik Homepage";
ob_start();
?>
<h1>Hello</h1>
<?php
$content = ob_get_clean();
require 'layouts/template.php';
?>