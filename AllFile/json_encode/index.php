<?php
?>
<!DOCTYPE html>
<html>
<body>

<h2>Get JSON Data from a PHP Server</h2>
<p id="demo"></p>

<script>
const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function() {
  const person = JSON.parse(this.responseText);
  document.getElementById("demo").innerHTML = "Tu t'appelles "+person.name+", tu as "+person.age+" ans";
}
xmlhttp.open("GET", "demo_file.php");
xmlhttp.send();
</script>

</body>
</html>